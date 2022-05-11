@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">All posts related to category {{ $categories->name }}</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Author</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($categories->post as $post)
                <tr>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->user->name }}</td>
                  <td>
                    <x-link class="btn-secondary" href="{{ route('admin.posts.edit', [$post->id]) }}">Update</x-link>
                  </td>
                  <td>
                    <form action="{{ route('admin.posts.destroy', [$post->id]) }}" method="post">
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