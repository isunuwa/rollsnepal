@extends('frontend.general.layouts.master')
@section('main-content')
<div class="col-lg-9 create-post-wrapper">
  <div class="post-form-wrapper">

    <form class="new-post" action="" enctype="multipart/form-data" method="post">
      {!!csrf_field()!!}
      <h2>Upload a Post</h2>
      <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, magnam maxime odio?</label>

      <div class="form-group col-md-12 title-input {{ $errors->has('post_title') ? 'has-error' : '' }}">
        <label for="">Post Title</label>
        <input type="text" id="" class="form-control" placeholder=" Start a question with &quot;What&quot;, &quot;How&quot;, &quot;Why&quot;, etc. " name="post_title" value="{{ old('post_title') }}">
        <label class="post-form-error text-danger">{{ $errors->first('post_title') }}</label>
      </div>

      <div class="form-group col-md-6 category-input">
        <label for="" class="{{ $errors->has('post_category') ? 'has-error' : '' }}">Post Category</label>
        <select class="form-control" name="post_category">
          <option>Select an Option</option>
          @foreach($categories as $category )
            <option value="{{$category->id}}">{{$category->category_genre}}</option>
          @endforeach
        </select>
        <label class="post-form-error text-danger ">{{ $errors->first('post_category') }}</label>
      </div>

      <div class="form-group col-md-6 category-input">
        <label for="">Post Location</label>
        <select class="form-control {{ $errors->has('post_location') ? 'has-error' : '' }}" name="post_location">
          <option>Select a Location</option>
          @foreach($locations as $location )
            <option value="{{$location->id}}">{{$location->name}}</option>
          @endforeach
        </select>
        <label class="post-form-error text-danger">{{ $errors->first('post_location') }}</label>
      </div>

      <div class="clearfix"></div>
      <label>Choose how you want to upload the post.</label>
      <div class="actions-wrapper">
        <div class="upload-img col-md-4">
          <div class="method-wrapper">
              <input type="file" name="image" id="upload-btn" class="upload-btn">
            <span>
              <i class="fa fa-upload"></i>
              <p>Upload Image</p>
            </span>
          </div>
        </div>
        <div class="url-img col-md-4">
          <div class="method-wrapper">
              {{-- <input type="file" name="image" id="upload-btn" class="upload-btn"> --}}
            <span>
              <i class="fa fa-picture-o"></i>
              <p>Paste Image URL</p>
            </span>
          </div>
        </div>
        <div class="url-video col-md-4">
          <div class="method-wrapper">
              {{-- <input type="file" name="image" id="upload-btn" class="upload-btn"> --}}
            <span>
              <i class="fa fa-play-circle-o"></i>
              <p>Paste Video URL</p>
            </span>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="form-group col-md-8 description-input {{ $errors->has('post_description') ? 'has-error' : '' }}">
        <label for="">Post Description</label>
        <textarea class="form-control" rows="7" name="post_description"></textarea>
        <label class="post-form-error text-danger" value="{{ old('post_description') }}>{{ $errors->first('post_description') }}</label>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-light md-banner-btn post-submit-btn"><i class="fa fa-location-arrow"></i> POST</button>
        <button type="button" class="btn btn-light md-banner-btn post-cancel-btn" onclick="window.location.href='{{ url('/') }}'"><i class="fa fa-times"></i> Cancel</button>
      </div>
    </form>
  </div>
</div><!-- .posts-section ends -->
@stop
