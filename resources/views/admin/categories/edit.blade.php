@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Update New category</div>
          <div class="card-body">
            <x-alert :status="'success'" />
            <form action="{{ route('admin.categories.update', [$category->id]) }}" method="post">
              @csrf
              @method('PUT')
              @include('admin.categories._form')
              <div class="mb-3">
                <x-button class="float-end">Save change's</x-button>
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