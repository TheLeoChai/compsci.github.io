
<script type="text/javascript">
	//console.log('before-load');
	$(document).ready(function(){
	//console.log('loaded');
		var lastScrollTop = 0;
		$(window).scroll(function(event){
		//console.log('scrolled');
   			var st = $(this).scrollTop();
   			if (st > lastScrollTop && $(window).scrollTop() > 75){
				$('#header-ul').fadeOut(200);
       			// downscroll code
				//console.log('scroll-down');
   			} 
			else {
				$('#header-ul').fadeIn(200);
				// upscroll code
				//console.log('scroll-up');
   			}
   		lastScrollTop = st;
		});
	});
	</script>