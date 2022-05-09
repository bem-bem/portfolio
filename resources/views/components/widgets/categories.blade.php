@props(['categories'])

<div class="card mb-4">
  <div class="card-header">Categories</div>
  <div class="card-body">
    <div class="row">
      @forelse ($categories as $category)
      <div class="col-sm-6">
        <ul class="list-unstyled mb-0">
          <li><a href="{{ route('category.show', [$category]) }}">{{ $category->name }} {{ $category->post_count }}</a></li>
        </ul>
      </div>
      @empty
      <p>No Categories found</p>
      @endforelse
    </div>
  </div>
</div>