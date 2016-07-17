@extends('admin.master')
@section('content')
@section('cc')
Add pages
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
    {!!Form::open(array('url' => 'add-pages', 'method' => 'post'))!!}
    <div class="form-group">
        {!!Form::label('lbName',' Name')!!}</br>
        {!! Form::text('txtName','',array('class'=>'form-control', 'placeholder'=>'Please Enter  UserName')) !!} 
    </div>
    <div class="form-group">
        {!!Form::label('lbContent',' Content')!!}</br>
        {!!Form::textarea('txtGhiChu','',array('class'=>'form-control','row'=>'5'))!!}<br/><br/> 
    </div>

    <button type="submit" class="btn btn-default">Pages Add</button>
    <button type="reset" class="btn btn-default">Reset</button>
    {!!Form::close()!!}
</div>
@endsection()