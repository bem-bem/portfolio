<article>
  <!-- Post header-->
  <header class="mb-4">
    <!-- Post title-->
    <h1 class="fw-bolder mb-1">{{ $post->user->name }}</h1>
    <!-- Post meta content-->
    <div class="text-muted fst-italic mb-2">Posted on {{ date('M-d-Y', strtotime($post->created_at)) }}</div>
    <!-- Post categories-->
    <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a>
  </header>
  <!-- Preview image figure-->
  <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/' . $post->image->path) }}" alt="..." />
  </figure>
  <!-- Post content-->
  <section class="mb-5">
    <h2 class="fw-bolder">{{ $post->title }}</h2>
    <small class="fst-italic fw-light text-secondary mb-5">{{ $post->intro }}</small>
    <p class="fs-5 mb-4">{{ $post->content }}</p>
  </section>
</article>