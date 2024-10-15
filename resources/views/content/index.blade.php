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
                    <div class="section-header text-center header-content">
                        <form method="GET" class="form-input-search">
                            <input type="text" placeholder="Search blog.." name="search" value="{{ $search }}" autocomplete="off">
                            <button type="submit" class="d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-arrow-up"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-xl-9 col-xxl-8">
                    <div class="section-content d-flex flex-column gap-3">
                        @foreach($blogs as $blog)
                            <a href="{{ route('blog.show', $blog->slug) }}" class="content-blog w-100 pb-3">
                                <h6 class="blog-title">{{ $blog->title }}</h6>
                                <p class="blog-description">
                                    <span>{{ formatDate($blog->created_at) }}</span> - {{ $blog->content }}
                                </p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('child-script')
    <script>
        console.log(@json($scores))
    </script>
@endpush
