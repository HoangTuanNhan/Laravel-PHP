@extends('admin.master')
@section('content')
@section('cc')
Add user
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
    {!!Form::open(array('url'=>'add-user','files'=>true))!!}
    <div class="form-group">
        {!!Form::label('lbName',' UserName')!!}</br>
        {!! Form::text('fullname', null,array('class'=>'form-control', 'placeholder'=>'Please Enter  UserName')) !!} 

    </div>
    <div class="form-group">
        {!!Form::label('lbName','Password')!!}</br>
        
        {!!Form::password('password', $attributes = array('class'=>'form-control','placeholder'=>'Please Enter Password'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('lbName','Re-Password')!!}</br>
        {!!Form::password('repassword', $attributes = array('class'=>'form-control','placeholder'=>'Please Enter Repassword'))!!}
    </div>
    <div class="form-group">
        {!!Form::label('lbEmail',' Email')!!}</br>
        {!! Form::email('email', null,array('class'=>'form-control', 'placeholder'=>'Please Enter Email')) !!} 

    </div>
    <div class="form-group">

        {!!Form::label('lbLevel',' User Level')!!}
        {!! Form::select('role', ['1'=>'Admin','0'=>'Member'], null, array('class' => 'form-control')) !!}


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