
@extends('user.include.app')
<body>

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
        
        <div class="card mb-4">
           <img class="card-img-top" src="{{asset(Storage::disk('local')->url($post->image))}}" alt="Card image cap">
          <div class="card-body">
           
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{!! htmlspecialchars_decode($post->body) !!}</p>
            
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $post->created_at->diffForHumans() }} by
            <a href="#">Start Bootstrap</a>

          </div>
        </div>
       
        <!-- Pagination -->
        

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="text-align: center; color: #00008B;">More Study ! English Language </h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <h6><a href="{{url('/englishgrammar')}}" style="text-decoration:none;">English Grammar</a>
                  </li></h6>
                  <li>
                    <h6><a href="{{url('/essayenglish')}}" style="text-decoration: none; ">English Essay</a>
                  </li></h6>
                  <li>
                    <a href="{{url('/assignment')}}">Assignment Paper</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body" style="background-color: #262626;">
             @include('user.include.datetime')
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
</body>

</html>
