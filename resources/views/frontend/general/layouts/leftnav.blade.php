<!-- body-left-section starts -->
<div class="col-lg-3 col-12 body-left-section">
  <div class="left-body-wrapper">
    <!-- first banner section -->
    <div class="left-banner-section medium-banner banner-border-light">
      <div class="top-md-banner"><img src="{{ asset('public/assets/images/banner2-bg.jpg') }}"></div>
      <div class="md-banner-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipis lorem ipsum dolor elit. Lorem Beatae, aspernatur. Lorem Lorem Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="md-banner-button-wrapper">
        <button type="button" class="btn btn-light md-banner-btn create-post-btn" onclick="window.location.href='{{ route('get.createpost') }}'"><i class="fa fa-share"></i> create post</button>
      </div>
    </div><!-- .left-banner-section.medium-banner -->
    <div class="left-banner-section medium-banner nr-sections-wrapper banner-border-light">
      <div class="sections-title">
        <h2><i class="fa fa-bookmark"></i> Suggestion Categories</h2>
      </div>
      <div class="section-items">
        <!-- sections list starts -->
        <ul class="sections-list">
          <!-- section item -->
          @foreach ($categories as $category)
            <li>
              <a href="#">
                <img src="{{ asset('public/assets/images/section-eg.jpg') }}">&nbsp;
                <span class="section-title">
                  {{-- <i class="fa fa-bolt"></i>&nbsp; --}}
                  <span class="section-name">{{ $category->category_genre }}</span>
                  <span class="section-info">{{ $category->posts->count() }} posts till now</span>
                  <!-- <i class="fa fa-star-o pull-right section-mark"></i> -->
                </span>
              </a>
            </li><!-- section item ends -->
          @endforeach
        </ul><!-- .sections-list -->
      </div><!-- .section-items ends -->
    </div><!-- .nr-sections-wrapper ends here -->
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
  </div><!-- .left-body-wrapper ends -->
</div><!-- .body-left-section ends -->