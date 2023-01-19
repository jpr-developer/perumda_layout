<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
});
Route::prefix('/employee')->group(function() {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/import', [EmployeeController::class, 'import'])->name('employee.import');
    Route::get('/detail/{nip}', [EmployeeController::class, 'detail'])->name('employee.detail');
    Route::get('/search', [EmployeeController::class, 'search'])->name('employee.search');
    Route::get('/export', [EmployeeController::class, 'export'])->name('employee.export');
});

Route::prefix('/mitra')->group(function() {
    // Supplier
    Route::get('/supplier', function() {
        return view('mitra.supplier.index');
    });
    Route::get('/supplier/detail', function() {
        return view('mitra.supplier.detail');
    });
    Route::get('/supplier/detail/transaksi', function() {
        return view('mitra.supplier.detail-transaksi');
    });

    // Reseller
    Route::get('/reseller', function() {
        return view('mitra.reseller.index');
    });
    Route::get('/reseller/detail', function() {
        return view('mitra.reseller.detail');
    });
    Route::get('/reseller/detail/transaksi', function() {
        return view('mitra.reseller.detail-transaksi');
    });

    // Toko
    Route::get('/store', function() {
        return view('mitra.toko.index');
    });
    Route::get('/store/detail', function() {
        return view('mitra.toko.detail');
    });
    Route::get('/store/detail/transaksi', function() {
        return view('mitra.toko.detail-transaksi');
    });
});

// Products
Route::get('/products', function() {
    return view('product.index');
});
Route::get('/products/detail', function() {
    return view('product.detail');
});

// Pergudangan
Route::prefix('/warehouse')->group(function () {
    // Pemesanan
    Route::get('/pemesanan', function() {
        return view('pergudangan.pemesanan.index');
    });
    Route::get('/pemesanan/detail', function() {
        return view('pergudangan.pemesanan.detail');
    });
    // Stock
    Route::get('/stock', function() {
        return view('pergudangan.stock.index');
    });
    // Opname
    Route::get('/opname', function() {
        return view('pergudangan.opname.index');
    });
    Route::get('/opname/detail', function() {
        return view('pergudangan.opname.detail');
    });
    // Spoil
    Route::get('/spoil', function() {
        return view('pergudangan.spoil.index');
    });
    Route::get('/spoil/detail', function() {
        return view('pergudangan.spoil.detail');
    });
    // Arus Produk
    Route::get('/arus-produk', function() {
        return view('pergudangan.arus_produk.index');
    });
    Route::get('/arus-produk/detail', function() {
        return view('pergudangan.arus_produk.detail');
    });
});
// Penjualan
Route::prefix('/penjualan')->group(function() {
    Route::get('/', function() {
        return view('penjualan.sales.index');
    });
    Route::get('/detail', function() {
        return view('penjualan.sales.detail');
    });

    // Retur Penjualan
    Route::get('/retur', function() {
        return view('penjualan.retur.index');
    });
    Route::get('/retur/detail', function() {
        return view('penjualan.retur.detail');
    });
    // Spoil Penjualan
    Route::get('/spoil', function() {
        return view('penjualan.spoil.index');
    });
    Route::get('/spoil/detail', function() {
        return view('penjualan.spoil.detail');
    });
});
// Pengiriman
Route::prefix('/pengiriman')->group(function() {
    Route::get('/permintaan', function() {
        return view('pengiriman.permintaan.index');
    });
    Route::get('/permintaan/detail', function() {
        return view('pengiriman.permintaan.detail');
    });
    // Detail Retur Pengiriman
    Route::get('/retur', function() {
        return view('pengiriman.retur.index');
    });
    Route::get('/retur/detail', function() {
        return view('pengiriman.retur.detail');
    });

    // Spoil Pengiriman Produk
    Route::get('/spoil', function() {
        return view('pengiriman.spoil.index');
    });
    Route::get('/spoil/detail', function() {
        return view('pengiriman.spoil.detail');
    });
});
// Pendapatan Lain
Route::get('/pendapatan_lain', function() {
    return view('pendapatan_lain.index');
});
Route::get('/pendapatan_lain/detail', function() {
    return view('pendapatan_lain.detail');
});
// Operasional
Route::prefix('/operasional')->group(function() {
    // Bisnis
    Route::get('/bisnis', function() {
        return view('operasional.bisnis.index');
    });
    Route::get('/bisnis/detail', function() {
        return view('operasional.bisnis.detail');
    });
    // Non Bisnis
    Route::get('/non-bisnis', function() {
        return view('operasional.non_bisnis.index');
    });
    Route::get('/non-bisnis/detail', function() {
        return view('operasional.non_bisnis.detail');
    });
});

