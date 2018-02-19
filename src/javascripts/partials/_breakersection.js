import paroller from 'paroller.js'

$(window).paroller();


window.addEventListener('resize', function(event){
	$(window).paroller();
});