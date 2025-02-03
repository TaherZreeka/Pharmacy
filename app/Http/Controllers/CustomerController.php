<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function customers(Request $request){
        $customers=Customer::all();
        return view('admin.customers.list',compact('customers'));
    }
    public function add_customers(){
        return view('admin.customers.add');
    }
    public function insert_add_customers(Request $request){
    //    dd($request->all());
     $save= new Customer;
     $save ->name=trim($request->name);
     $save ->contact_number=trim($request->contact_number);
     $save ->address=trim($request->address);
     $save ->doctor_name=trim($request->doctor_name);
     $save ->doctor_address=trim($request->doctor_address);
        $save->save();
        return redirect('admin/customers')->with('success','Customer Successfully Create!');
    }
   public function edit_customers($id, Request $request)
{
    // Find the customer by ID
    $edit_customers = Customer::find($id);

    // Check if the customer exists
    if (!$edit_customers) {
        return redirect('admin/customers')->with('error', 'Customer not found.');
    }

    // Pass the customer data to the view
    return view('admin.customers.edit')->with('edit_customers', $edit_customers);
}
public function update_customers(Request $request, $id)
{
    // Find the customer
    $customer = Customer::find($id);

    if (!$customer) {
        return redirect('admin/customers')->with('error', 'Customer not found.');
    }

    $save=Customer::find($id);
     $save ->name=trim($request->name);
     $save ->contact_number=trim($request->contact_number);
     $save ->address=trim($request->address);
     $save ->doctor_name=trim($request->doctor_name);
     $save ->doctor_address=trim($request->doctor_address);
        $save->save();

    return redirect('admin/customers')->with('success', 'Customer updated successfully.');
}
public function delete_customers($id)
{
    // Find the customer by ID
    $customer = Customer::find($id);

    // Check if the customer exists
    if (!$customer) {
        return redirect('admin/customers')->with('error', 'Customer not found.');
    }

    // Delete the customer
    $customer->delete();

    // Redirect with a success message
    return redirect('admin/customers')->with('success', 'Customer deleted successfully.');
}
}