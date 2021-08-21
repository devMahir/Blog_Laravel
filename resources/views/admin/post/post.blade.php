@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Title</h3>
                </div>
                <form role="form">
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
                        </div>
                    </div>
                    <section class="content">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                            <h3 class="card-title">
                                Write Post Body Here
                                <small>Simple and fast</small>
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                <i class="fas fa-minus"></i></button>
                                {{-- <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                        title="Remove">
                                <i class="fas fa-times"></i></button> --}}
                            </div>
                            </div>
                            <div class="card-body pad">
                            <div class="mb-3">
                                <textarea class="textarea" name="body" placeholder="Place some text here"
                                        style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                            </div>
                        </div>
                    </section>
                    <div class="form-check">
                        <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Publish</label>
                    </div><br>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </section>

  </div>
@endsection