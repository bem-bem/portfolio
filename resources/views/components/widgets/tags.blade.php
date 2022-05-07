@props(['tags'])

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