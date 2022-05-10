
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
        <p class="card-text">{{ $post->content }}</p>
        <p class="card-text">
          <small class="text-muted me-3"><x-icons.user /> {{ $post->user->name }}</small>
          <small class="text-muted me-3"><x-icons.time /> {{ $post->created_at->diffForHumans() }}</small>
          <small class="text-muted"><x-icons.comment /> {{ $post->comment_count }}</small>
        </p>
        <p class="card-text">
          <x-badge><x-icons.category /> {{ $post->category->name }}</x-badge>
        </p>
        <p class="card-text">
          @foreach ($post->tag as $tag)
            <x-badge color="bg-info text-dark"><x-icons.tag /> {{ $tag->name }}</x-badge>
          @endforeach
        </p>
      </div>
    </div>
  </div>
</div>