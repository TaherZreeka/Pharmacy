@extends('layouts.app')
@section('title')
Reset Password / Pharmacy M.S
@endsection
@section('content')
<div class="card mb-3">

    <div class="card-body">
        @include('message')
        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
            <p class="text-center small">Enter Password & Confirm to Password</p>
        </div>

        <form class="row g-3 needs-validation" novalidate method="post" action="{{url('reset/'.$token)}}">
            {{csrf_field()}}
            @csrf

            <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required value="{{old('password')}}">
                <span style="color: red">{{$errors->first('password')}}</span>
                <div class="invalid-feedback">Please enter your password!</div>
            </div>
            <div class="col-12">
                <label class="form-label"> Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
                <span style="color: red">{{$errors->first('confirm_password')}}</span>
                <div class="invalid-feedback">Please enter your confirm password!</div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Reset</button>
            </div>

        </form>

    </div>
</div>
@endsection