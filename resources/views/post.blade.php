@extends('layouts.app')

@section('content')
      <!-- Page content-->
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-8">
            <!-- Post content-->
            <article>
              <!-- Post header-->
              <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1">{{ $post->user->name }}</h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">Posted on {{ date('M-d-Y', strtotime($post->created_at)) }}</div>
                <!-- Post categories-->
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a>
              </header>
              <!-- Preview image figure-->
              <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/' . $post->image->path) }}"
                  alt="..." /></figure>
              <!-- Post content-->
              <section class="mb-5">
                <h2 class="fw-bolder">{{ $post->title }}</h2>
                <small class="fst-italic fw-light text-secondary mb-5">{{ $post->intro }}</small>
                <p class="fs-5 mb-4">{{ $post->content }}</p>
              </section>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
              <div class="card bg-light">
                <div class="card-body">
                  <!-- Comment form-->
                  @auth
                      <form method="post" action="{{ route('posts.store_comment', [$post]) }}">
                        @csrf
                            <x-inputs.txtarea name="the_comment" placeholder="Join the discussion and leave a comment!" rows="3">{{
                              old('the_comment') }}</x-inputs.txtarea>
                            <x-button class="float-end">send comment</x-button>
                      </form>
                  @endauth
                  <!-- Single comment-->
                  @forelse ($post->comment as $comment)
                     <div id="comment_{{ $comment->id }}" class="card mb-2 mt-5">
                      <div class="row g-0">
                        <div class="col-md-1 px-1 py-3">
                          <img class="img-fluid rounded-circle" src="{{ $comment->user->image ? asset('storage/' . $comment->user->image->path) : 'https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-Clipart.png' }}" alt="...">
                        </div>
                        <div class="col-md-11">
                          <div class="card-body">
                            <h5 class="card-title">{{ $comment->user->name }}</h5>
                            <p class="card-text">{{ $comment->the_comment }}</p>
                            <p class="card-text"><small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  @empty
                      <p>No comment on this post</p>
                  @endforelse
                  <x-alert :status="'success'"></x-alert>
                </div>
              </div>
            </section>
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