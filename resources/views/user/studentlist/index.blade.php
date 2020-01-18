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
          <img class="card-img-top" src="{{asset('project/1.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text" style="text-align: center; font-size: 40px; background-color: #0000FF; color: #fff;"> သီတဂူအဓိဌာန် <br> ငါတို့ဖြစ်ရ ဤလောက၀ယ် <br> 
              ဘ၀သမိုင်း - မရိုင်းစေရန် <br>
              စိတ်မာန်မချ - မာနမပါ <br>
              တို့စွမ်းရာဖြင့် - တို့သာသနာ <br>
              တို့ပြည့်ရွာကို - သာယာစေမှု့  <br>
              လုံ့လပြုအံ့ 
            </p>
            </div>
        </div>

        <hr>
        <h4 style="color: blue;">Sitagu International Buddhist Academic Mandalay Student Lists</h4>

        <hr>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.No
      </th>
      <th class="th-sm">Day
      </th>
      <th class="th-sm">Time
      </th>
      <th class="th-sm">Semester
      </th>
      <th class="th-sm">Subject
      </th>  
    </tr>
  </thead>
  <tbody>
   @foreach ($students as $student)
    <tr>
      <td>{{ $loop->index +1 }}</td>
      <td>{{ $student->reg }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->semester }}</td>
      <td>{{ $student->roll }}</td>
     
    </tr>
 @endforeach
    </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">S.No
      </th>
      <th class="th-sm">Day
      </th>
      <th class="th-sm">Time
      </th>
      <th class="th-sm">Semester
      </th>
      <th class="th-sm">Subject
      </th> 
         </tr>
  </tfoot>
</table>
<hr>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('project/q.jpg')}}" alt="Card image cap">
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('project/ad.jpg')}}" alt="Card image cap">
          <div class="card-body">
           <!--  <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a> -->
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

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
