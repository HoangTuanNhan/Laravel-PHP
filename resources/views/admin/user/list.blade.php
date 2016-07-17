@extends('admin.master')
@section('content')
@section('cc')
List pages
@stop()
<p>$msg</p>
<!-- /.col-lg-12 -->

<div class="box">

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
        <tr align="center">
            <th>ID</th>
            <th>Username</th>
            <th  style="text-align:center">Email</th>
            <th>Level
                <select>
                    <option value="saab">Member</option>
                    <option value="vw">Admin</option>
                    <option value="audi" selected>All</option>
                </select>
            </th>


            <th style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr class="odd gradeX" align="center">
            <td>{!!$item["id"]!!}</td>
            <td>{!!$item["name"]!!}</td>
            <td>{!!$item["email"]!!}</td> 
            <td>
                @if ($item["level"] == 1)
                Admin
                @else
                Member
                @endif
            </td>
            <td class="center">
                <i class="glyphicon glyphicon-user"></i> <a href="#">View</a>
                <i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('getUser',$item['id'])!!}">Edit</a>
                <i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('delUser',$item['id'])!!}"> Delete</a>

            </td>
        </tr>
        @endforeach()
    </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection