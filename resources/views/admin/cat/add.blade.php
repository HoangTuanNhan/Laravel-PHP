@extends('admin.master')
@section('content')
@section('cc')
Add Categorys
@stop()
@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{!!$error!!}</li>
        @endforeach
    </ul>
</div>

@endif
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    {!!Form::open(array('url'=>'add-cat','files'=>true))!!}
    <div class="form-group">
        {!!Form::label('lbName',' Name')!!}</br>
        {!! Form::text('name', null,array('class'=>'form-control', 'placeholder'=>'Please Enter  UserName')) !!} 

    </div>
    <div class="form-group">
        {!!Form::label('lbImages','Images')!!}</br>
        {!! Form::file('avatar',array('class'=>'form-control')) !!} 

    </div>
    <button type="submit" class="btn btn-default">User Add</button>
    <button type="reset" class="btn btn-default">Reset</button>
    {!!Form::close()!!}
</div>
@endsection()