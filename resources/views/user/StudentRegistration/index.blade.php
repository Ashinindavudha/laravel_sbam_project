@extends('user.include.app')
<body>

   @section('main-content')
  <!-- Page Content -->



  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4" style="color: #0000FF; text-align: center;">Sitagu Buddhist Academy (Mandalay)  
          <small>Registed Student List</small>
        </h1>

 <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Class</th>
                <th>Quality</th>
                <th>Phone</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <tbody>
                @foreach ($students as $student)
                <tr>
                  <td>{{ $loop->index +1 }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->class }}</td>
                  <td>{{ $student->quality }}</td>
                  <td>{{ $student->phone }}</td>
                  <td><img class="card-img-top" src="{{asset(Storage::disk('local')->url($student->image))}}" width="50px" height="100px"></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                <th>S.No</th>
                <th>Name</th>
                
                <th>Class</th>
                <th>Quality</th>
                <th>Phone</th>
                <th>Image</th>
                  </tr>
                </tfoot>

              </table>

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

      
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@endsection
</body>

</html>
