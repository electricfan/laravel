$(document).ready(function(){
//Activate the iCheck Plugin
  $('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
   // center 
            $.fn.center = function () {
                this.css("top", ( $(window).height() - this.height() ) / 2  + "px");
                this.css("left", ( $(window).width() - this.width() ) / 2 + "px");
                return this;
            }
            $('.thehide').hide();
            //sortable
            $( ".sortable" ).sortable();
            $( ".sortable" ).disableSelection();
            $(".datepicker").datepicker();
            ///////////////////////////end///////////////////////////
           //slim scroll
            $('.updatebox_content_wrapper').slimScroll({
                height: '300px'
            });
            $('.disputetablewrapper').slimScroll({
               height: '500px'
            });
             $('.disputehistory').slimScroll({
               height: '350px'
            });
            $('.disputeapprove').slimScroll({
               height: '435px'
            });
            //shadow
            $('.longshadow').longShadow({
                colorShadow: '#218329',
		sizeShadow: 40
            });
            $('.verylongshadow').longShadow({
                colorShadow: '#c25757',
                sizeShadow: 80
            });
            //tooltip
            $(".tp" ).tooltipster({
                 theme: 'tooltipster-shadow',
                 contentAsHTML: true
            });
        //datepicker
         $('.datepicker').datepicker();
        //draggable
        $( ".white-popup, .draggable" ).draggable();
        //when go button of the credit officer status is click
        //disable the button that has a class of gobutton
        $('.gobtn').attr("disabled", true);
        $('.cosbranch li a').click(function(){
           $(this).closest('.btn-group').find('.sb').text('Branch: ' + $(this).text()); //line 1
           $(this).closest('.btn-group').find('.sb').attr("data-link", $(this).attr("data-link"));
           $('.gobtn').attr("disabled", false);

        });
         $('.cosname li a').click(function(){
           $(this).closest('.btn-group').find('.so').text('Officer: ' + $(this).text()); //line 1
           $(this).closest('.btn-group').find('.so').attr("data-link", $(this).attr("data-link"));
           $('.gobtn').attr("disabled", false);
        });
        //when the button that has a class of gobutton is click
        $('.gobtn').click(function(){
            if($(this).attr("data-idty") === "cos"){
                window.location.replace($(this).attr("data-link") + "/credit-officer-status/" + $(this).parent(".daselect").find('.sb').attr("data-link") + "/" + $(this).parent(".daselect").find('.so').attr("data-link"));
            }else if($(this).attr("data-idty") === "bckpi"){
                window.location.replace($(this).attr("data-link") + "/branch-company-kpi/" + $(this).parent(".daselect").find('.sb').attr("data-link"));
            }else if($(this).attr("data-idty") === "coskpi"){
                window.location.replace($(this).attr("data-link") + "/credit-officer-sales-kpi/" + $(this).parent(".daselect").find('.sb').attr("data-link") + "/" + $(this).parent(".daselect").find('.so').attr("data-link"));
            }
            
        });
        //magnific popup
         $('.open-popup-link').magnificPopup({
         type:'inline',
          removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            midClick: true
         
        });
        //upper bar (data filter, page filter)
        $('.filter_pages').unbind().click(function(){

           if($(this).next(".filter_sub").is(":visible")){
               $(this).parent()
               $(this).next(".filter_sub").slideUp(300);
           }else{
               $(this).next(".filter_sub").slideDown(300);
           }
        });
        //when one of the link inside the page filter is clicked
        $('.ju').click(function(){
            window.location.replace($(this).attr('href'));   
        });
});