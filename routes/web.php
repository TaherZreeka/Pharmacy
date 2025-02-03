<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PurchasesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthController::class,'login']);
Route::post('/login_post',[AuthController::class,'login_post']);
Route::get('/forgot',[AuthController::class,'forgot']);
Route::post('/forgot_post',[AuthController::class,'forgot_post']);
Route::get('/reset/{token}',[AuthController::class,'getReset']);
Route::post('/reset_post/{token}',[AuthController::class,'reset_post']);


Route::middleware(['admin'])->group(function () {
Route::get('admin/dashboard',[DashboardController::class,'dashboard']);
// Start Customer
Route::get('/admin/customers',[CustomerController::class,'customers']);
Route::get('/admin/customers/add',[CustomerController::class,'add_customers']);
Route::post('/admin/customers/add',[CustomerController::class,'insert_add_customers']);
Route::get('/admin/customers/edit/{id}',[CustomerController::class,'edit_customers']);
Route::post('/admin/customers/edit/{id}',[CustomerController::class,'update_customers']);
Route::delete('/admin/customers/{id}', [CustomerController::class, 'delete_customers']);
//End Customer

//Start Suppliers
Route::get('/admin/suppliers',[SupplierController::class,'suppliers']);
Route::get('/admin/suppliers/add',[SupplierController::class,'add_suppliers']);
Route::post('/admin/suppliers/add',[SupplierController::class,'insert_add_suppliers']);
Route::get('/admin/suppliers/edit/{id}',[SupplierController::class,'edit_suppliers']);
Route::post('/admin/suppliers/edit/{id}',[SupplierController::class,'update_suppliers']);
Route::delete('/admin/suppliers/{id}', [SupplierController::class, 'delete_suppliers']);
//End Suppliers


//Start Medicines
Route::get('/admin/medicines',[MedicineController::class,'medicines']);
Route::get('/admin/medicines/add',[MedicineController::class,'add_medicines']);
Route::post('/admin/medicines/add',[MedicineController::class,'insert_add_medicines']);
Route::get('/admin/medicines/edit/{id}',[MedicineController::class,'edit_medicines']);
Route::post('/admin/medicines/edit/{id}',[MedicineController::class,'update_medicines']);
Route::delete('/admin/medicines/{id}', [MedicineController::class, 'delete_medicines']);
Route::get('/admin/medicines_stock',[MedicineController::class,'medicines_stock_list']);
Route::get('/admin/medicines_stock/add',[MedicineController::class,'add_medicines_stock']);
Route::post('/admin/medicines_stock/add',[MedicineController::class,'insert_add_medicines_stock']);
Route::get('/admin/medicines_stock/edit/{id}',[MedicineController::class,'edit_medicines_stock']);
Route::post('/admin/medicines_stock/edit/{id}',[MedicineController::class,'update_medicines_stock']);
Route::delete('/admin/medicines_stock/{id}', [MedicineController::class, 'delete_medicines_stock']);

//End Medicines


//Start Invoices


Route::get('/admin/invoices',[InvoiceController::class,'invoices']);
Route::get('/admin/invoices/create',[InvoiceController::class,'create']);
Route::post('/admin/invoices/store', [InvoiceController::class, 'store'])->name('admin.invoices.store');
Route::get('/admin/invoices/edit/{id}', [InvoiceController::class, 'edit']);
Route::post('/admin/invoices/update/{id}', [InvoiceController::class, 'update'])->name('admin.invoices.update');
Route::delete('/admin/invoices/{id}', [InvoiceController::class, 'delete_invoices']);

//End Invoices

//Start Purchases
Route::get('/admin/purchases',[PurchasesController::class,'purchases']);
Route::get('/admin/purchases/add',[PurchasesController::class,'add_purchases']);

//End  Purchases

//Start My Account
Route::get('/admin/my_account',[DashboardController::class,'my_account']);
Route::post('/admin/my_account',[DashboardController::class,'my_account_update']);
//End  My Account
});
Route::get('/logout',[AuthController::class,'logout']);