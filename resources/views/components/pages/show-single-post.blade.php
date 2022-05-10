<article>
  <!-- Post header-->
  <header class="mb-4">
    <!-- Post title-->
    <h1 class="fw-bolder mb-1">{{ $post->user->name }}</h1>
    <!-- Post meta content-->
    <div class="text-muted fst-italic mb-2"><x-icons.calendar /> {{ date('M-d-Y', strtotime($post->created_at)) }}</div>
    <!-- Post categories-->
    <x-badge><x-icons.category /> {{ $post->category->name }}</x-badge> <br>
    {{-- post tags --}}
    @foreach ($post->tag as $tag)
    <x-badge color="bg-info text-dark"><x-icons.tag /> {{ $tag->name }}</x-badge>
    @endforeach
  </header>
  <!-- Preview image figure-->
  <figure class="mb-4">
    <img class="img-fluid rounded" src="{{ asset('storage/' . $post->image->path) }}" alt="..." />
  </figure>
  <!-- Post content-->
  <section class="mb-5">
    <h2 class="fw-bolder">{{ $post->title }}</h2>
    <p class="fs-5 mb-4">{{ $post->content }}</p>
  </section>
</article>