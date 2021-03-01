<?php

namespace App\Helpers;

class Helper {

  public static function hideLoginButtons($button) {
    $last_url = last(request()->segments());
    if ($last_url == 'login' || ($last_url == 'signup' && $button == 'signup')) {
      return "none";
    }
  }

}

?>