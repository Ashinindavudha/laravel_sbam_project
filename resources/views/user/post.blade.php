@extends('user.include.app')
<!-- @section('bg-img',Storage::disk('local')->url($post->image)) -->
@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('title', $post->title)

@section('sub-heading',$post->subtitle)
@section('main-content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0&appId=837072016734894&autoLogAppEvents=1"></script>
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <small>Created at  {{ $post->created_at->diffForHumans() }}</small><br><br>
          
            @foreach($post->categories as $category)
            <small class="float-right" style="margin-right: 20px;">
              <a href="">{{ $category->name }}</a>
          </small>
          @endforeach
          <img src="{{asset(Storage::disk('local')->url($post->image))}}" class="img-fluid" alt="Responsive image">
          <h1 class="text-align-center">{{ $post->title }}</h1>
          <h4>{{ $post->subtitle }}</h4>
          {!! htmlspecialchars_decode($post->body) !!}


          {{-- Tag Cloud --}}
          <h3 class="float-right" style="margin-right: 20px;">Tags Clouds</h3><br>

          @foreach($post->tags as $tag)
            <a href=""><small class="float-right" style="margin-right: 20px; border-radius: 5px; border: 1px solid gray; padding: 5px;">
              {{ $tag->name }}
          </small></a>
          @endforeach

        </div>
        <div class="fb-comments" data-href="{{  Request::url() }}" data-width="" data-numposts="5"></div>
      </div>
    </div>
  </article>

  <hr>


@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection