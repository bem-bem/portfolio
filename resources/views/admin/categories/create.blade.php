@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Add New category</div>
          <div class="card-body">
            <x-alert :status="'success'" />
            <form action="{{ route('admin.categories.store') }}" method="post">
              @csrf
              @include('admin.categories._form')
              <div class="mb-3">
                <x-button class="float-end">Submit</x-button>
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