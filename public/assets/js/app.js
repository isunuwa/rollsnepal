$(document).ready(function() {
  //show sub menu when clicked on a parent menu item
  $('li.sorts').on('click', function(e) {
    var sub_menu = $(this).find('ul.sub-menu');
    var hide_flag = false;
    if (sub_menu.css('display') == 'block') {
      hide_flag = true;
    }
    $('ul.sub-menu').hide();
    (hide_flag) ? sub_menu.hide() : sub_menu.show();
  })

  // toggle left menu items
  $('.left-menu-icon, .short-menu').on('click', function(e) {
    e.stopPropagation();
    if (".left-menu-wrapp")
    var menu_wrapper = $('.left-menu-wrapper');
    if (menu_wrapper.css('display') == 'block') {
      menu_wrapper
        .animate({
          left: "-270px"
        }, 500, function(e) {
          menu_wrapper.hide();
        })
    }
    else {
      menu_wrapper
        .show()
        .animate({
          left: "0"
        }, 500);
    }
  })
  
  //hide sub menu when clicked outside menu items
  $('body').on('click', function(e) {
    var target_class = e.target.className;
    if (target_class !== 'sort-category' && target_class !== 'sorts' && target_class !== 'sort-location') {
      $('ul.sub-menu').hide();
    }
    if (target_class !== 'fa fa-angle-double-right left-menu-icon' && target_class !== 'short-menu' && target_class !== 'left-menu-wrapper') {
      $('.left-menu-wrapper')
        .animate({
          left: "-270px"
        }, 500, function(e) {
          $(this).hide();
        })
    }
  })

  //likes the post by all the users
  var postId = 0;
  $('.like').on('click', function(e){
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.currentTarget.previousElementSibling == null;
    $.ajax({
      method : "POST",
      url : urlLike,
      data : {isLike : isLike, postId : postId, _token : token}
    })
      .done(function(msg){
        // change the page
        // console.log(msg["message"]);
      })
    ;
  })

})