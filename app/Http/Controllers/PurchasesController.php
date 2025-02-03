<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
     public function purchases(Request $request){
        $invoices=Invoice::all();
        $suppliers=Supplier::all();
        $purchases=Purchase::all();
        return view('admin.purchases.list',compact('invoices','suppliers','purchases'));
    }
    public function add_purchases(){
           $suppliers = Supplier::all();
           $invoices = Invoice::all();
        return view('admin.purchases.add',compact('invoices','suppliers'));
    }
}
