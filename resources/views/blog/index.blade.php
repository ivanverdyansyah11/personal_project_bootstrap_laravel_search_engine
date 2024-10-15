@extends('template.main')

@section('content-main')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('component.topbar')
                </div>
            </div>
            <div class="row justify-content-center align-items-center" style="height: 100%;">
                <div class="col-12 col-md-10 col-xl-9 col-xxl-8">
                    <div class="section-header text-center">
                        <h3 class="title">Your Personalized Blog Discovery Tool</h3>
                        <p class="description">Blind Browser is your personalized blog search engine, designed to help you discover insightful, diverse, and unique blog content. Let your curiosity guide you through a world of knowledge!</p>
                        <form method="GET" class="form-input-search">
                            <input type="text" placeholder="Search blog.." name="search" value="{{ $search }}" autocomplete="off">
                            <button type="submit" class="d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-arrow-up"></i>
                            </button>
                        </form>
                        <div class="category-group d-flex align-items-center justify-content-center flex-wrap gap-2">
                            @foreach($category_blogs as $category_blog)
                                <a href="{{ route('category-blog.show', $category_blog->slug) }}" class="button-category">{{ $category_blog->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-content">--}}
{{--                        <div class="row row-cols-2 row-cols-lg-4 g-3">--}}
{{--                            @foreach($blogs as $blog)--}}
{{--                                <div class="col">--}}
{{--                                    <a href="{{ route('blog.show', $blog->slug) }}" class="card-blog">--}}
{{--                                        <img src="{{ $blog->blog_image }}" alt="Blog Image" class="blog-image">--}}
{{--                                        <h6 class="blog-title">{{ $blog->title }}</h6>--}}
{{--                                        <p class="blog-description">{{ $blog->content }}</p>--}}
{{--                                        <p class="blog-date">{{ formatDate($blog->created_at) }}</p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </main>
@endsection
