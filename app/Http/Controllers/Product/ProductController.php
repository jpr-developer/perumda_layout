<?php

namespace App\Http\Controllers\Product;

use App\Exports\Product\ProductExport;
use App\Http\Controllers\Controller;
use App\Imports\Product\ProductCategoryImport;
use App\Imports\Product\ProductImport;
use App\Imports\Product\ProductSubCategoryImport;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $productCategories = ProductCategory::select('id', 'name')->get();
        $productSubCategories = ProductSubCategory::select('id', 'name')->get();

        $filter = $request->product_category_id;

        $products = Product::select('code', 'name', 'product_category_id', 'product_sub_category_id')
                                ->where('product_category_id', 'like', '%'.$filter.'%')
                                ->paginate(10);

        return view('product.index', compact('productCategories', 'productSubCategories', 'products', 'filter'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {

            $search = $request->search;
            $products = Product::where('name', 'like', '%'.$search.'%')->paginate(10);

            $remappProducts = [];
            foreach ($products as $value) {

                $data = [
                    'code' => $value->code,
                    'name' => $value->name,
                    'product_category' => $value->productCategory->name,
                    'product_sub_category' => $value->productSubCategory->name
                ];

                array_push($remappProducts, $data);
            }

            $response = [
                'products' => $remappProducts
            ];

            return response($response, 200);
        }
    }

    public function detail($code)
    {
        $product = Product::where('code', $code)->first();
        return view('product.detail', compact('product'));
    }

    public function import(Request $request)
    {
        if ($request->isMethod('post')) {

            // Import category and sub first
            Excel::queueImport(new ProductCategoryImport, $request->import);
            Excel::queueImport(new ProductSubCategoryImport, $request->import);


            Excel::queueImport(new ProductImport, $request->import);
            Alert::toast('Data berhasil diimport', 'success');
            return back();

        }
    }

    public function export()
    {
        return Excel::download(new ProductExport, 'product.xlsx');
    }
}
