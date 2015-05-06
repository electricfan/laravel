$(document).ready(function(){

    $('.accordion .accordion_content').hide();
    $('.cosdata_table_search').hide();
    $('.filterentries').hide();
    
    $(".accordion .accordion_header h1").bind({
        click: function () {
            var $sub = $(this).parent().next('.accordion_content').stop(true, true);
            if ($sub.is(':visible')) {
                $sub.slideUp();
                $('span:first-child', this).css({ 'background' : '#efefef', 'color' : '#696969' });
                $(this).parent().find('.filterentries').fadeOut();
            } else {
                    $sub.slideDown();
                    $('span:first-child', this).css({ 'background' : '#696969', 'color' : '#fff' });
                    $(this).parent().find('.filterentries').fadeIn();
                }
            }
     });
     $(".cosdata_searchbtn").bind({
        click: function () {
            var $sub = $(this).prev('.cosdata_table_search').stop(true, true);
            if ($sub.is(':visible')) {
                $sub.hide("slide", { direction: "right" }, 300);
               
            } else {
                    $sub.show("slide", { direction: "right" }, 300);
                    
                }
            }
     });
     var position1 = $('#tad').offset();
    var position2 = $('#gp').offset();
    var position3 = $('#cia').offset();
    
   $('#cosbox_dp_tad').css({ 'left' : position1.left, 'top' : position1.top + 30 });
   $('#cosbox_dp_gp').css({ 'left' : position2.left, 'top' : position2.top + 30 });
   $('#cosbox_dp_cia').css({ 'left' : position3.left, 'top' : position3.top + 30 });
   
   
   $(".cosbox_has_dp").bind({
        click: function () {
            var cosbox_id = $(this).attr('id');
            var $sub = $('#cosbox_dp_' + cosbox_id).stop(true, true);
            if ($sub.is(':visible')) {
                $sub.slideUp();
                //$(this).animate({ 'background-color' : '#811e1e', 'color' : '#fff'}, '300');
            } else {
                $('.datafiltersub').hide();
                    $sub.slideDown();
                   // $(this).animate({ 'background-color' : '#fff', 'color' : '#555'}, '300');
                }
            }
    });
    
      $('#tbtest').DataTable( {
                "pagingType": "full_numbers",
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "<?php echo url(); ?>/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                },
                "oLanguage": {
                "oPaginate": {
                  "sPrevious": '<i class="pe-7s-angle-left"></i>',
                  "sNext": '<i class="pe-7s-angle-right"></i>'
                }
              }
            });
            
            
            var table = $('#tbtest').DataTable();
            // #myInput is a <input type="text"> element
            $('.datatables_search').on( 'keyup', function () {
                table.search( this.value ).draw();
                $('#tbtest_previous').html('<span aria-hidden="true"><i class="pe-7s-angle-left"></i></span>');
                $('#tbtest_next').html('<span aria-hidden="true"><i class="pe-7s-angle-right"></i></span>');
            } );
            
           // $('.dataTables_info').prependTo('.table_pagination');
            //$('.dataTables_paginate').appendTo('.table_pagination');
            $('.dataTables_info, .dataTables_paginate').wrapAll('<div class="table_pagination extend clear">');
            $('#tbtest_previous').html('<span aria-hidden="true"><i class="pe-7s-angle-left"></i></span>');
            $('#tbtest_next').html('<span aria-hidden="true"><i class="pe-7s-angle-right"></i></span>');
            
            $('.datafilteroptions li a').click(function(e){
                var dis = $(this).text();
                $(this).closest('.btn-group').find('.btn:first-child').text(dis); //line 1
                $('.dataTables_length select').val($(this).text());
                $('.dataTables_length select').trigger("change");
                
                $('#tbtest_previous').html('<span aria-hidden="true"><i class="pe-7s-angle-left"></i></span>');
                $('#tbtest_next').html('<span aria-hidden="true"><i class="pe-7s-angle-right"></i></span>');
                e.preventDefault();
            });
            
            $('.tbprint').click(function(e){
             $(this).parents('#fctable').find('.DTTT_button_print').trigger("click");
             e.preventDefault();
            });
            $('.tbexcel').click(function(e){
             $(this).parents('#fctable').find('.DTTT_button_xls').trigger("click");
             e.preventDefault();
            });
            $('.tbpdf').click(function(e){
             $(this).parents('#fctable').find('.DTTT_button_pdf').trigger("click");
             e.preventDefault();
            });
            $('.tbcsv').click(function(e){
             $(this).parents('#fctable').find('.DTTT_button_csv').trigger("click");
             e.preventDefault();
            });
            $('.tbcopy').click(function(e){
             $(this).parents('#fctable').find('.DTTT_button_copy').trigger("click");
             e.preventDefault();
            });
            
            //new $.fn.dataTable.FixedHeader( table );
});