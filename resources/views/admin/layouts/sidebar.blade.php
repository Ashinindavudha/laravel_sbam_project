      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ ucfirst(Auth::user()->name) }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            

            <li class=""><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i> Information Post</a></li>

            @can('posts.category', Auth::user())
            <li class=""><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Category</a></li>
            @endcan

            @can('posts.tag', Auth::user())
            <li class=""><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i> Tags</a></li>
            @endcan
            <li class=""><a href="{{route('member.index')}}"><i class="fa fa-circle-o"></i> Academic Members</a></li>
            <li class=""><a href="{{route('first.index')}}"><i class="fa fa-circle-o"></i> Course TimeTable</a></li>
            <li class=""><a href="{{route('advertise.index')}}"><i class="fa fa-circle-o"></i> Course Advertise Post</a></li>
            <li class=""><a href="{{route('research.index')}}"><i class="fa fa-circle-o"></i> Research and Assignment Post</a></li>
            <li class=""><a href="{{route('list.index')}}"><i class="fa fa-circle-o"></i> Student Lists</a></li>

            <li class=""><a href="{{route('result.index')}}"><i class="fa fa-circle-o"></i> MA Exam Result</a></li>
            <li class=""><a href="{{route('registration.index')}}"><i class="fa fa-circle-o"></i> StudentRegisterRecord</a></li>
            <li class=""><a href="{{route('history.index')}}"><i class="fa fa-circle-o"></i> HistoryDepartment</a></li>
             <li class=""><a href="{{route('upload.index')}}"><i class="fa fa-circle-o"></i> EnglishDepartment</a></li>
             <li class=""><a href="{{route('grammar.index')}}"><i class="fa fa-circle-o"></i> EnglishGrammar</a></li>
             <li class=""><a href="{{route('essay.index')}}"><i class="fa fa-circle-o"></i> EnglishEssay</a></li>
             <li class=""><a href="{{route('pdf.index')}}"><i class="fa fa-circle-o"></i> Sitagu SayarDaw Ebook</a></li>
             <li class=""><a href="{{route('computer.index')}}"><i class="fa fa-circle-o"></i> ComputerDepartment</a></li>
             <li class=""><a href="{{route('lesson.index')}}"><i class="fa fa-circle-o"></i> Computer Lesson</a></li>
             <li class=""><a href="{{route('programming.index')}}"><i class="fa fa-circle-o"></i> PHP Programming Lesson</a></li>








            <!-- <li class="treeview">
              <a href="{{route('first.index')}}">
                <i class="fa fa-pie-chart"></i>
                <span>Course TimeTable</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Course Advertie Post</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> MA Second Semester Course</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> MA Third Semester Course</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>BA Course TimeTable</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>BA First Semester Course</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> BA Second Semester Course</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> BA Third Semester Course</a></li>

                 <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> BA Fourth Semester Course</a></li>

                  <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> BA Fifth Semester Course</a></li>
                   <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> BA Sixth Semester Course</a></li>
                
              </ul>
            </li>
 

            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Diploma Course TimeTable</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Diploma 1st Semester Course</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Diploma 2nd Semester Course</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Diploma 3rd Semester Course</a></li>

                 <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Diploma 4th Semester Course</a></li>

                  
              </ul>
            </li>-->
            

            

            <li class=""><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>
            <li class=""><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i> User Roles</a></li>
            <li class=""><a href="{{route('permission.index')}}"><i class="fa fa-circle-o"></i> Permission</a></li>

          </li>
           </ul>
      </section>
      <!-- /.sidebar -->
    </aside>