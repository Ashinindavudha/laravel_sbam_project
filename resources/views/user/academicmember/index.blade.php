@extends('user.include.app')
<body>

   @section('main-content')
  <!-- Page Content -->
  <div class="container">


    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

  <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

        <!-- Blog Post -->
       
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.No
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Designation
      </th>
      <th class="th-sm">Specialize
      </th>
      
      <th class="th-sm">Phone
      </th>
    </tr>
  </thead>
  <tbody>
   @foreach ($members as $member)
    <tr>
      <td>{{ $loop->index +1 }}</td>
      <td>{{ $member->name }}</td>
      <td>{{ $member->designation }}</td>
      <td>{{ $member->specialize }}</td>
      
      <td>{{ $member->phone }}</td>
    </tr>
 @endforeach
    </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">S.No
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Designation
      </th>
      <th class="th-sm">Specialize
      </th>
     
      <th class="th-sm">Phone
      </th>    </tr>
  </tfoot>
</table>

        

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
        @foreach ($members as $member)
        <div class="card my-5">
          <h5 class="card-header">{{ $member->name }}</h5>
          <div class="card-body">
            <img src="{{asset(Storage::disk('local')->url($member->image))}}" style="width: 400px; height: 250px; " class="img-fluid" alt="Responsive image" ><hr>
         
          </div>
        </div>
@endforeach


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  @endsection
</body>

</html>
