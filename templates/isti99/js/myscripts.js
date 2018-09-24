

$(document).ready(function() {
					
		/*--тултип форма заказа--*/		
		$(document).click( function(event){
			if( $(event.target).closest(".form-zakaz").length ) 
			return;
			$('.form-box').animate({bottom: "-240px"}, 1000);
				event.stopPropagation();
			});
			$('.obr-call').click( function() {
			$(".form-box").animate({bottom: "0px"}, 1000);
			return false;
		});
		
		//кнопка наверх
$(document).ready(function(){
	function show_scrollTop(){
		( $(window).scrollTop() > 300 ) ? $('.scroll').css('display','block') : $('.scroll').css('display','none');
	}
	$(window).scroll( function(){ show_scrollTop(); } );
	show_scrollTop();
	$('.scroll').click(function(event) {
		event.preventDefault();
		$('html,body').animate({scrollTop: 0}, 1000 );	
	});
});
});