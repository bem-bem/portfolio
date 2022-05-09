@extends('layouts.app')

@section('content')
      <!-- Page content-->
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-8">
            <!-- Post content-->
              <x-pages.show-single-post :post="$post"></x-pages.show-single-post>
            <!-- Comments section-->
            <section class="mb-5">
              <div class="card bg-light">
                <div class="card-body">
                  <!-- Comment form-->
                  @auth
                      <form method="post" action="{{ route('post.store_comment', [$post]) }}">
                        @csrf
                            <x-inputs.txtarea name="the_comment" placeholder="Join the discussion and leave a comment!" rows="3">{{
                              old('the_comment') }}</x-inputs.txtarea>
                            <x-button class="float-end">send comment</x-button>
                      </form>
                  @endauth
                  <!-- Single comment-->
                  @forelse ($post->comment as $comment)
                     <x-pages.comments-list :comment="$comment"></x-pages.comments-list>
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