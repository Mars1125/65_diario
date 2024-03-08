$(".hamburguess").click(function(e){
    e.preventDefault();
    $(".nav-container").toggleClass("active");
});


var width =  $( window ).width();

    if(width <= 1024){
     
        $(".menu-nav .item-menu").click(function(e){
            $(this).find('.submenu-box').toggleClass("active");
            $(this).siblings().find('.submenu-box.active').removeClass('active');
          // e.preventDefault();
        });  
    }


  var num = 280;
  var numTopUp = 500;
  $(window).bind('scroll',function(e){

    if(width > 1024){
    if($(window).scrollTop()>num){
       $(".navbar-header").addClass("active");
    }else{
        $(".navbar-header").removeClass("active");
    }
    // if($(window).scrollTop()>numTopUp){
    //     $(".topup").addClass("active");
    // }else{
    //     $(".topup").removeClass("active");
    // }
  }

  });

  // $(".topup").click(function(e){
  //   e.preventDefault();
  //   document.body.scrollTop = 0; // For Safari
  //   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  // });