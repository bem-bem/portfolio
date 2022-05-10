@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.side-nav')
<div id="layoutSidenav_content">
  <main class="container-fluid px-4">
      {{-- content here --}}
  </main>
  @include('admin.layouts.footer')
</div>
@endsection