<div class="left-menu-wrapper">
        asdfja
      </div>
      <!-- main body section starts -->
      <div class="row user-profile-body main-body no-padding">
        <div class="col-lg-12 user-menu-wrapper">
          <div class="row justify-content-center">
            <!-- user-menu starts -->
            <div class="col-lg-9 user-menu-content">
              <ul class="user-menu">
                <li>Overview</li>
              </ul>
            </div><!-- .user-menu-content ends -->
          </div><!-- .row -->
        </div><!-- .user-menu-wrapper ends -->
        <!-- user profile section starts -->
        <div class="col-lg-12 user-profile-wrapper">
          <div class="row justify-content-center">
            <div class="col-lg-3 user-summary-left">
              <div class="user-summary">
                <div class="top-summary">
                  <img src="{{ asset('public/assets/images/banner2-bg.jpg') }}">
                </div>
                <div class="row mid-summary">
                    <div class="col-lg-3 user-info-img">
                      <img src="{{ asset('public/assets/images/section-eg.jpg') }}" class="rounded-circle">
                    </div>
                    <div class="col-lg-9">
                      <div class="user-profile-info valign-middle">
                        <h2 class="green-text">{{ $user_full_name }}</h2>
                        <span>995 points</span>
                      </div>
                    </div>
                    <div class="col-lg-12 user-details">
                      <p>
                        <span class="label-title green-text"><i class="fa fa-birthday-cake"></i> Birthday</span>
                        <span class="user-details-data">31 August, 1994</span>
                      </p>
                      <p>
                        <span class="label-title green-text"><i class="fa fa-calendar"></i> Member Since</span>
                        <span class="user-details-data">{{ $user->created_at->todatestring() }}</span>
                      </p>
                      <p>
                        <span class="label-title green-text"><i class="fa fa-commenting-o"></i> Info Message</span>
                      </p>
                      <p class="user-message user-details-data">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam debitis iure sint saepe fuga assumenda."</p>
                    </div>
                </div>
                <div class="bottom-summary"></div>
              </div><!-- .user-summary ends -->
              <!-- site-links section starts -->
              <div class="site-links-wrapper banner-border-light">
                <div class="row">
                  <div class="col-lg-6">
                    <ul class="quick-links">
                      <li><a href="#"><i class="fa fa-angle-right"></i> About</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> News</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> Careers</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> Terms</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> Contact</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6 no-padding">
                    <ul class="quick-links">
                      <li><a href="#"><i class="fa fa-angle-right"></i> Advertise</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> Tips</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> Privacy</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i> FAQ</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-12 copyright-text"><span>copyright &copy; 2018 rolls<span class="logo-red-color">nepal</span></span></div>
                </div><!-- .row ends -->
              </div><!-- .site-links-wrapper, site-link section ends here -->
            </div><!-- .user-summary-left section ends -->
            