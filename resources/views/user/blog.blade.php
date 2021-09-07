@extends('user.app')

@push('css')

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
        </div>
    </div>
</div>
<ul class="pagination">
    <li class="page-item disabled">
    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item">
    {{ $posts->links() }}
    </li>
</ul>
@endsection