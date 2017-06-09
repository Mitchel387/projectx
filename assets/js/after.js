/**
 * Created by mitch on 1-6-2017.
 */
$('legend').click(function () {
    $(this).parent().find('.togglecontent').slideToggle("slow");

    if ($(this).find('.fa').hasClass('fa-caret-down')) {
        $(this).find('i.fa-caret-down').addClass('fa-caret-up');
        $(this).find('i.fa-caret-up').removeClass('fa-caret-down');

    } else {
        $(this).find('i.fa-caret-up').addClass('fa-caret-down');
        $(this).find('i.fa-caret-down').removeClass('fa-caret-up');
    }
});