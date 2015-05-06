$(document).ready(function(){
       // tab
        $('.tabcontent').hide();
        $($('.tabheader .active_tab').attr('href')).show();
        
        $('.tabheader a').click(function(e){
               if(!$(this).hasClass('active_tab')){  
               //hide all:
                $('.tabcontent').hide();
               //show clicked tab:
                $('.tabheader a').removeClass('active_tab');
               $(this).addClass('active_tab');
               $("#" + $(this).attr('href').substring(1)).fadeIn(1000);
           }
               e.preventDefault();
        });
       $('.delete_records_history').click(function(){
          $('.disputehistory table .ckbox').show();
          $('.disputehistory table input[type="checkbox"]').each(function(){
            if($(this).is(':checked')){
                  $.magnificPopup.open({
                    items: {
                        src: "#disputeconfirm",
                        type:'inline'
                    },
                     
                    modal: true
                });
                $('#disputeconfirm p').show();
                $('#disputeconfirm .disputeconfirm_comment').hide();
                $('#disputeconfirm .btn:first-child').text('Delete');
                $('.disputeconfirmmsg').text('delete');
                $('#disputeconfirm .btn:first-child').attr("data-what", "delete");
            }else{
               
            }
           });
       });
       $('.disputehistory table thead th input[type="checkbox"]').click(function(){
           if($(this).is(':checked')){
               $('.disputehistory table tbody td input[type="checkbox"]').prop("checked", true);
           }else{
               $('.disputehistory table tbody td input[type="checkbox"]').prop("checked", false);
           }
       });
       $('.disputemodify').hide();
       $('.disputeapproved').click(function(){
           $('#disputeconfirm p').hide();
           $('#disputeconfirm .disputeconfirm_comment').show();
           $('#disputeconfirm .btn:first-child').text('Approve');
           $('#disputeconfirm .btn:first-child').attr('data-number', $(this).parent().parent("td").attr("data-number"));
           $('#disputeconfirm .btn:first-child').attr("data-what", "approve");
           $.magnificPopup.open({
                    items: {
                        src: "#disputeconfirm",
                        type:'inline'
                    },
                     
                    modal: true
           });
       });
       $('.disputedecline').click(function(){
            $('#disputeconfirm p').show();
            $('#disputeconfirm .disputeconfirm_comment').hide();
            $('#disputeconfirm .btn:first-child').text('Reject');
            $('#disputeconfirm .btn:first-child').attr("data-what", "reject");
            $.magnificPopup.open({
                    items: {
                        src: "#disputeconfirm",
                        type:'inline'
                    },
                     
                    modal: true
                });
            $('.disputeconfirmmsg').text('Reject');
       });
       $('.mclose').click(function(){
           $.magnificPopup.close();
       });
         $('.disputeconfirmbuttonholder .btn:last-child').click(function(){
            $(this).parent().prev('.disputeconfirm_comment').hide();
            $(this).parent().prev().prev('p').show();
            $(this).parent().find('.btn:first-child').text('Yes');
            $.magnificPopup.close();
         });
      $('.disputeconfirmbuttonholder .btn:first-child').click(function(){
          if($(this).attr("data-identifier") === "roda"){
             //if delete
             if($(this).attr("data-what") === "delete"){
                $(this).parent().prev('.disputeconfirm_comment').hide();
                $(this).parent().prev().prev('p').show();
                $(this).parent().find('.btn:first-child').text('Yes');
                $.magnificPopup.close(); 
             }else if($(this).attr("data-what") === "reject"){ //if reject
                if($('.disputeconfirm_comment').is(':visible')){
                    $(this).parent().prev('.disputeconfirm_comment').hide();
                    $(this).parent().prev().prev('p').show();
                    $(this).parent().find('.btn:first-child').text('Yes');
                    $.magnificPopup.close(); 
                }else{
                    $(this).parent().prev('.disputeconfirm_comment').show();
                    $(this).parent().prev().prev('p').hide();
                    $(this).parent().find('.btn:first-child').text('Reject');
                } //end of if the disputeconfirm_comment is hidden   

             }else if($(this).attr("data-what") === "approve"){
                $(this).parent().prev('.disputeconfirm_comment').show();
                $(this).parent().prev().prev('p').hide();
                $(this).parent().find('.btn:first-child').text('Yes');
                var datanumber = $(this).attr("data-number");
                $('.disputeapprove table td[data-number=' + datanumber + '] .disputemodify').show();
                $('.disputeapprove table td[data-number=' + datanumber + '] .ruda').hide();
                $.magnificPopup.close();
             }//end of if delete, reject, approve
          } else {
            $(this).parent().prev('.disputeconfirm_comment').hide();
            $(this).parent().prev().prev('p').show();
            $(this).parent().find('.btn:first-child').text('Yes');
            $.magnificPopup.close();
          } //end of if data-identifier is equal to roda
       });
      //layout options
      $('.disputeoptiontab').click(function(){
          $('.disputetabheader').show();
          $('.disputeheaderoptions').css({ 'float' : 'right' });
          $('#colapprove').removeClass('col-lg-6');
          $('#colapprove').addClass('row, center');
          $('#colhistory').removeClass('col-lg-6');
          $('#colhistory').addClass('row, center');
          $('#colhistory, #colapprove').css({ 'padding' : '0px 10px', 'margin' : '0px 0px 10px 0px'});
          $('#colapprove').addClass('tabcontent');
          $('#colhistory').addClass('tabcontent');
          $('#colhistory, #colapprove').hide();
          
          
          $($('.disputetabheader .active_tab').attr('href')).show();
      });
      
       $('.disputeoptionfull').click(function(){
          $('.disputetabheader').hide();
          $('.disputeheaderoptions').css({ 'float' : 'left' });
          $('#colapprove').removeClass('col-lg-6');
          $('#colapprove').addClass('row, center');
          $('#colhistory').removeClass('col-lg-6');
          $('#colhistory').addClass('row, center');
          $('#colhistory, #colapprove').css({ 'padding' : '0px 10px', 'margin' : '0px 0px 10px 0px'});
          $('#colhistory, #colapprove').show();
          $('#colapprove').removeClass('tabcontent');
          $('#colhistory').removeClass('tabcontent');
      });
      $('.disputeoptionside').click(function(){
          $('.disputetabheader').hide();
          $('.disputeheaderoptions').css({ 'float' : 'left' });
          $('#colapprove').addClass('col-lg-6');
          $('#colapprove').removeClass('row, center');
          $('#colhistory').addClass('col-lg-6');
          $('#colhistory').removeClass('row, center');
          $('#colhistory, #colapprove').show();
          $('#colapprove').removeClass('tabcontent');
          $('#colhistory').removeClass('tabcontent');
      });
      $('.disputesearchinput').click(function(){
         $(this).animate({ width : '160px' }); 
      }).focusout(function(){
         $(this).animate({ width : '130px' }); 
      });
      //when click modify
      $('.disputemodify').click(function(){
         var contents = $(this).parent().prevAll('td');
            var dispute_message;
            var approved_date;
            var dispute_status;
            var dispute_department;
            var date_requested;
            var dispute_requester;
            var dispute_name;

            for(i = 0; i<contents.length; i++){
                var currentContent = $(contents[i]);
                switch(i){
                    case 0:
                        dispute_message = currentContent.attr("data-message");
                        break;
                    case 1:
                        approved_date = currentContent.text();
                        break;
                    case 2:
                        dispute_status = currentContent.text();
                        break;
                    case 3:
                        dispute_department = currentContent.text();
                        break;
                    case 4:
                        date_requested = currentContent.text();
                        break;
                    case 5:
                        dispute_requester = currentContent.text();
                        break;
                    case 6:
                        dispute_name = currentContent.text();
                        break;
                }
            }
            $('#dispute_name').val(dispute_name);
            $('#dispute_requester').val(dispute_requester);
            $('#date_requested').val(date_requested);
            $('#dispute_department').val(dispute_department);
            $('#dispute_status').val(dispute_status);
            $('#approved_date').val(approved_date);
            $('#dispute_message').val(dispute_message);
            
            $.magnificPopup.open({
                    items: {
                        src: "#disputemodify",
                        type:'inline'
                    },
                     
                    modal: true
           });
            
      });
      //when disputemodify form is submitted
      $('#disputemodify form').submit(function(e){
          alert("Prototype only!");
          e.preventDefault();
      });
      //when click departments filter and entry filters
      $('.filter_department .dropdown-menu li a').click(function(){
      $(this).parents('.filter_department').find('.xjk_department').text("Department: " + $(this).text()); 
      });
      $('.filter_entry .dropdown-menu li a').click(function(){
       $(this).parents('.filter_entry').find('.xjk_entry').text("Entry: " + $(this).text()); 
      });
}); //end of the document ready