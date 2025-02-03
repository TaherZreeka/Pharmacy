<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
     public function invoices()
{
    // Fetch all medicines with their associated suppliers
    $invoices = Invoice::with('customer')->get();

    // Fetch all suppliers (for dropdown or other purposes)

    // Pass the data to the view
    return view('admin.invoices.list',compact('invoices'));
}

    public function create(){
         $customers = Customer::all();
        return view('admin.invoices.create',compact('customers'));
    }

    public function store(Request $request){
    //    dd($request->all());
     $save= new Invoice();
     $save ->customer_id=trim($request->customer_id);
     $save ->invoice_no=trim($request->invoice_no);
     $save ->date=trim($request->date);
     $save ->total_amount=trim($request->total_amount);
     $save ->total_discount=trim($request->total_discount);
     $save ->net_total=trim($request->net_total);
     $save ->total_discount=trim($request->total_discount);
        $save->save();
        return redirect('/admin/invoices')->with('success','Invoice Successfully Create!');
    }
 public function edit ($id, Request $request)
{
    // Find the customer by ID
    $edit_invoice = Invoice::find($id);
             $customers = Customer::all();

    // Check if the customer exists
    if (!$edit_invoice) {
        return redirect('admin/invoices')->with('error', 'Invoice not found.');
    }

    // Pass the customer data to the view
    return view('admin.invoices.edit',compact('customers'))->with('edit_invoice', $edit_invoice);
}
    public function update(Request $request, $id)
{
    $save=Invoice::find($id);
     $save ->customer_id=trim($request->customer_id);
     $save ->invoice_no=trim($request->invoice_no);
     $save ->date=trim($request->date);
     $save ->total_amount=trim($request->total_amount);
     $save ->total_discount=trim($request->total_discount);
     $save ->net_total=trim($request->net_total);
     $save ->total_discount=trim($request->total_discount);
        $save->save();



    // Redirect to the invoice list with a success message
    return redirect('admin/invoices')->with('success', 'Invoice updated successfully.');
}
public function delete_invoices($id)
{
    // Find the customer by ID
    $invoices = Invoice::find($id);

    // Check if the customer exists
    if (!$invoices) {
        return redirect('admin/invoices')->with('error', 'Invoice not found.');
    }

    // Delete the customer
    $invoices->delete();

    // Redirect with a success message
    return redirect('admin/invoices')->with('success', 'Invoice deleted successfully.');
}
}
