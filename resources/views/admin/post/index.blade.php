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
            <h1>All Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <a href="{{ route('post.create') }}">
            <button type="button" class="btn btn-success">Add Post</button>
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="myTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tags</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key=>$post)
                    <tr>
                        <td class="text-center">{{$key+1}}</td>
                        <td class="text-center">{{$post -> title}}</td>
                        <td class="text-center">{{$post -> slug}}</td>
                        <td class="text-center">
                            @if ($post->status == true)
                                <span style="background: #5CB85C; color: white; padding: 6px; border-radius: 6px;">Posted</span>
                            @else
                                <span style="background: #F0AD4E; color: white; padding: 6px; border-radius: 6px;">Panding</span>
                            @endif
                        </td>

                        <td class="text-center">
                          @forelse ($post->tags as $tag)
                              {{ $tag -> name }}
                          @empty
                              <p>No Tags celected</p>
                          @endforelse
                        </td>

                        <td class="text-center">
                            <a class="btn btn-info btn-sm" href="{{ route('post.edit', $post->id) }}"><i class="material-icons">mode_edit</i></a> 
                        </td>                 
                        <td class="text-center">
                            <form action="{{ route('post.destroy', $post->id) }}" method="POST">
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
                    <th class="text-center">Title</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tags</th>
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