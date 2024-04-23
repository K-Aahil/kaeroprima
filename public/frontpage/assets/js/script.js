document.addEventListener("DOMContentLoaded", function(){
	window.addEventListener('scroll', function() {
    	if (window.scrollY > 50) {
        	document.getElementById('navmenu').classList.add('fixed-top');
        	// add padding top to show content behind navbar
        	// navbar_height = document.querySelector('.navbar').offsetHeight;
        	// console.log(navbar_height);
        	// document.body.style.paddingTop = navbar_height + 'px';
      	} else {
        	document.getElementById('navmenu').classList.remove('fixed-top');
         	// remove padding top from body
        	// document.body.style.paddingTop = '0';
      	} 
  	});
});

$.fn.toggleHTML = function(t1, t2){
	if(this.html() == t1){
	  this.html(t2);
	}else{                   
	  this.html(t1);
	}
	return this;
};

$(document).ready(function(){
	$('.filter-btn').on('click', function(){
		$('.filter-form').slideToggle();
		$(this).toggleHTML('Show', 'Hide');
	});
});	