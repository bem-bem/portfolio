@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">Add New Post</div>
            <div class="card-body">
              <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <x-inputs.label for="title">{{ __('Post Title') }}</x-inputs.label>
                    <x-inputs.input name="title" value="{{ old('title') }}" autofocus="{{ true }}" />
                  </div>
                  <div class="mb-3">
                    <x-inputs.label for="slug">{{ __('Post Slug') }}</x-inputs.label>
                    <x-inputs.input name="slug" value="{{ old('slug') }}" />
                  </div>
                  <div class="mb-3">
                    <x-inputs.label for="category_id">{{ __('Category') }}</x-inputs.label>
                    <x-inputs.select :data="$categories" name="category_id" />
                  </div>
                  <div class="mb-3">
                    <x-inputs.label for="path">{{ __('Post image') }}</x-inputs.label>
                    <x-inputs.input type="file" name="thumbnail" />
                  </div>
                  <div class="mb-3">
                    <x-inputs.label for="intro">{{ __('Intro') }}</x-inputs.label>
                    <x-inputs.input name="intro" value="{{ old('intro') }}" />
                  </div>
                  <div class="mb-3">
                    <x-inputs.label for="content">{{ __('Content') }}</x-inputs.label>
                   <x-inputs.txtarea name="content" rows="3">{{ old('content') }}</x-inputs.txtarea>
                  </div>
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