@extends('admin.layouts.app')
@section('admin_title')
Edit Invoices
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Edit Invoice</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Invoice</h5>
                    <form action="{{url('/admin/invoices/update/'.$edit_invoice->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Customer:</label>
                            <div class="col-sm-10">
                                <select name="customer_id" class="form-control" required>
                                    <option value="">Select Customer</option>
                                    @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Date:</lable>
                            <div class="col-sm-10">
                                <input type="date" name="date" value="{{$edit_invoice->date}}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Invoice No:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="invoice_no" value="{{$edit_invoice->invoice_no}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Total Discount:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="total_discount" value="{{$edit_invoice->total_discount}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Total Amount:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="total_amount" value="{{$edit_invoice->total_amount}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Net Total:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="net_total" value="{{$edit_invoice->net_total}}"
                                    class="form-control" required>
                            </div>
                        </div>


                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Edit
                                Invoice</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection