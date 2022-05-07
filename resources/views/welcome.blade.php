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
                                            <img src="..." class="img-fluid rounded-start" alt="...">
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
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                                    aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
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
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                           <div class="row">
                               @forelse ($categories as $categorie)
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">{{ $categorie->name }}</a></li>
                                    </ul>
                                </div>
                                @empty
                                <p>No Categories found</p>
                                @endforelse
                           </div>
                        </div>
                    </div>
                    <!-- Recent posts widget-->
                    <div class="card mb-4">
                        <div class="card-header">Recent posts</div>
                        <div class="card-body">
                            @forelse ($recent_posts as $recent_post)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="..." class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ \Str::limit($recent_post->title, 10) }}</h5>
                                                    <small class="card-text text-secondary">{{ \Str::limit($recent_post->intro, 10) }}</small>
                                                    <p class="card-text">
                                                        <small class="text-muted">{{ $recent_post->created_at->diffForHumans() }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No Recents posts yet</p>
                            @endforelse
                           
                        </div>
                    </div>
                    <!-- Tags widget-->
                    <div class="card mb-4">
                        <div class="card-header">Tags</div>
                        <div class="card-body">
                            <div class="row">
                                @forelse ($tags as $tag)
                                <div class="col-sm-3">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">{{ $tag->name }}</a></li>
                                    </ul>
                                </div>
                                @empty
                                <p>No Tags found</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
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