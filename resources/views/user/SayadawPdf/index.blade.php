
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
        @foreach($pdfs as $post)
        <div class="card mb-4">
          
          <div class="card-body">
            <h2 class="card-title"></h2>

            <h2 class="card-title">{{ $post->title }}</h2>
            
            <a href="{{ route('sayadawpdf.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $post->created_at->diffForHumans() }} by
            <a href="#"></a>
            
          </div>
        </div>
        @endforeach
        <br><br>
        <table class="table table-dark table-striped table-bordered">
          <tr>
            <th>S.No</th>
            <th>Titele</th>
            <th>Upload</th>
            
            <th>Download</th>
          </tr>
          <tbody>
            @foreach($pdfs as $download)
            <tr>
              <td>{{ $loop->index +1 }}</td>
              <td>{{ $download->title }}</td>
              <td>{{ $download->created_at->diffForHumans() }}</td>
              <td><a href="{{asset(Storage::disk('local')->url($download->pdf))}}" class="btn btn-primary">Download</a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Pagination -->
        <div class="clearfix">
          {{ $pdfs->links() }}
        </div>

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
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
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