// KPI
Route::prefix('kpi')->group(function() {
    Route::get('/setting', function() {
        return view('KPI.setting.index');
    });
    Route::get('/view', function() {
        return view('KPI.view.index');
    });
    // Performa Indikator
    Route::get('/performa_indikator', function() {
        return view('KPI.performa_indikator.index');
    });
});

// RKAPB
Route::prefix('/rkapb')->group(function() {
    // Program Bisnis
    Route::prefix('/program-bisnis')->group(function() {
        Route::get('/pendapatan-usaha', function() {
            return view('rkapb.bisnis.pendapatan_usaha.index');
        });
        Route::get('/harga-pokok-penjualan', function() {
            return view('rkapb.bisnis.hpp.index');
        });
        Route::get('/laba-kotor-usaha', function() {
            return view('rkapb.bisnis.laba_kotor.index');
        });
    });

    // Penjunjang Bisnis
    Route::prefix('/program-penunjang-bisnis')->group(function() {
        Route::get('/biaya-pegawai', function() {
            return view('rkapb.penunjang_bisnis.biaya_pegawai.index');
        });
        Route::get('/biaya-kantor', function() {
            return view('rkapb.penunjang_bisnis.biaya_kantor.index');
        });
        Route::get('/biaya-umum', function() {
            return view('rkapb.penunjang_bisnis.biaya_umum.index');
        });
        Route::get('/biaya-pemasaran', function() {
            return view('rkapb.penunjang_bisnis.biaya_pemasaran.index');
        });
    });
    Route::get('/program-penunjang-bisnis', function() {
        return view('rkapb.penunjang_bisnis.index');
    });
    Route::get('/general', function() {
        return view('rkapb.general.index');
    });
});

// Financial
Route::prefix('/financial')->group(function() {
    Route::prefix('/bisnis')->group(function() {
        Route::get('/pendapatan-usaha', function() {
            return view('financial.bisnis.pendapatan_usaha.index');
        });
        Route::get('/pendapatan-usaha/detail', function() {
            return view('financial.bisnis.pendapatan_usaha.detail');
        });

        Route::get('/hpp', function() {
            return view('financial.bisnis.hpp.index');
        });
        Route::get('/hpp/detail', function() {
            return view('financial.bisnis.hpp.detail');
        });

        Route::get('/laba-kotor', function() {
            return view('financial.bisnis.laba_kotor.index');
        });
        Route::get('/laba-kotor/detail', function() {
            return view('financial.bisnis.laba_kotor.detail');
        });

    });

    Route::prefix('/penunjang-bisnis')->group(function() {
        Route::get('/biaya-pegawai', function() {
            return view('financial.penunjang_bisnis.biaya_pegawai.index');
        });
        Route::get('/biaya-pegawai/detail', function() {
            return view('financial.penunjang_bisnis.biaya_pegawai.detail');
        });

        Route::get('/biaya-kantor', function() {
            return view('financial.penunjang_bisnis.biaya_kantor.index');
        });
        Route::get('/biaya-kantor/detail', function() {
            return view('financial.penunjang_bisnis.biaya_kantor.detail');
        });

        Route::get('/biaya-umum', function() {
            return view('financial.penunjang_bisnis.biaya_umum.index');
        });
        Route::get('/biaya-umum/detail', function() {
            return view('financial.penunjang_bisnis.biaya_umum.detail');
        });

        Route::get('/biaya-pemasaran', function() {
            return view('financial.penunjang_bisnis.biaya_pemasaran.index');
        });
        Route::get('/biaya-pemasaran/detail', function() {
            return view('financial.penunjang_bisnis.biaya_pemasaran.detail');
        });
    });

    // Biaya Operasional
    Route::get('/biaya_operasional', function() {
        return view('financial.biaya_operasional.index');
    });
    Route::get('/biaya_operasional/detail', function() {
        return view('financial.biaya_operasional.detail');
    });

});

// Jaminan Mutu
Route::get('/jaminan-mutu', function() {
    return view('jaminan_mutu.index');
});
