@extends('admin.layouts.app')
@section('admin_title')
Add Medicines Stock
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Add Medicine Stock</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Medicines Stock</h5>
                    <form action="{{url('/admin/medicines_stock/add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Medicines Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Medicines_Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Batch_Id:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Batch_Id" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Ex Date:</lable>
                            <div class="col-sm-10">
                                <input type="date" name="Ex_Date" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Qty:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="Qty" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">M_R_P:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="M_R_P" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Rate:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="Rate" class="form-control" required>
                            </div>
                        </div>


                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Add
                                Medicine Stock</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection