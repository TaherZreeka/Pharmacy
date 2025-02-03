@extends('admin.layouts.app')
@section('admin_title')
Add Purchases
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Add Purchases</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Purchase</h5>
                    <form action="{{url('/admin/purchases/add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Voucher Number:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="voucher_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Purchase Date:</lable>
                            <div class="col-sm-10">
                                <input type="date" name="purchase_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Total Amount:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="total_amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                <Param>
                                </Param>Payment Status:
                            </label>
                            <div class="col-sm-10">
                                <select name="payment_status" class="form-control" required>
                                    <option value="">Status</option>
                                    <option value="1">pay</option>
                                    <option value="0">pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Supplier:</label>
                            <div class="col-sm-10">
                                <select name="supplier_id" class="form-control" required>
                                    <option value="">Select Supplier</option>
                                    @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Invoice:</label>
                            <div class="col-sm-10">
                                <select name="invoice_id" class="form-control" required>
                                    <option value="">Select Invoice</option>
                                    @foreach($invoices as $invoice)
                                    <option value="{{ $invoice->id }}">{{ $invoice->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Add
                                Purchases</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection