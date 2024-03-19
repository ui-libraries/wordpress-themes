var $first = $('li:first', 'ul'),
    $last = $('li:last', 'ul');
	
$("#next").click(function () {
    var $next, $selected = $(".selected");


    $next = $selected.next('li').length ? $selected.next('li') : $first;
    $selected.removeClass("selected");
    $next.addClass('selected');
	$next.trigger("click");
});

$("#prev").click(function () {
    var $prev, $selected = $(".selected");

    $prev = $selected.prev('li').length ? $selected.prev('li') : $last;
    $selected.removeClass("selected");
    $prev.addClass('selected');
	$prev.trigger("click");
}); 


