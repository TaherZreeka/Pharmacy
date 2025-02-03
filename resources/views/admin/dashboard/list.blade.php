@extends('admin.layouts.app')

@section('admin_title')
Dashboard
@endsection

@section('admin_content')
<style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .section {
        width: 100%;
        height: 85vh;
        /* Full viewport height */
        overflow: hidden;
    }

    .section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the image covers the entire section */
    }
</style>

<section class="section">
    <img src="{{ url('public/img/doctor-8264057_1280.jpg') }}" alt="Doctor">
</section>
@endsection