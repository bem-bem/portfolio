@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">All categories</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Category name</th>
                  <th scope="col">Author</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Related posts</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($categories as $category)
                <tr>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->user->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>
                    <x-link class="btn-info" href="{{ route('admin.categories.show', [$category->id]) }}">Related posts</x-link>
                  </td>
                  <td>
                    <x-link class="btn-secondary" href="{{ route('admin.categories.edit', [$category->id]) }}">Update</x-link>
                  </td>
                  <td>
                    <form action="{{ route('admin.categories.destroy', [$category->id]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <x-button color="btn-danger">Delete</x-button>
                    </form>
                  </td>
                </tr>
                @empty

                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  @include('admin.layouts.footer')
</div>
@endsection