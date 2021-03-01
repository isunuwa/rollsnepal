@extends('frontend.general.layouts.master')
@section('main-content')
  <div class="col-lg-6 posts-section">
    @foreach ($posts as $post)
      <div class="post" data-postid="{{ $post->id }}">
        <!-- info section of post -->      
        <div class="info-wrapper">
          <div class="user-avatar">
            <img src="{{ asset('public/assets/images/user-avatar.png') }}" class="post-user-avatar">
          </div>
          <div class="user-info">
            <a href="{{ route('get.profile', ['user' => $post->user->username]) }}">{{ $post->user->username }}</a>
            <span class="posted-text">{{ $post->created_at->diffForHumans() }}</span>
            <a href="#">{{ $post->category->category_genre }}</a>
          </div>
        </div><!-- .info-wrapper ends here -->
        <hr class="mb-0 mt-0">
        <div class="clearfix"></div>

        <div class="post-click" onclick="window.location.href='{{ route('get.singlepost', [ 'title' => $post->title ]) }}'"> 
          <div class="title-wrapper">
            <a href="#" class="post-title">{{ $post->title }}</a>
          </div>
          
          @if ($post->url == Null)
            <div class="link-wrapper">
              <a href="#"><i class="fa fa-external-link"></i> https://www.google.com/</a>
            </div>
          @else
            <div class="graphic-content">
              <img src="{{ asset($post->url) }}">
            </div>
          @endif

          <div class="points-wrapper">
            <span>159 points &nbsp;|&nbsp; {{$post->comments->count()}}&nbsp; Comments</span>
          </div>
        </div>
        <!-- post actions -->
        <div class="post-actions">
          <i class="fa fa-thumbs-o-up active-text-item like"></i>
          <i class="fa fa-thumbs-o-down like"></i>

          <i class="fa fa-comments-o"></i>
          <i class="fa fa-ellipsis-h"></i>
          <a href="#" class="share-media share-tw pull-right"><i class="fa fa-twitter"></i> Twitter</a>
          <a href="#" class="share-media share-fb pull-right"><i class="fa fa-facebook"></i> Facebook</a>
        </div><!-- .post-actions ends here -->
      </div><!-- .post ends here -->
    @endforeach
  </div><!-- .posts-section ends -->
  
  @include('frontend.general.layouts.rightnav')

  <script>
    var token = '{{ Session::token() }}';
    var urlLike = '{{ route('post.like') }}';
  </script>
@stop
