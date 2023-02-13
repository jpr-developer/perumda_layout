<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PurchaseTransaction extends Model
{
    use HasFactory;
    protected $table = 'purchase_transactions';
    protected $fillable = [
        'code', 'supplier_id','date','nominal'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('l, d F Y');
    }

    public function getMonths($id, $date)
    {
        $months = $this->select(DB::raw("DATE_FORMAT(date, '%Y-%m') as month"))
                                        ->where('supplier_id', $id)
                                        ->where(DB::raw("DATE_FORMAT(date, '%Y')"), $date)
                                        ->groupBy(DB::raw("DATE_FORMAT(date, '%Y-%m')"))
                                        ->get();

        $remappMonths = [];
        foreach ($months as $value) {
            array_push($remappMonths, Carbon::parse($value->month)->translatedFormat('F'));
        }

        return $remappMonths;
    }

    public function getYears($id)
    {
        $years = $this->select(DB::raw("DATE_FORMAT(date, '%Y') as year"))
                                        ->where('supplier_id', $id)
                                        ->groupBy(DB::raw("DATE_FORMAT(date, '%Y')"))
                                        ->get();

        $yearsGroup = [];
        foreach ($years as $value) {
            array_push($yearsGroup, $value->year);
        }

        return $yearsGroup;
    }

    public function getTotalTransactions($id, $date)
    {
        $getTotal = $this->where(DB::raw("DATE_FORMAT(date, '%Y')"), $date)
                                    ->where('supplier_id', $id)
                                    ->select(DB::raw("SUM(nominal) as total"))
                                    ->groupBy(DB::raw("DATE_FORMAT(date, '%Y-%m')"))
                                    ->orderBy(DB::raw("DATE_FORMAT(date, '%Y-%m')"))
                                    ->get();

        $totalTransactions = [];
        foreach ($getTotal as $value) {
            array_push($totalTransactions, $value->total);
        }

        return $totalTransactions;
    }
}
