<!-- main body-right section -->
<div class="col-lg-3 body-right-section">
  <!-- user leaderboard starts -->
  <div class="medium-banner nr-sections-wrapper leaderboard-wrapper banner-border-light">
    <div class="banner-title">
      <h2><i class="fa fa-trophy"></i> Leaderboard this month</h2>
    </div>
    <div class="leaderboard-users">
      <!-- leaderboard users -->
      <ul class="leaderboard-list">
        <!-- user-->
        @foreach ($users as $user)
          <li>
            <a href="#">
              <img src="{{ asset('public/assets/images/section-eg.jpg') }}" class="rounded-circle">&nbsp;
              <span class="user-details green-text">
                <span class="user-name">{{ $user->username}}</span>
                {{-- orderBy('created_at', 'desc')->take(3)->get() --}}
                <span class="user-points">79 points</span>
              </span>
            </a>
          </li><!-- user ends -->
        @endforeach
      </ul><!-- .leaderboard-list -->
    </div><!-- .leaderboard-users ends -->
  </div><!-- .leaderboard-wrapper ends here -->
  <!-- offers banner section -->
  <div class="offers-banner medium-banner banner-border-light">
    <div class="top-md-banner"><img src="{{ asset('public/assets/images/banner3-bg.jpg') }}"></div>
    <div class="md-banner-text">
      <p>Lorem ipsum dolor sit amet, consectetur adipis lorem ipsum dolor elit. Lorem Beatae, aspernatur. Lorem Lorem Lorem ipsum dolor sit amet.</p>
    </div>
    <div class="md-banner-button-wrapper">
      <button type="button" class="btn btn-light md-banner-light-btn"><i class="fa fa-file-text-o"></i> view offers</button>
    </div>
  </div><!-- offers banner ends here -->
</div><!-- .body-right-section ends -->
