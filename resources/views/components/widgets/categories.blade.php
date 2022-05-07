@props(['categories'])

<div class="card mb-4">
  <div class="card-header">Categories</div>
  <div class="card-body">
    <div class="row">
      @forelse ($categories as $categorie)
      <div class="col-sm-6">
        <ul class="list-unstyled mb-0">
          <li><a href="#!">{{ $categorie->name }} {{ $categorie->posts_count }}</a></li>
        </ul>
      </div>
      @empty
      <p>No Categories found</p>
      @endforelse
    </div>
  </div>
</div>