$(document).ready(function(){
    $('.coskpitablelegend table tbody').hide();

    $(".coskpitablelegend table thead").bind({
        click: function () {
            var $sub = $(this).next('tbody').stop(true, true);
            if ($sub.is(':visible')) {
                $sub.hide();
                $('span:first-child', this).css({ 'background' : '#efefef', 'color' : '#696969' });
            } else {
                    $sub.show();
                    $('span:first-child', this).css({ 'background' : '#696969', 'color' : '#fff' });
                }
            }
     });
});