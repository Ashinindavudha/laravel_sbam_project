@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('main-content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          @include('admin.layouts.pagehead')
          @include('sweetalert::alert')
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
              <a class=" col-lg-offset-8 btn btn-success" href="{{ route('category.create')}}" class="">Add New </a>
        <div class="box-tools pull-right">
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
               
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Tag Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Detele</th>

              </tr>
            </thead>
            <tbody>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td><a href="{{ route('category.edit', $category->id) }}"><span class="glyphicon glyphicon-edit"></a></span></td>
                  <td>
                    <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" style="display: none;" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      
                    </form>
                    <a href="" onclick="
                    if(confirm('Are you sure, you want to delete this?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $category->id }}').submit();
                    }
                    else{
                      event.preventDefault();}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                  
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>S.No</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Detele</th>


                </tr>
              </tfoot>

            </table>
          
        </div><!-- /.box -->

            </div><!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection
@section('footerSection')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection