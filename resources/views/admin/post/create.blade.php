@extends('admin.layouts.app')

@push('css')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link rel="stylesheet" href=" {{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@section('main_content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Admin</a></li>
              <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Posts</a></li>
              <li class="breadcrumb-item active">Add Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @include('admin.layouts.msg')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Title</h3>
              </div>
              <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                      </div>
  
                      <div class="form-group">
                        <label for="sub_title">Post Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Enter Sub Title">
                      </div>

                      <div class="form-group">
                        <label>Tags</label>
                        <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Select Tags" style="width: 100%;">
                          @foreach ($tags as $tag)
                              <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
  
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="slug">Post Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Category</label>
                        <select name="categories[]" class="select2" multiple="multiple" data-placeholder="Select Category" style="width: 100%;">
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}"> {{ $category->name }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <section class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-outline card-info">
                          <div class="card-header">
                            <h3 class="card-title">
                              Mahir Blog
                              <small>Simple and fast</small>
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                      title="Collapse">
                                <i class="fas fa-minus"></i></button>
                              <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                      title="Remove">
                                <i class="fas fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body pad">
                            <div class="mb-3">
                              <textarea id="summernote" name="text" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- ./row -->
                  </section>
                  
                  <div class="form-check">
                      <input type="checkbox" value="true" name="status" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Publish</label>
                  </div><br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@push('script')
  {{-- <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
  <script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });

  $(function () {
    $('.select2').select2()
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
  });
  </script>
@endpush