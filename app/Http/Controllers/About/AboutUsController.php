<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function getIndex() {
      return view('frontend.about.aboutus_home');
    }
}
