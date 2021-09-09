@extends('user.app')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush

@section('bg-img', asset('user/assets/img/home-bg.jpg'))

@section('title', 'Mahir Blog' )

@section('sub_title', 'Learn Together & Grow Together')


@section('main_content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                @foreach ($posts as $post)
                <a href="{{ route('post', $post->slug) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ $post->title }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Mahir Shahriar</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
                @endforeach
            </div>
            
            <!-- Divider start-->
            <hr class="my-4" />
            <!-- Divider Ends-->

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        {{ $posts->links() }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection

@push('fscript')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush
