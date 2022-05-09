<div id="comment_{{ $comment->id }}" class="card mb-2 mt-5">
  <div class="row g-0">
    <div class="col-md-1 px-1 py-3">
      <img class="img-fluid rounded-circle"
        src="{{ $comment->user->image ? asset('storage/' . $comment->user->image->path) : 'https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-Clipart.png' }}"
        alt="...">
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