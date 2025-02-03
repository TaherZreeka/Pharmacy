@if(!empty(session('success')))
<div class="alert alert-success mb-0" role="alert" style="margin-top: 40px">
    {{session('success')}}
</div>
@endif

@if(!empty(session('error')))
<div class="alert alert-danger mb-0" role="alert" style="margin-top: 40px">
    {{session('error')}}
</div>
@endif