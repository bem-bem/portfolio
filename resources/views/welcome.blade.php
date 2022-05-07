@extends('layouts.app')

@section('content')
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    {{-- <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                                alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2022</div>
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                                aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                                vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div> --}}
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                     @forelse ($posts as $post)
                         <div class="col-lg-12">
                                <!-- Blog post-->
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/' . $post->image->path) }}" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <small class="card-text text-secondary">{{ $post->intro }}</small>
                                                <p class="card-text">{{ $post->content }}</p>
                                                <p class="card-text">
                                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small> 
                                                    <small><i class="bi bi-chat-dots"></i> {{ $post->comments_count }}</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     @empty
                         <h1>no posts found</h1>
                     @endforelse
                    </div>
                    <!-- Pagination-->
                    {{ $posts->links() }}
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..."
                                    aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <x-widgets.categories :categories="$categories"></x-widgets.categories>
                    <!-- Recent posts widget-->
                    <x-widgets.recent-posts :recent_posts="$recent_posts"></x-widgets.recent-posts>
                    <!-- Tags widget-->
                    <x-widgets.tags :tags="$tags"></x-widgets.tags>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
            </div>
        </footer>
@endsection