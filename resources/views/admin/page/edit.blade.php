@extends('admin.master')
@section('cc')
Pages edit

@stop()

@section('content')
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    {!! Form::open(array('url' => URL::route('edit',$data['id']),'method' => 'post'))!!}
        <div class="form-group">

            {!!Form::label('lbName',' Name')!!}</br>
            {!! Form::text('txtName',$data["name"],array('class'=>'form-control', 'placeholder'=>'Please Enter  UserName')) !!} 
        </div>
        <div class="form-group">
            {!!Form::label('lbContent',' Content')!!}</br>
            {!!Form::textarea('txtGhiChu',$data["content"],array('class'=>'form-control','row'=>'5'))!!}<br/><br/> 
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
        {!!Form::close()!!}
            </div>
@endsection()