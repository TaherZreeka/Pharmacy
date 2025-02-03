<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function suppliers(Request $request){
        $suppliers=Supplier::all();
        return view('admin.suppliers.list',compact('suppliers'));
    }
    public function add_suppliers(){
        return view('admin.suppliers.add');
    }
     public function insert_add_suppliers(Request $request){
    //    dd($request->all());
     $save= new Supplier();
     $save ->name=trim($request->name);
     $save ->email=trim($request->email);
     $save ->contact_number=trim($request->contact_number);
        $save->save();
        return redirect('admin/suppliers')->with('success','Supplier Successfully Create!');
    }
       public function edit_suppliers($id, Request $request)
{
    // Find the customer by ID
    $edit_supplier = Supplier::find($id);

    // Check if the customer exists
    if (!$edit_supplier) {
        return redirect('admin/suppliers')->with('error', 'Medicine not found.');
    }

    // Pass the customer data to the view
    return view('admin.suppliers.edit',compact('edit_supplier'));
}
public function update_suppliers(Request $request, $id)
{
    // Find the customer
    $customer = Supplier::find($id);

    if (!$customer) {
        return redirect('admin/suppliers')->with('error', 'Supplier not found.');
    }

    $save=Supplier::find($id);
     $save ->name=trim($request->name);
     $save ->contact_number=trim($request->contact_number);
     $save ->address=trim($request->address);
     $save ->doctor_name=trim($request->doctor_name);
     $save ->doctor_address=trim($request->doctor_address);
        $save->save();

    return redirect('admin/suppliers')->with('success', 'Supplier updated successfully.');
}
public function delete_suppliers($id)
{
    // Find the customer by ID
    $customer = Supplier::find($id);

    // Check if the customer exists
    if (!$customer) {
        return redirect('admin/suppliers')->with('error', 'Supplier not found.');
    }

    // Delete the customer
    $customer->delete();

    // Redirect with a success message
    return redirect('admin/suppliers')->with('success', 'Supplier deleted successfully.');
}
}