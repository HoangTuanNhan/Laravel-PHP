@extends('admin.master')
@section('content')
@section('cc')
List pages
@stop()

<!-- /.col-lg-12 -->

<div class="box">

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">Name</th>
                    <th style="text-align:center">Content</th>
                    <th style="text-align:center">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr class="odd gradeX" align="center">
                    <td>{!!$item["id"]!!}</td>
                    <td>{!!$item["name"]!!}</td>
                    <td>{!!$item["content"]!!}</td> 

                    <td class="center">
                        <i class="glyphicon glyphicon-user"></i> <a href="#">View</a>
                        <i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('deletepage',$item['id'])!!}">Delete</a>
                        <i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('editpage',$item['id'])!!}"> Edit</a>

                    </td>
                </tr>
                @endforeach()
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
@endsection