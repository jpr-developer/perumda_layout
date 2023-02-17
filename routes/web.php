<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeScreenController;
use App\Http\Controllers\Import\ImportDataController;
use App\Http\Controllers\Mitra\ResellerController;
use App\Http\Controllers\Mitra\StoreController;
use App\Http\Controllers\Mitra\SupplierController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Purchase\PurchaseController;
use App\Http\Controllers\Sales\SalesResellerTransactionController;
use App\Http\Controllers\Warehouse\WarehouseController;
use App\Http\Controllers\Warehouse\WarehouseImportController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});


Auth::routes();

Route::get('/home-screen', [HomeScreenController::class, 'index'])->name('home.screen');

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('import-data')->group(function() {
        Route::get('/', [ImportDataController::class, 'index'])->name('import.index');

        // Purchase Transaction Import
        Route::post('/purchase', [PurchaseController::class, 'import'])->name('purchase.import');

        // Sales Transaction Reseller
        Route::post('/sales-transaction-reseller', [SalesResellerTransactionController::class, 'import'])->name('sales-transaction-reseller.import');
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
        Route::prefix('/supplier')->group(function() {
            Route::get('/', [SupplierController::class, 'index'])->name('supplier.index');
            Route::get('/detail/{code}', [SupplierController::class, 'detail'])->name('supplier.detail');
            Route::get('/search', [SupplierController::class, 'search'])->name('supplier.search');
            Route::post('/import', [SupplierController::class, 'import'])->name('supplier.import');
            Route::get('/export', [SupplierController::class, 'export'])->name('supplier.export');

            // Transaction Data
            Route::prefix('/transaction')->group(function() {
                Route::get('/chart/{code}', [SupplierController::class, 'chart'])->name('supplier.chart');
                Route::get('/detail/{code_sp}/{code_tr}', [SupplierController::class, 'detail_transaction'])->name('supplier.detail-transaction');
                Route::get('/chart/filter/year/{code}', [SupplierController::class, 'chart_filter'])->name('supplier.chart-filter');
                Route::get('/export/{supplier_id}', [SupplierController::class, 'export_transaction'])->name('supplier.export-transaction');
            });
        });

        // Reseller
        Route::prefix('reseller')->group(function() {
            Route::get('/', [ResellerController::class, 'index'])->name('reseller.index');
            Route::get('/detail/{code}', [ResellerController::class, 'detail'])->name('reseller.detail');
            Route::post('/import', [ResellerController::class, 'import'])->name('reseller.import');
            Route::get('/search', [ResellerController::class, 'search'])->name('reseller.search');


            Route::prefix('/transactions')->group(function() {
                Route::get('/detail', [ResellerController::class, 'transaction_detail'])->name('reseller.transaction-detail');
                Route::post('/import/{id}', [ResellerController::class, 'import_transaction'])->name('reseller.import-transaction');
            });

        });

        Route::prefix('/store')->group(function() {
            Route::get('/', [StoreController::class, 'index'])->name('store.index');
            Route::get('/search', [StoreController::class, 'search'])->name('store.search');
            Route::get('/detail/{code}', [StoreController::class, 'detail'])->name('store.detail');
            Route::post('/import', [StoreController::class, 'import'])->name('store.import');


            Route::prefix('/transactions')->group(function() {
                Route::get('detail', function() {
                    return view('mitra.toko.detail-transaksi');
                });
                Route::post('/import/{id}', [StoreController::class, 'import_transaction'])->name('store.import-transaction');
                Route::get('/detail/{code_store}/{code_tr}', [StoreController::class, 'transaction_detail'])->name('store.transaction.detail');
                Route::get('/chart/{code}', [StoreController::class, 'chart'])->name('store.chart');
                Route::get('/chart/filter/year/{code}', [StoreController::class, 'chart_filter'])->name('store.chart-filter');
            });
        });

    });

    // Products
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/search', [ProductController::class, 'search'])->name('product.search');
    Route::post('/products/import', [ProductController::class, 'import'])->name('product.import');
    Route::get('/products/export', [ProductController::class, 'export'])->name('product.export');
    Route::get('/product/detail/{code}', [ProductController::class, 'detail'])->name('product.detail');

    // Pergudangan
    Route::prefix('/warehouse')->group(function () {
        // Pemesanan
        Route::get('/purchase', [WarehouseController::class, 'purchase'])->name('warehouse.purchase');
        Route::get('/purchase/detail/{code}', [WarehouseController::class, 'purchase_detail'])->name('warehouse.purchase_detail');
        // Stock
        Route::get('/stocks', [WarehouseController::class, 'stock'])->name('warehouse.stock');
        // Opname
        Route::get('/opname', [WarehouseController::class, 'opname'])->name('warehouse.opname');
        Route::get('/opname/detail/{code}', [WarehouseController::class, 'opname_detail'])->name('warehouse.opname-detail');
        Route::post('/opname/import', [WarehouseImportController::class, 'opname_import'])->name('warehouse.opname-import');
        // Spoil
        Route::get('/spoil', [WarehouseController::class, 'spoil'])->name('warehouse.spoil');
        Route::get('/spoil/detail', function() {
            return view('pergudangan.spoil.detail');
        });
        // Arus Produk
        Route::get('/arus-produk', [WarehouseController::class, 'arus_produk'])->name('warehouse.arus-produk');
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

});
