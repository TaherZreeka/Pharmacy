@extends('admin.layouts.app')
@section('admin_title')
Edit Medicines Stock
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Edit Medicine Stock</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Medicine Stock</h5>
                    <form action="{{url('/admin/medicines_stock/edit/'.$edit_medicines_stock->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Medicines Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Medicines_Name"
                                    value=" {{$edit_medicines_stock->Medicines_Name}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Batch_Id:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Batch_Id" value=" {{$edit_medicines_stock->Batch_Id}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Ex_Date:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Ex_Date" value=" {{$edit_medicines_stock->Ex_Date}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Qty:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Qty" value=" {{$edit_medicines_stock->Qty}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">M_R_P:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="M_R_P" value=" {{$edit_medicines_stock->M_R_P}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Rate:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Rate" value=" {{$edit_medicines_stock->Rate}}"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Edit
                                Medicine Stock</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection