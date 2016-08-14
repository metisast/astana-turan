$(function(){
    //Выбор языка dropdown
    var buttondef=  $("#lang-jq-solo");
    var buttoncust=$('#lang-jq')
    $('.btnfordown').click(function(){
        if(buttoncust.data('toggle')=='clicked'){
            buttoncust.data('toggle','notclicked');
            buttondef.slideUp(200);
            buttoncust.slideDown(200);
       
        }
        else if(buttoncust.data('toggle')=='notclicked'){
            buttoncust.data('toggle','clicked');
            buttondef.slideDown(200);
            buttoncust.slideUp(200);
        }
    });
    //menuformobile
    var menubaar=$(".circle-mobile-angle");
    var menumobile=$(".menu-mobile");
	var mmenu=$("#menu");
    var openmenu=$(".button-open-menu");
    menubaar.click(function(){
        if(menumobile.data('status')=='active'){
            menumobile.animate({
                right: -1000
            }, 500);
            $(".dark-mb-menu").fadeOut(200);
            menumobile.data('status','inactive');
        }
        
    });
    openmenu.click(function(){
        if(menumobile.data('status')=='inactive'){
            $(".dark-mb-menu").fadeIn(200);
			menumobile.fadeIn(200);
            menumobile.animate({
                right:0,
				
            },500);
			 
            menumobile.data('status','active');
        }
    });
    //
  var bell=$(".ad");
    var adful=$(".news-board");
    bell.click(function(){
        if(bell.data('status')=='inactive') 
        {
            bell.data('status','active');
            bell.addClass("clicked");
            $(".fa-bell").removeClass("pink").addClass("white");
            $(".circle-in").css('visibility',"hidden");
            adful.fadeIn(200);
         
        }
       else {bell.data('status','inactive');
            bell.removeClass("clicked");
             $(".fa-bell").removeClass("white").addClass("pink");
               adful.fadeOut();
             
            }
        
    });
    
    var oneacc=$(".oneacc");
    oneacc.click(function(){
        if($(this).data("active")=="on"){
            ($(this).find(".fa")).removeClass("fa-minus").addClass("fa-plus");
            $(this).find(".accordion-text").removeClass("accordion-text").addClass("accordion-text-off");
            $(this).data("active","off");
            $(this).find(".accordion-header").find("span").css("color","#000");
        }
        else {
              ($(this).find(".fa")).removeClass("fa-plus").addClass("fa-minus");
            $(this).find(".accordion-text-off").removeClass("accordion-text-off").addClass("accordion-text");
            $(this).data("active","on");
            $(this).find(".accordion-header").find("span").css("color","#2a1770");
        }
        
    });

    var menu=$(".topmenu");
	var topbar=$('.bars-line');
    $(window).scroll(function(){
       if($(this).scrollTop()>60 ){
          menu.data('static','static');
           menu.addClass("menu-static");
		   topbar.css({'position':'fixed','top':'0'});
       }
        else if($(this).scrollTop()<61 ){
        menu.data('static','notstatic')
           menu.removeClass("menu-static");
			 topbar.css({'position':'absolute','top':'3.4375rem'});
       }
    });
    $(".arrowright").click(function(){
    
    });
   //paralax
   $(window).scroll(function(){
      
       $(".jqueryparalax").css("background-position",(0 +"px " +$(window).scrollTop())+"px");
       
   });
    $(".arrow-border").click(function(){
       $('body').animate({"scrollTop":0},1500);
        
    });
 });