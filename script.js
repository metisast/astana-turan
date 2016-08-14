$(function(){
    
    //Выбор языка dropdown
    var buttondef=  $("#langidforjqsolo");
    var buttoncust=$('#langidforjq')
    $('.btnfordown').click(function(){
        if(buttoncust.data('toggle')=='clicked'){
            buttoncust.data('toggle','notclicked');
            buttondef.addClass('hiden');
            buttoncust.removeClass('hiden').addClass('langnothiden');
            
            console.log("asd");
        }
        else if(buttoncust.data('toggle')=='notclicked'){
                  buttoncust.data('toggle','clicked');
            buttondef.removeClass('hiden');
            buttoncust.removeClass('langnothiden').addClass('hiden');
        }
    });
    //menuformobile
    var menubaar=$(".crircleformobileangle");
    var menumobile=$(".menuformmobile");
    var openmenu=$(".buttonopenmenu");
    menubaar.click(function(){
        if(menumobile.data('status')=='active'){
            console.log('sa');
            menumobile.fadeOut(1000);
            menumobile.data('status','inactive');
        }
        
    });
    openmenu.click(function(){
        if(menumobile.data('status')=='inactive'){
            menumobile.fadeIn(1000);
            menumobile.data('status','active');
        }
    });
    //
  var bell=$(".ad");
    var adful=$(".adtext");
    bell.click(function(){
        if(bell.data('status')=='inactive') 
        {
            bell.data('status','active');
          
            bell.addClass("clicked");
            $(".fa-bell").removeClass("pink").addClass("white");
            $(".circlein").css('visibility',"hidden");
            adful.css("visibility",'visible');
         
        }
       else {bell.data('status','inactive');
            bell.removeClass("clicked");
             $(".fa-bell").removeClass("white").addClass("pink");
               adful.css("visibility",'hidden');
             
            }
        
    });
    
    var oneacc=$(".oneacc");
    oneacc.click(function(){
        if($(this).data("active")=="on"){
            ($(this).find(".fa")).removeClass("fa-minus").addClass("fa-plus");
            $(this).find(".accordiontext").removeClass("accordiontext").addClass("accordionotextoff");
            $(this).data("active","off");
            $(this).find(".accordionheader").find("span").css("color","#000");
        }
        else {
              ($(this).find(".fa")).removeClass("fa-plus").addClass("fa-minus");
            $(this).find(".accordionotextoff").removeClass("accordionotextoff").addClass("accordiontext");
            $(this).data("active","on");
            $(this).find(".accordionheader").find("span").css("color","#2a1770");
        }
        
    });
    $(".angleleft").click(function(){
        console.log("sad");
        
    });
    var menu=$(".topmenu");
//    var tmpMarginTop= $(".textinslider").css("margin-top");
    $(window).scroll(function(){
       if($(this).scrollTop()>60 ){
          menu.data('static','static');
           menu.addClass("menustatic");
           
       }
        else if($(this).scrollTop()<60 ){
        menu.data('static','notstatic')
           menu.removeClass("menustatic");
//           $(".textinslider").css("margin-top",tmpMarginTop);
       }
    });
    $(".arrowright").click(function(){
    
    });
   //paralax
   $(window).scroll(function(){
      
       $(".jqueryparalax").css("background-position",(0 +"px " +$(window).scrollTop())+"px");
       
   });
    $(".arrowborder").click(function(){
       $('body').animate({"scrollTop":0},1500);
        
    });
 });