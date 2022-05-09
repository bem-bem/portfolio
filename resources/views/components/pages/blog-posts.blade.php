
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage/' . $post->image->path) }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          <a href="{{ route('post.show', [$post]) }}">{{ $post->title }}</a>
        </h5>
        <small class="card-text text-secondary">{{ $post->intro }}</small>
        <p class="card-text">{{ $post->content }}</p>
        <p class="card-text">
          <small class="text-muted">{{ $post->user->name }}</small>
          <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
          <small><i class="bi bi-chat-dots"></i> {{ $post->comment_count }}</small>
        </p>
      </div>
    </div>
  </div>
</div>