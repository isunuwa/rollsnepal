@extends('frontend.users.layouts.master')
@section('main-content')
    <!-- user's posts section -->
    <div class="col-lg-6 user-posts-wrapper">
      <div class="profile-banner-section mb-4 medium-banner banner-border-light">
        <div class="top-md-banner"><img src="{{ asset('public/assets/images/banner2-bg.jpg') }}"></div>
        <div class="md-banner-button-wrapper">
            <p>Create a post for yourself</p>
          <button type="button" class="btn btn-light md-banner-btn create-post-btn" onclick="window.location.href='{{ url('post/create') }}'"><i class="fa fa-share"></i> create post</button>
        </div>
      </div>
      
      {{-- start of post sections --}}
      @foreach ($posts as $post)
          <div class="post">
            <div class="info-wrapper">
              <div class="user-avatar">
                <img src="{{ asset('public/assets/images/user-avatar.png') }}" class="post-user-avatar">
              </div>

              @if (Auth::id() == $user->id)        
                <div class="user-avatar float-right">
                  <a href="{{ route('get.editpost', ['id' => $post->id]) }}" class="fa fa-edit"></a>
                  <a class="fa fa-trash" href="{{ route('get.deletepost', ['id' => $post->id]) }}"></a>
                </div>
              @endif

              <div class="user-info">
                <a href="#">{{$post->user->username}}</a>
                <span class="posted-text pl-2">created at: {{ $post->created_at->todatestring() }}</span>
                
                @foreach ($categories as $category)
                  @if ($post->category_id == $category->id)
                    <a href="#" class="pl-2">{{ $category->category_genre }}</a>
                  @endif 
                @endforeach
              </div>
            </div><!-- .info-wrapper ends here -->

            <div class="clearfix"></div>
            <div class="post-click" onclick="window.location.href='{{ route('get.singlepost', [ 'title' => $post->title ]) }}'"> 
              <div class="title-wrapper">
                <a href="#" class="post-title">{{ $post->title }}</a>
              </div>
              <div class="link-wrapper">
                <a href="#"><i class="fa fa-external-link"></i> https://www.google.com/</a>
              </div>
              <div class="points-wrapper">
                <span>159 points &nbsp;|&nbsp; 25 comments</span>
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
          </div> 
      @endforeach   

    </div><!-- user's posts section ends -->

</div><!-- .user-profile-wrapper ends -->
@stop