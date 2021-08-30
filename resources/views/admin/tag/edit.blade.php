@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Tag</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('tag.index') }}">Tag</a></li>
              <li class="breadcrumb-item active">Add Tag</li>
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
                  <h3 class="card-title">Tag</h3>
                </div>
                <form role="form" method="POST" action="{{ route('tag.update',$tag->id) }}">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Tag Title</label>
                                <input type="text" value="{{$tag->name}}" name="name" class="form-control" id="title" placeholder="Enter Tag">
                              </div>
                        </div>
    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="slug">Tag Slug</label>
                                <input type="text" value="{{$tag->slug}}" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
                            </div>
                        </div>
                    </div>
                    
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