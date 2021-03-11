
//function matchPhone(a){return/^[0-9]{8,12}$/.test(a);} // /^[0-9 \-]+$/
function matchPostcode(a){return/^[0-9]{5}$/.test(a);}
function matchEmail(a){return/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i.test(a);}
//function matchDate(a){return/(\d{4})-(\d{2})-(\d{2})/.test(a);}
//function matchSiret(a){return/^[0-9]{14}$/.test(a);}


// jQuery start!

$(document).ready(function()
{

	// Click info - dropdown
	$('.clickinfo').append(' ▼');

	$('.clickinfo').click(function()
	{
		$(this).siblings('.moreinfo').slideToggle(400);
	});

	// Function to clear fields after submit
	$.fn.reset=function(){$(this).each(function(){this.reset()})};


	// date/time picker
	/*
	
	var curr = new Date().getFullYear();
	var opt = {}
	opt.date = {preset : 'date'};
	opt.datetime = { preset : 'datetime', minDate: new Date(2012,3,10,9,22), maxDate: new Date(2014,7,30,15,44), stepMinute: 5  };

	'undefined' != typeof $.fn.scroller &&

		$('.datepicker').scroller(
			$.extend(opt['date'],{
				dateOrder:'ddMMyyyy',
				dateFormat:'yyyy-mm-dd',
				animate: '',
				theme:'android-ics light',
				mode:'clickpick',
				display:'bubble',
				lang:'fr',
			})
		);
	*/
});