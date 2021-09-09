@extends('user.app')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endpush

@section('bg-img', asset('user/assets/img/post-bg.jpg'))

@section('title', $post->title )

@section('sub_title', $post->sub_title)

@section('main_content')
    <!-- Post Content-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="8PgkgZWi"></script>
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <small>TIme : <strong>{{ $post->created_at->diffForHumans() }} </strong></small>
                    <small class="float-md-end">Category : 
                        @foreach ($post -> categories as $category)
                            <strong>
                                {{$category->name}} 
                            </strong>
                        @endforeach
                    </small>
                    {!! htmlspecialchars_decode($post->body) !!}

                    {{-- Tag CLouds --}}
                    <small class="float-md-start">Tag : 
                        @foreach ($post -> tags as $tag)
                            <strong>
                                {{$tag->name}} 
                            </strong>
                        @endforeach
                    </small>
                    
                </div>
                
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="10"></div>
            </div>
            
        </div>
    </article>
@endsection

@push('fscript')
    <script src="{{ asset('user/js/prism.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush