$(document).ready(function(){
    //filter by status, filter entry for ob section
    //.md .filter_status, .md .filter_entry,
    $('.mdbts .filter_status .dropdown-menu li a').click(function(){
      $(this).parents('.mdbts .filter_status').find('.btn').text("Status: " + $(this).text()); 
      });
      $('.mdbts .filter_entry .dropdown-menu li a').click(function(){
       $(this).parents('.mdbts .filter_entry').find('.btn').text("Entry: " + $(this).text()); 
    });
    //when click fulls size
    $('#proftab .tabheader .oboptionfull').click(function(){
        $('#tab1 .col-lg-6').addClass("extend, clear");
        $('#tab1 .col-lg-6').css({ 'width' : '100%' , 'margin-bottom' : '20px' });
    });
    $('#proftab .tabheader .oboptionside').click(function(){
        $('#tab2 .col-lg-6').removeClass("extend, clear");
        $('#tab2 .col-lg-6').css({ 'width' : '50%' , 'margin-bottom' : '15px' });
    });
    //add shadow to the header when the table limiter is scrolled down
    $('#tblimiter1').scroll(function(e) { 
    $(this).scrollTop() > 0 ? $('#theheader1').addClass('shadow') : $('#theheader1').removeClass('shadow');
    });
    $('#tblimiter2').scroll(function(e) { 
    $(this).scrollTop() > 0 ? $('#theheader2').addClass('shadow') : $('#theheader2').removeClass('shadow');
    });
     //add slim scroll for the table limiter
        $('.tblimiter').slimScroll({
            height: '200px',
            alwaysVisible: true,
            allowPageScroll: false,
            railVisible: true
    
	});
        $('#tab2 .tblimiterr').slimScroll({
            height: '500px',
            alwaysVisible: true,
            allowPageScroll: false,
            railVisible: true
    
	});
    //when the dispute button is click 
    $('.open-popup-link').click(function(){
         //if its not manual then..
        if ($(this).attr('data-popup') === "editdispute"){
            
            var contents = $(this).parent().prevAll('td');
            var brek;
            var undertime;
            var latein;
            var actualtime;
            var typ;
            var dy;
            var workdate;

            for(i = 0; i<contents.length; i++){
                var currentContent = $(contents[i]);
                switch(i){
                    case 0:
                        brek = currentContent.text();
                        break;
                    case 1:
                        undertime = currentContent.text();
                        break;
                    case 2:
                        latein = currentContent.text();
                        break;
                    case 3:
                        actualtime = currentContent.text();
                        break;
                    case 4:
                        typ = currentContent.text();
                        break;
                    case 5:
                        dy = currentContent.text();
                        break;
                    case 6:
                        workdate = currentContent.text();
                        break;
                }
            }
            $('#test-popup .tph').html('<i class="glyphicon glyphicon-list-alt"></i><span>Dispute Number: 12345</span>');
            $('.dispute .nputholder:nth-child(1) input').val(workdate);
            $('.dispute .nputholder:nth-child(2) select:first-child option').each(function(){
                //$(this).attr("disabled", false);
                $(this).attr("selected", false);
                if(dy == $(this).val()){
                   $(this).attr({ /* disabled: true, */ selected: true});
                }else{
                    
                }
            });
            $('.dispute .nputholder:nth-child(2) select:last-child option').each(function(){
                //.$(this).attr("disabled", false);
                $(this).attr("selected", false);
                if(typ == $(this).val()){
                   $(this).attr({ /* disabled: true, */ selected: true});
                }else{
                    
                }
            });
            $('.dispute .nputholder:nth-child(3) input').val($.trim(actualtime));
            $('.dispute .nputholder:nth-child(4) input').val(latein);
            $('.dispute .nputholder:nth-child(5) input').val(undertime);
            $('.dispute .nputholder:nth-child(6) input').val(brek);
            $('.dispute .nputholder:nth-child(7) textarea').text("Sample reasons, dummy reasons");
            $('.dispute .nputholder:nth-child(9) textarea').text("Sample cause and effect, dummy cause and effect");
            $('.dispute .nputholder button:first-child').text("Update Dispute");
 
            
        }else if($(this).attr('data-popup') === "obrequest"){
            $('#test-popup .tph').html("");
            $('.dispute .nputholder input').val("");
            $('.dispute .nputholder:nth-child(2) select:last-child option, .dispute .nputholder:nth-child(2) select:first-child option').attr({selected: false});
            $('.dispute .nputholder:nth-child(2) select:last-child option:first-child, .dispute .nputholder:nth-child(2) select:first-child option:first-child').attr({selected: true});
            $('.dispute .nputholder textarea').text("");
            $('.dispute .nputholder button:first-child').text("Submit OB Request");
        }else{
            $('#test-popup .tph').html("");
            $('.dispute .nputholder input').val("");
            $('.dispute .nputholder:nth-child(2) select:last-child option, .dispute .nputholder:nth-child(2) select:first-child option').attr({selected: false});
            $('.dispute .nputholder:nth-child(2) select:last-child option:first-child, .dispute .nputholder:nth-child(2) select:first-child option:first-child').attr({selected: true});
            $('.dispute .nputholder textarea').text("");
            $('.dispute .nputholder button:first-child').text("Submit Dispute");
        }
    });
 
   
   $('.btncancel').click(function(e){
      e.preventDefault();
      $.magnificPopup.close(); 
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
    /* personal profile popup */
    $('#pdpopup').center();
    $('#pdpopup .userimg2, #pdpopup .userinfo, #pdpopup .tabmenu, #pdpopup .pcontentboxinfo').hide();
    $('.btninfo').click(function(){
	   $('#pdpopup').show();
	   $('#pdpopup').removeClass('animated zoomIn zoomOut');
	   $('#pdpopup').addClass('animated zoomIn');
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
        if($(this).text() !== "ATTENDANCE"){
            $(this).parent('.tabheader').find('.oboptionfull, .oboptionside').hide();
        }else{
            $(this).parent('.tabheader').find('.oboptionfull, .oboptionside').show();
        }
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
    
});

