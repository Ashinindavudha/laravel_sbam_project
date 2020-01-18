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
          <img class="card-img-top" src="{{asset('project/2.jpg')}}" alt="Card image cap">
          <hr>
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
        <h5 style="color: blue; text-align: center;">Sitagu International Buddhist Academic Mandalay Course TimeTable</h5>

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
      <th class="th-sm">Lecturer
      </th> 
    </tr>
  </thead>
  <tbody>
   @foreach ($mafirst as $student)
    <tr>
      <td>{{ $loop->index +1 }}</td>
      <td>{{ $student->day }}</td>
      <td>{{ $student->time }}</td>
      <td>{{ $student->semester }}</td>
      
      <td>{{ $student->subject }}</td>
      <td>{{ $student->lecturer }}</td>
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
      <th class="th-sm">Lecturer
      </th> 
         </tr>
  </tfoot>
</table>


        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('project/1.jpg')}}" alt="Card image cap">
         
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('project/ad.jpg')}}" alt="Card image cap">
          
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
