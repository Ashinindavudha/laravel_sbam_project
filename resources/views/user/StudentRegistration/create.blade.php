@extends('user.include.app')
<body>

   @section('main-content')
  <!-- Page Content -->



  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4" style="color: #0000FF; text-align: center;">Sitagu Buddhist Academy (Mandalay)
          <small>Student Registraion Form</small>
        </h1>

        <form action="{{route('registration.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <div class="col-lg-6">
                

                <div class="form-group">
                  <label for="name">အမည် </label>
                  <input type="text" class="form-control" id="reg" name="name" placeholder="အမည် ">
                </div>

                <div class="form-group">
                  <label for="age"> အသက် / မွေးသက္ကရာဇ် /မွေးရက်/ မွေးနေ့ </label>
                  <input type="text" class="form-control" id="age" name="age" placeholder="အသက် / မွေးသက္ကရာဇ် /မွေးရက်/ မွေးနေ့">
                </div>

                <div class="form-group">
                  <label for="parent">မိဘနှစ်ပါး- အမည် </label>
                  <input type="parent" class="form-control" id="parent" name="parent" placeholder="မိဘနှစ်ပါး- အမည် ">
                </div>

                <div class="form-group">
                  <label for="preceptor">ဥပစ္ဇျာယ်ဆရာ</label>
                  <input type="text" class="form-control" id="preceptor" name="preceptor" placeholder="ဥပစ္ဇျာယ်ဆရာ">
                </div>
                <div class="form-group">
                  <label for="nativetwon">မွေးဖွာရာဇာတိ  </label>
                  <input type="text" class="form-control" id="nativetwon" name="nativetwon" placeholder="မွေးဖွာရာဇာတိ">
                </div>
                <div class="form-group">
                  <label for="presenaddress">လက်ရှိနေရပ်လိပ်စာအပြည့်အစုံ  </label>
                  <input type="text" class="form-control" id="presenaddress" name="presenaddress" placeholder="လက်ရှိနေရပ်လိပ်စာအပြည့်အစုံ">
                </div>

                <div class="form-group">
                  <label for="class">တက်ရောက်လိုသည့်အတန်း </label>
                  <input type="text" class="form-control" id="class" name="class" placeholder="တက်ရောက်လိုသည့်အတန်း ">
                </div>
                <div cnativetwonlass="form-group">
                  <label for="quality">ပညာအရည်အချင်း </label>
                  <input type="text" class="form-control" id="quality" name="quality" placeholder="ပညာအရည်အချင်း">
                </div>

                <div class="form-group">
                  <label for="phone">အမြဲကိုင်ဖုန်း</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="အမြဲကိုင်ဖုန်း">
                </div>

                <div class="form-group">
                  <label for="image">ပါတ်စပို့ပုံ</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
      
              </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
              <input type="submit" name="" class="btn btn-primary" value="Submit">
              <a href="{{ route('list.index') }}" class="btn btn-warning">Back</a>
            </div>
          </form>image
          @include('sweetalert::alert')


         
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
