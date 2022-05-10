@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Update a post</div>
          <div class="card-body">
            <x-alert :status="'success'" />
            <form action="{{ route('admin.posts.update', [$post->id]) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              @include('admin.posts._form')
              <div class="mb-3">
                <x-button class="float-end" color="btn-secondary">Submit</x-button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  @include('admin.layouts.footer')
</div>
@endsection