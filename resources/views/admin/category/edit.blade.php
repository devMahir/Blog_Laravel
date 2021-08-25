@extends('admin.layouts.app')

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="">Category</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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
                  <h3 class="card-title">Category</h3>
                </div>
                <form role="form" method="POST" action="{{ route('category.update',$category->id) }}">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="title">Category Title</label>
                                <input type="text" value="{{$category->name}}" name="name" class="form-control" id="title" placeholder="Enter Category">
                              </div>
                        </div>
    
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="slug">Category Slug</label>
                                <input type="text" value="{{$category->slug}}" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
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