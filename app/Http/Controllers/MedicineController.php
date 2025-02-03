<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Medicine;
use App\Models\Medicine_Stock;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function medicines()
{
    // Fetch all medicines with their associated suppliers
    $medicines = Medicine::with('supplier')->get();

    // Fetch all suppliers (for dropdown or other purposes)

    // Pass the data to the view
    return view('admin.medicines.list', compact('medicines'));
}

    public function add_medicines(){
         $suppliers = Supplier::all();
        return view('admin.medicines.add', compact('suppliers'));
    }
public function insert_add_medicines(Request $request){
    //    dd($request->all());
     $save= new Medicine;
     $save ->Medicines_Name=trim($request->Medicines_Name);
     $save ->Packing=trim($request->Packing);
     $save ->Generic_Name=trim($request->Generic_Name);
     $save ->supplier_id=trim($request->supplier_id);
        $save->save();
        return redirect('/admin/medicines')->with('success','Medicine Successfully Create!');
    }
     public function edit_medicines($id, Request $request)
{
    // Find the customer by ID
    $edit_medicines = Medicine::find($id);
             $suppliers = Supplier::all();

    // Check if the customer exists
    if (!$edit_medicines) {
        return redirect('admin/medicines')->with('error', 'Medicine not found.');
    }

    // Pass the customer data to the view
    return view('admin.medicines.edit',compact('suppliers'))->with('edit_medicines', $edit_medicines);
}
public function update_medicines(Request $request, $id)
{
    // Find the customer
    $medicines = Medicine::find($id);

    if (!$medicines) {
        return redirect('admin/medicines')->with('error', 'Medicine not found.');
    }

    $save=Medicine::find($id);
    $save ->Medicines_Name=trim($request->Medicines_Name);
     $save ->Packing=trim($request->Packing);
     $save ->Generic_Name=trim($request->Generic_Name);
     $save ->supplier_id=trim($request->supplier_id);
        $save->save();

    return redirect('admin/medicines')->with('success', 'Medicine updated successfully.');
}
public function delete_medicines($id)
{
    // Find the customer by ID
    $medicines = Medicine::find($id);

    // Check if the customer exists
    if (!$medicines) {
        return redirect('admin/medicines')->with('error', 'Medicine not found.');
    }

    // Delete the customer
    $medicines->delete();

    // Redirect with a success message
    return redirect('admin/medicines')->with('success', 'Medicine deleted successfully.');
}

public function medicines_stock_list(){
    $medicines_stock =Medicine_Stock::all();
    return view('admin.medicines_stock.list',compact('medicines_stock'));
}
public function add_medicines_stock(){
        return view('admin.medicines_stock.add');
    }
    public function insert_add_medicines_stock(Request $request){
    //    dd($request->all());
     $save= new Medicine_Stock();
     $save ->Medicines_Name=trim($request->Medicines_Name);
     $save ->Batch_Id=trim($request->Batch_Id);
     $save ->Ex_Date=trim($request->Ex_Date);
     $save ->Qty=trim($request->Qty);
     $save ->M_R_P=trim($request->M_R_P);
     $save ->Rate=trim($request->Rate);
        $save->save();
        return redirect('/admin/medicines_stock')->with('success','Medicine Stock Successfully Create!');
    }















    //================================
      public function edit_medicines_stock($id, Request $request)
{
    // Find the customer by ID
    $edit_medicines_stock = Medicine_Stock::find($id);
             $suppliers = Supplier::all();

    // Check if the customer exists
    if (!$edit_medicines_stock) {
        return redirect('admin/medicines_stock')->with('error', 'Medicine not found.');
    }

    // Pass the customer data to the view
    return view('admin.medicines_stock.edit',compact('edit_medicines_stock'))->with('edit_medicines_stock', $edit_medicines_stock);
}
public function update_medicines_stock(Request $request, $id)
{
    // Find the customer
    $medicines = Medicine_Stock::find($id);

    if (!$medicines) {
        return redirect('admin/medicines_stock')->with('error', 'Medicine Stock not found.');
    }

    $save=Medicine_Stock::find($id);
    $save ->Medicines_Name=trim($request->Medicines_Name);
     $save ->Batch_Id=trim($request->Batch_Id);
     $save ->Ex_Date=trim($request->Ex_Date);
     $save ->Qty=trim($request->Qty);
     $save ->M_R_P=trim($request->M_R_P);
     $save ->Rate=trim($request->Rate);
        $save->save();

    return redirect('admin/medicines_stock')->with('success', 'Medicine Stock updated successfully.');
}
public function delete_medicines_stock($id)
{
    // Find the customer by ID
    $medicines_stock = Medicine_Stock::find($id);

    // Check if the customer exists
    if (!$medicines_stock) {
        return redirect('admin/medicines_stock')->with('error', 'Medicine Stock not found.');
    }

    // Delete the customer
    $medicines_stock->delete();

    // Redirect with a success message
    return redirect('admin/medicines_stock')->with('success', 'Medicine Stock deleted successfully.');
}
}
