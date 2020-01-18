 @extends('user.app')
  @section('head')
  <meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
  
  .fa-thumbs-up:hover{
    color: red;
  }
</style>
 @endsection
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('main-content')
<div class="container">
  <div class="row" id="app">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach($posts as $post)
      <div class="post-preview">
        <a href="{{ route('post',$post->slug) }}">
          <h2 class="post-title">
            {{ $post->title }}
          </h2>
          <h3 class="post-subtitle">
            {{ $post->subtitle }}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">Start Bootstrap</a>
          {{ $post->created_at->diffForHumans() }} 
          <a href="">
            <small>0</small>
            <i class="fas fa-thumbs-up"></i></a>
        </p>
        </div>
        @endforeach

        <hr>
        <!-- Pager -->
        <div class="clearfix">
          {{ $posts->links() }}
        </div>
      </div>
    </div>
  </div>
@include('sweetalert::alert')

  <hr>

  @endsection
  @section('footer')
  <script src="{{ asset('js/app.js') }}"></script>
  @endsection