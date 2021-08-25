@extends('admin.layouts.app')
@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush
@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <a href="{{ route('category.create') }}">
            <button type="button" class="btn btn-success">Add Category</button>
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=>$category)
                    <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td class="text-center">{{$category -> name}}</td>
                        <td class="text-center">{{$category -> slug}}</td>
                        <td class="text-center">
                            <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category->id) }}"><i class="material-icons">mode_edit</i></a> 
                        </td>                 
                        <td class="text-center">
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </tfoot>
        </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

  </div>
@endsection
@push('script')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush