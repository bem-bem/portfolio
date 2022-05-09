@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @forelse ($categories as $categorie)
          <div class="col-md-3 mb-3">
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ route('categories.show', [$categorie]) }}">{{ $categorie->name }}</a></li>
                <li class="list-group-item">{{ $categorie->post_count }}</li>
                <li class="list-group-item">{{ $categorie->user->name }}</li>
                <li class="list-group-item">{{ $categorie->created_at->diffForHumans() }}</li>
              </ul>
            </div>
          </div>
      @empty
          <p>No categories Found</p>
      @endforelse
    </div>
    <div class="row">
      <div class="col">
        <!-- Pagination-->
        {{ $categories->links() }}
      </div>
    </div>
  </div>
@endsection