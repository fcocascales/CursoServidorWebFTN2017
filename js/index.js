$(function() {

	$('.index').delegate('p>span', 'click', function() {
		//accordion($(this));
		accordion($(this).parent());
	});

	function accordion($p) {
		$p.toggleClass('plus');
		$ul = $p.next();
		$ul.toggle();
		$('.index').find('ul').not($ul).hide();
		$('.index').find('p').not($p).addClass('plus')
	}

	/*$('.index p a').click(function() {
		accordion($(this).parent());
		return false;
	});*/

	$('.index').find('ul').hide();

});
