@extends('admin.layouts.app')
@section('admin_title')
Profile
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Update Profile</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <form action="{{url('/admin/my_account')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{$my_account->name}}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Email:</lable>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{$my_account->email}}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Password:</lable>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Update
                                Profile</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection