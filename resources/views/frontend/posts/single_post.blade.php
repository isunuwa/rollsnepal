@extends('frontend.general.layouts.master')
@section('main-content')
    <div class="col-lg-6 user-posts-wrapper">        
        {{-- start of post sections --}}
        <div class="post">
          <div class="info-wrapper">
            <div class="user-avatar">
              <img src="{{ asset('public/assets/images/user-avatar.png') }}" class="post-user-avatar">
            </div>
            <div class="user-info">
                <a href="#">{{$post->user->username}}</a>
                <span class="posted-text pl-2">created at: {{ $post->created_at->todatestring() }}</span>
                <a href="#" class="pl-2">{{ $post->category->category_genre }}</a>
            </div>
          </div><!-- .info-wrapper ends here -->

          <div class="clearfix"></div>
          <div class="title-wrapper">
            <h3 href="#" class="post-title">{{ $post->title }}</h3>
          </div>
          <div class="title-wrapper">
            <a href="#" class="post-title">{{ $post->description }}</a>
          </div>
          <div class="points-wrapper">
            <span>159 points &nbsp;|&nbsp; {{$post->comments->count()}} Comments</span>
          </div>
            
          <!-- post actions -->
          <div class="post-actions">
            <i class="fa fa-thumbs-o-up active-text-item"></i>
            <i class="fa fa-thumbs-o-down"></i>
            <i class="fa fa-comments-o"></i>
            <i class="fa fa-ellipsis-h"></i>
            <a href="#" class="share-media share-tw pull-right"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="#" class="share-media share-fb pull-right"><i class="fa fa-facebook"></i> Facebook</a>
          </div><!-- .post-actions ends here -->
        </div> 
        {{-- end of post sections --}}

        @if(!Auth::check())
          <div class="post">
            <div class="info-wrapper">
                <div class="info-wrapper ">
                  <div class="user-info">
                    <span href="#">Please Login to comment in this post</span>
                    <button type="button" class="btn btn-sm btn-light signup-btn" onclick="window.location.href='{{ url('login') }}'" style="display: {{ Helper::hideLoginButtons('login') }}">Log In</button>
                  </div>
                </div>
            </div>
          </div>

          @else
          <div class="post card">
            <div class="user-info card-block">
              <span>Comment as: </span><a href="#">{{ Auth::user()->username }}</a> 
              <form action="{{ route('post.storecomment', ['id' => $post->id]) }}" method="POST">
                {!!csrf_field()!!}
                <div class="form-group">
                  <textarea name="comment_body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-sm btn-light signup-btn float-right">Comment</button>
                </div>
              </form>
            </div>
          </div>
          @endif
        {{-- start of comment sections --}}
        
        @if ($post->comments->count() > 0)
        <div class="post">
            @foreach ($post->comments as $comment)
              <div class="info-wrapper">
                <div class="user-avatar">
                  <img src="{{ asset('public/assets/images/user-avatar.png') }}" class="post-user-avatar">
                </div>
                <div class="user-info">
                  <a href="#">{{$comment->user->username}}</a>
                  <span class="posted-text pl-2">{{$comment->comment}}</span> 
                </div>
                <div class="user-info float-right">
                    <span class="">{{$comment->created_at->diffForHumans() }}</span> 
                </div>
              </div>
              <hr class="mb-0 mt-0">
            @endforeach
          </div>{{-- end of comment sections --}}
          @endif

    </div>
  
</div>
@stop
