(function() {
'use strict';

function onyoHorizontalSlider(holder_element, width_constant) {

	var me=this;

	me.holder_element=holder_element;
	me.width_constant=width_constant;

	me.start= _start;

	function _start(miliseconds) {
		window.setTimeout(function() {
			console.log('Move to next element ...');
		}, miliseconds);
	}
}

$(document).ready(function(){
	var slider= new onyoHorizontalSlider($('.onyo-slider-wrapper'), $('.onyo-slider').height());
	slider.start(2000);
});

})();