<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Rolls Nepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome.css') }}">
  </head>
  <body>
    <div class="container-fluid">
      <!-- header section starts -->
      <div class="row" id="header-wrapper">
        <div id="header" class="col-12">
          <div class="row nav-wrapper">
            <div class="short-menu">
              <i class="fa fa-angle-double-right left-menu-icon"></i>
            </div>
            <!-- right navigation section -->
            <div class="right-nav">
              <div class="row no-margin">
                <!-- sort by section starts -->
                <div class="col-lg-5 logo-wrapper">
                  <a href="{{ url('/') }}"><img src="{{ asset('public/assets/images/logo.png') }}" class="img-responsive pull-left" id="top-logo"></a>
                  <!-- sort by items list -->
                  <ul class="sort-items pull-left">
                    <li>Sort By</li>
                    <li class="sorts">
                      <i class="fa fa-fire sort-by-icon"></i>
                      <span class="sort-category">Trending<i class="fa fa-angle-down down-arrow"></i></span>
                      
                      <ul class="sub-menu">
                        <li>New</li>
                        <li class="active-menu">Trending</li>
                        <li>Popular</li>
                      </ul>
                    </li>
                    <li class="sorts">
                      <i class="fa fa-location-arrow sort-by-icon"></i>
                      <span class="sort-location">Everywhere<i class="fa fa-angle-down down-arrow"></i></span>
                      
                      <ul class="sub-menu">
                        @foreach ($locations as $location)
                        <li value="{{ $location->id }}"  onclick="window.location.href='{{ route('location.single', ['id' => $location->id]) }}'">{{ $location->name }}</li>
                        @endforeach
                      </ul>
                    </li>
                  </ul><!-- sort by items list ends here -->
                  <div class="nav-mid-border"></div><!-- mid line, between search and sortby items -->
                </div><!-- sort by section ends here -->
                <!-- search section starts -->
                <div class="col-lg-3 search-wrapper no-padding">
                  <div class="col-lg-1 no-padding pull-left search-icon">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="col-lg-11 pull-left search-form no-padding">
                    <!-- search form starts -->
                    <form class="search-site">
                      <fieldset>
                        <input class="form-control" type="text" name="search_text" placeholder="Search for posts, users...">
                        <span class="fa fa-times-circle clear-search"></span>
                      </fieldset>
                    </form><!-- search form ends here -->
                  </div><!-- .search-form ends -->
                </div><!-- search sectioin ends here -->
                <!-- buttons section -->
                <div class="col-lg-4 buttons-wrapper">
                  @if(!Auth::check())
                  <div class="buttons">
                    <button type="button" class="btn btn-light login-btn" onclick="window.location.href='{{ url('login') }}'" style="display: {{ Helper::hideLoginButtons('login') }}">log in</button>
                    <button type="button" class="btn btn-light signup-btn" onclick="window.location.href='{{ url('signup') }}'" style="display: {{ Helper::hideLoginButtons('signup') }}">sign up</button>
                  </div><!-- .buttons ends -->
                  @else
                  <div class="nav-wrapper">
                    <ul class="sort-items pull-left">
                        <span><a href="{{ url('user/home') }}">{{Auth::user()->username}}</a></span>
                      <li class="sorts">
                          <span class="sort-location">More<i class="fa fa-angle-down down-arrow"></i></span>
                          
                          <ul class="sub-menu">
                            <li onclick="window.location.href='{{ url('user/home') }}'">Profile</li>
                            <li onclick="window.location.href='{{ url('logout') }}'" class="active-menu">Logout</li>
                          </ul>
                        </li>
                      </ul><!-- sort by items list ends here -->
                  </div>
                  @endif
                </div><!-- buttons section ends -->
              </div><!-- .row ends -->
            </div><!-- .right-nav ends -->
          </div><!-- .nav-wrapper ends -->
        </div><!-- #header ends -->
      </div><!-- header-section ends here -->
      <div class="left-menu-wrapper">
        asdfja
      </div>
      <div class="row main-body">


