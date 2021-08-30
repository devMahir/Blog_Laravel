@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Tags</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
              <li class="breadcrumb-item active">Tags</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <a href="{{ route('tag.create') }}">
            <button type="button" class="btn btn-success">Add Tags</button>
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Tag Name</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $key=>$tag)
                    <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td class="text-center">{{$tag -> name}}</td>
                        <td class="text-center">{{$tag -> slug}}</td>
                        <td class="text-center">
                            <a class="btn btn-info btn-sm" href="{{ route('tag.edit', $tag->id) }}"><i class="material-icons">mode_edit</i></a> 
                        </td>                 
                        <td class="text-center">
                            <form action="{{ route('tag.destroy', $tag->id) }}" method="POST">
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
                    <th class="text-center">Tag Name</th>
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