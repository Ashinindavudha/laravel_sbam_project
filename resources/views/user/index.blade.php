@extends('user.include.app')


<body>

  <!-- Navigation -->
  
@section('main-content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        @foreach($posts as $post)
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset(Storage::disk('local')->url($post->image))}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
             <h2 class="card-title">{{ $post->subtitle }}</h2>
            
            <a href="{{ route('post',$post->slug) }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            {{ $post->created_at->diffForHumans() }}  by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
@endforeach
       
        <!-- Pagination -->
        <div class="clearfix">
          {{ $posts->links() }}
        </div>

      </div>
      @include('user/include/sidebar')

      <!-- Sidebar Widgets Column -->
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
  <!-- Footer -->
  
</body>

</html>
