(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
'use strict';

//Carousel
function Carousel(slide_title_content, slide_desc_content) {
	this.slide_title_content = slide_title_content;
	this.slide_desc_conten = slide_desc_content;

	function handlePopUp() {
		var $images = $('.carousel_content').find('figure').find('img');
		var i = 0,
		    $current_image = $images[i];
		$current_image.addEventListener('click', function () {
			Carousel.prototype.createPopUp($current_image);
			Carousel.prototype.openPopUp();
		});
		return $current_image;
	}
}
Carousel.prototype.createPopUp = function (slide_title_content, slide_desc_content, $current_image) {
	var $carousel_pop_up = document.getElementById('carousel_pop_up'),
	    $pop_up = document.createElement('div'),
	    $slide_text = document.createElement('div'),
	    $slide_image = document.createElement('div'),
	    $slide_title = document.createElement('p'),
	    $slide_desc = document.createElement('p'),
	    $close_pop_up = document.createElement('button');
	$pop_up.className = 'pop_up';
	$close_pop_up.id = 'close_pop_up';
	$slide_image.className = 'slide_image';
	$slide_text.className = 'slide_text';
	$slide_desc.className = 'slide_desc';
	$slide_title.className = 'slide_title';
	$slide_image.innerHTML += $current_image;
	$slide_title.innerHTML += slide_title_content;
	$slide_desc.innerHTML += slide_desc_content;
	$slide_text.appendChild($slide_title);
	$slide_text.appendChild($slide_desc);
	$pop_up.appendChild($slide_text);
	$pop_up.appendChild($slide_image);
	$pop_up.appendChild($close_pop_up);
	$carousel_pop_up.appendChild($pop_up);
	console.log($current_image);

	return $pop_up;
};

Carousel.prototype.openPopUp = function () {
	var content = document.querySelector('.page_wrap'),
	    $pop_up = Carousel.prototype.createPopUp();
	content.className += ' shadow';
	$pop_up.className += ' open_pop_up';
};
Carousel.prototype.closePopUp = function () {
	$close_pop_up.addEventListener('click', function () {
		$pop_up.className += ' close_pop_up';
		$pop_up.className -= ' open_pop_up';
		content.className -= ' shadow';
	});
};
var slide1 = new Carousel('First Slide', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa est reprehenderit dolore saepe ad consectetur, quisquam quod amet necessitatibus minima! Ducimus consequatur incidunt recusandae quae autem rerum adipisci deserunt porro.');
// console.log(Carousel.prototype);

},{}],2:[function(require,module,exports){
'use strict';

//Custom Header
var customHeader = function () {
	var $header = $('header'),
	    $custom_header_wrap = $header.find('.custom_header_wrap'),
	    $header_wrap = $header.find('.header_wrap'),
	    header_offset = $custom_header_wrap.innerHeight() - $header_wrap.outerHeight(),
	    header_wrap_fixed = 'header_wrap_fixed';

	window.onscroll = function adjustScrollClass() {
		if ($(window).scrollTop() >= header_offset) {
			$header_wrap.addClass(header_wrap_fixed);
		} else {
			$header_wrap.removeClass(header_wrap_fixed);
		}
	};
}();

},{}],3:[function(require,module,exports){
'use strict';

//Header Slider
var headerSlider = function headerSlider() {
	var $images = $('.slider img'),
	    $next_btn = document.getElementById('next'),
	    $prev_btn = document.getElementById('prev'),
	    time = 1000;

	var i = 0;

	setInterval(nextSlide, time * 5);

	function nextSlide() {
		$($images[i]).fadeOut(time);
		i++;
		if (i >= $images.length) {
			i = 0;
			$($images[i]).fadeIn(time);
		}
		$($images[i]).fadeIn(time);
	}
	function prevSlide() {
		$($images[i]).fadeOut(time);
		i--;
		if (i < 0) {
			i = $images.length - 1;
			$($images[i]).fadeIn(time);
		}
		$($images[i]).fadeIn(time);
	}

	$next_btn.addEventListener('click', nextSlide);
	$prev_btn.addEventListener('click', prevSlide);
};
var checkWidthForSlider = function () {
	var width = $(window).width();
	if (width >= 991) {
		headerSlider();
	}
}();
// function headerSlider(){

// 	setInterval(nextSlider, 5000);

// 	function nextSlider(){
// 		const $img = $('.slider').find('img'),
// 			$current_img = $('.current'),
// 			current_img_index = $current_img.index(),
// 			next_img_index = current_img_index + 1,
// 			next_img = $img.eq(next_img_index); 

// 		function slideDisappear(){
// 			$current_img.fadeOut(1000);
// 			$current_img.removeClass('current');		
// 			slideAppear();
// 		}
// 		function slideAppear(){
// 			if(next_img_index == $img.last().index() + 1){
// 				$img.first().fadeIn(1000);
// 				$img.first().addClass('current');
// 			}else{
// 				next_img.fadeIn(1000);
// 				next_img.addClass('current');
// 			}
// 		}
// 		slideDisappear();
// 		console.log(current_img_index);
// 	}
// 	function prevSlider(){
// 		const $img = $('.slider').find('img'),
// 			$current_img = $('.current'),
// 			current_img_index = $current_img.index(),
// 			prev_img_index = current_img_index - 1,
// 			prev_img = $img.eq(prev_img_index);

// 		$current_img.fadeOut(1000);
// 		$current_img.removeClass('current');
// 		prev_img.fadeIn(1000);
// 		prev_img.addClass('current');
// 	}
// 	document.getElementById("next").addEventListener('click', nextSlider, false);
// 	document.getElementById("prev").addEventListener('click', prevSlider, false);
// }
// headerSlider();

},{}],4:[function(require,module,exports){
'use strict';

document.addEventListener('DOMContentLoaded', function () {
	var reg = require('./registration.js'),
	    preloader = require('./preloader.js'),
	    custom_header = require('./custom_header.js'),
	    header_slider = require('./header_slider.js'),
	    carousel = require('./carousel.js');
});

},{"./carousel.js":1,"./custom_header.js":2,"./header_slider.js":3,"./preloader.js":5,"./registration.js":6}],5:[function(require,module,exports){
'use strict';

//Preloader
var preloadHandle = function () {
	var $images = document.images,
	    total_images_count = $images.length,
	    loaded_images_count = 0,
	    $percent_display = $('.loader_perc'),
	    $preloader = $('.preloader');

	for (var i = 0; i < total_images_count; i++) {
		var image_clone = new Image();
		image_clone.onload = image_loaded;
		image_clone.onerror = image_loaded;
		image_clone.src = $images[i].src;
	}
	function image_loaded() {
		loaded_images_count++;
		var percent_display_count = (100 / total_images_count * loaded_images_count << 0) + '%';
		$percent_display.html(percent_display_count);

		if (loaded_images_count >= total_images_count) {
			setTimeout(function () {
				if (!$preloader.hasClass('done')) {
					$preloader.addClass('done');
				}
			}, 1000);
		}
	}
}();

},{}],6:[function(require,module,exports){
'use strict';

// Registration 
var registration = function () {
	function User(f, l) {
		this.f = f;
		this.l = l;
		this.print = function () {
			console.log(this.l + ' ' + this.f);
		};
	}
	var user = new User('Ivan', 'Ivanov');
	var print = user.print;
	// function customBind(fn, context, ...args){
	// 	return function(){
	// 		fn.apply(context, args);
	// 	}
	// }
	// customBind(print, user, [])();
	// let newprint = print.bind(user);
	// newprint()
	print.call(user);
}();

},{}]},{},[4])

//# sourceMappingURL=bundle.js.map
