jQuery(document).ready( function($) {


	heroOwl = $('.hero .owlcarousel');
	heroOwl.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
	});

	clientsOwl = $('.clients .owlcarousel');
	clientsOwl.owlCarousel({
		items: 4,
		margin: 10,
		loop: true,
		responsive:{
			0:{ items: 1 },
			500:{ items: 2 },
			768:{ items: 3 },
			992:{ items: 4 }
		}
	});
	
	thatOwl = $('.that .owlcarousel');
	thatOwl.owlCarousel({
		items: 1,
	});	
	
	blogOwl = $('.blog .owlcarousel');
	blogOwl.owlCarousel({
		items: 4,
		margin: 30,
		responsive:{
			0:{
				items: 1
				},
			500:{
				items: 2,
				center: true
				},
			768:{ items: 3 },
			992:{items: 4 }
		}
	});

	
	/* center modal */
	function centerModals($element) {
	  var $modals;
	  if ($element.length) {
		$modals = $element;
	  } else {
		$modals = $('.modal-vcenter:visible');
	  }
	  $modals.each( function(i) {
		var $clone = $(this).clone().css('display', 'block').appendTo('body');
		var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
		top = top > 0 ? top : 0;
		$clone.remove();
		$(this).find('.modal-content').css("margin-top", top);
	  });
	}
	$('.modal-vcenter').on('show.bs.modal', function(e) {
	  centerModals($(this));
	});
	$(window).on('resize', centerModals);
	
	} );