$(document).ready(function(){
        //var theight = $('.profdata .thumbnail').height();
        
        //$('.profdata .thumbnail').css({ 
            
        //'height' : theight + $('.profdata .thumbnail').css("padding-top").replace("px", "") + $('.profdata .thumbnail img').css("margin-bottom").replace("px", "") + "px"
            
        //});
    //employee profile when mouse over
    $('.profdata .thumbnail').mouseover(function(){
       $('img', this).slideUp(110);
       $('.caption', this).slideUp(120);
       $('.piccaption', this).slideDown(130);
       $('.captiondata', this).slideDown(140);
  
    }).mouseleave(function(){
       $('.captiondata', this).hide(100);
       $('img', this).slideDown(110);
       $('.caption', this).slideDown(120);
       $('.piccaption', this).slideUp(130);
       
    });
	if ($(window).height() >= 1000) {
            $('.scrollable').slimScroll({
            height: $(window).height() - 200 + 'px',
            alwaysVisible: true,
            allowPageScroll: false,
            railVisible: true
    
	});
        }else{
            $('.scrollable').slimScroll({
            height: $(window).height() - 200 + 'px',
            //alwaysVisible: true,
            allowPageScroll: false
            //railVisible: true
    
	});
        }
  //Activate the iCheck Plugin
  $('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });

 // tab
 $('.tabcontenttab').hide();
 $('.active').show();
 
 $('.tabheader a').click(function(e){
        if(!$(this).hasClass('active_tab')){  
        //hide all:
        $(".tabcontenttab").hide();
        //show clicked tab:
        $('.tabheader a').removeClass('active_tab');
        $(this).addClass('active_tab');
        $("#" + $(this).attr('href').substring(1)).fadeIn(1000);
        }
         e.preventDefault();
    });
    //end of tab
    
    
    // tab
 $('.infotabcontent').hide();
 $('.activeinfo').show();
 
 $('.tabmenu a').click(function(e){
        if(!$(this).hasClass('active_tab')){  
        //hide all:
         $('.infotabcontent').hide();
        //show clicked tab:
         $('.tabmenu a').removeClass('active_tab');
        $(this).addClass('active_tab');
        $("#" + $(this).attr('href').substring(1)).fadeIn(1000);
        }
         e.preventDefault();
    });
    //end of tab
    
    /* employee data popup */
    $('#pdpopup').center();
    $('#pdpopup .userimg2, #pdpopup .userinfo, #pdpopup .tabmenu, #pdpopup .pcontentboxinfo').hide();
    $('.profdata .thumbnail').click(function(){
	   $('#pdpopup').show();
	   $('#pdpopup').removeClass('animated zoomIn zoomOut');
	   $('#pdpopup').addClass('animated zoomIn');
	   $('.userimg2').attr('src', $('.pic img', this).attr('src'));
           $('#pdpopup .userinfo h1').text($('.caption h3', this).text());
           $('#pdpopup .userinfo h2').text($('.caption p', this).text());
            $('#pdpopup .userimg2, #pdpopup .userinfo, #pdpopup .tabmenu, #pdpopup .pcontentboxinfo').show(1000);
            
   });
    $('.closebtn').click(function(){
		$('#pdpopup').removeClass('animated zoomIn zoomOut');
		$('#pdpopup').addClass('animated zoomOut');
		$('#pdpopup').fadeOut(1000);
    });
       
    
    $(window).resize(function(){

            $('#pdpopup').center();
        
        
    });
}); //end of document ready function
