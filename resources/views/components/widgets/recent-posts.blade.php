@props(['recent_posts'])

<div class="card mb-4">
  <div class="card-header">Recent posts</div>
  <div class="card-body">
    @forelse ($recent_posts as $recent_post)
    <div class="card mb-3">
      <div class="card-body">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/' . $recent_post->image->path) }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                  <a href="{{ route('post.show', [$recent_post]) }}">{{ \Str::limit($recent_post->title, 10) }}</a>
                </h5>
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