@props(['tags'])

<div class="card mb-4">
  <div class="card-header">Tags</div>
  <div class="card-body">
    <div class="row">
      @forelse ($tags as $tag)
      <div class="col-sm-3 me-4 mb-2">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="{{ route('tag.show', [$tag]) }}"><x-badge color="bg-info text-dark"><x-icons.tag /> {{ $tag->name }}</x-badge></a>
          </li>
        </ul>
      </div>
      @empty
      <p>No Tags found</p>
      @endforelse
    </div>
  </div>
</div>