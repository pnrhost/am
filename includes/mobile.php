<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emoreno911/pen/vyJvpB?limit=all&page=50&q=contact+" />

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Nunito:700'><link rel='stylesheet prefetch' href='https://dl.dropbox.com/s/tb1hmq8sr5gh1mu/flaticon.css'>
<style class="cp-pen-styles">.slider {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.slider__slides {
  position: relative;
  width: 300%;
  height: 100%;
  -webkit-transition: -webkit-transform 0.6s cubic-bezier(0.51, 0.92, 0.24, 1);
  transition: -webkit-transform 0.6s cubic-bezier(0.51, 0.92, 0.24, 1);
  transition: transform 0.6s cubic-bezier(0.51, 0.92, 0.24, 1);
  transition: transform 0.6s cubic-bezier(0.51, 0.92, 0.24, 1), -webkit-transform 0.6s cubic-bezier(0.51, 0.92, 0.24, 1);
  will-change: transform;
}

.slider__slide {
  float: left;
  width: 33.33333%;
  height: 100%;
}
.slider__dots {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  bottom: 1.5em;
  left: 50%;
  top: 70px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
.slider__dot, .slider__indicator {
  display: block;
  margin: 0 0.5em;
  width: 0.5em;
  height: 0.5em;
  background: rgba(255, 255, 255, 0.5);
  border-radius: 100px;
}
.slider__indicator {
  position: absolute;
  background: white;
  /*width: auto;*/
}
.slider__indicator--left {
  -webkit-transition: left 0.6s cubic-bezier(0.51, 0.92, 0.24, 1.15), right 0.6s 0.1s cubic-bezier(0.51, 0.92, 0.24, 1.15);
  transition: left 0.6s cubic-bezier(0.51, 0.92, 0.24, 1.15), right 0.6s 0.1s cubic-bezier(0.51, 0.92, 0.24, 1.15);
}
.slider__indicator--right {
  -webkit-transition: left 0.6s 0.1s cubic-bezier(0.51, 0.92, 0.24, 1.15), right 0.6s cubic-bezier(0.51, 0.92, 0.24, 1.15);
  transition: left 0.6s 0.1s cubic-bezier(0.51, 0.92, 0.24, 1.15), right 0.6s cubic-bezier(0.51, 0.92, 0.24, 1.15);
}

.content[data-pos="0"] .slider__slides {
  -webkit-transform: translateX(0%);
          transform: translateX(0%);
}
.content[data-pos="1"] .slider__slides {
  -webkit-transform: translateX(-33.33333%);
          transform: translateX(-33.33333%);
}
.content[data-pos="2"] .slider__slides {
  -webkit-transform: translateX(-66.66667%);
          transform: translateX(-66.66667%);
}

.content[data-pos="0"] .slider__indicator {
  left: 0em;
  right: 4em;
}
.content[data-pos="1"] .slider__indicator {
  left: 1.5em;
  right: 2em;
}
.content[data-pos="2"] .slider__indicator {
  left: 3em;
  right: 0em;
}

.content[data-pos="0"] .slider__slide:nth-child(1) .picture span {
  left: -160px;
}
.content[data-pos="1"] .slider__slide:nth-child(2) .picture span {
  left: -140px;
}
.content[data-pos="2"] .slider__slide:nth-child(3) .picture span {
  left: -85px;
}

.content[data-pos="0"] .slider__slide:nth-child(1) .buttons {
  display: block;
}
.content[data-pos="1"] .slider__slide:nth-child(2) .buttons {
  display: block;
}
.content[data-pos="2"] .slider__slide:nth-child(3) .buttons {
  display: block;
}

.content[data-pos="0"] .slider__slide:nth-child(1) .dropdown {
  display: block;
}
.content[data-pos="1"] .slider__slide:nth-child(2) .dropdown {
  display: block;
}
.content[data-pos="2"] .slider__slide:nth-child(3) .dropdown {
  display: block;
}

.content[data-pos="0"] > div {
  background-color: rgba(255, 87, 34,.65);
}
.content[data-pos="1"] > div {
  background-color: rgba(13,148,20,.4);
}
.content[data-pos="2"] > div {
  background-color: rgba(209,27,27,.65);
}

body {
  font-family: 'Open Sans', sans-serif;
  overflow-x: hidden;
  background-color: #f3f3f3;
}

.wrapper {
  background-color: #f8f8f8;
  display: flex;
  max-height: 736px;
  height: 736px;
  width: 414px;
  margin: 10px auto;
  /*border: solid 2px #aaa;*/
  box-shadow: 0px 2px 15px #ddd;
  border-radius: 3px;
}

.sidebar {
  max-height: 736px;
  height: 736px;
  width: 250px;
  position: absolute;
  padding: 0 10px;
}

.sidebar .brand {
  font-family: 'Nunito', sans-serif;
  font-weight: 900;
  font-size: 3.5em;
  /*http://www.cssmatic.com/es/gradient-generator*/
  background: linear-gradient(to right, 
    rgba(209,27,27,1) 0%, 
    rgba(209,27,27,1) 1%, 
    rgba(248,80,50,1) 20%, 
    rgba(13,148,20,1) 50%, 
    rgba(230,202,60,1) 77%, 
    rgba(230,143,12,1) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

  position: absolute;
  top: 10px;
  left: 30px;
}

.sidebar .menu { 
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center; 
}

.sidebar .menu ul {
  padding-left: 0;
}

.sidebar .menu .glyph-icon {
  font-weight: 700;
  margin-right: 20px;
  vertical-align: middle;
}

.sidebar .menu .flaticon-mail {
  font-weight: 400;
}

.sidebar ul li {
  color: #777;
  line-height: 3;
  list-style: none;
  font-family: 'Montserrat', sans-serif;
}

.content {
  flex: 1;
  transform: translateX(0) scale(1);
  animation: shrink-off .4s ease-out;
  background: linear-gradient(to right, #666 0%, #FFEB3B 100%);
}

.content.shrink {
  box-shadow: -2px 2px 20px #ddd;
  transform: translateX(250px) scale(.95);
  animation: shrink-on .4s ease-out;
}

.content > div { 
  position: relative;
  transition: background-color 0.8s ease; 
}

.content #openMenu { 
  cursor: pointer; 
  position: absolute;
  top: 10px;
  left: 10px;
}

.content #openMenu > div { 
  width: 20px; 
  border: solid #fff 1px;
  margin-bottom: 5px; 
}

.content #openMenu > div:nth-child(2) { width: 15px; }

.content #shoppingIcon {
  color: #fff;
  position: absolute;
  top: 10px;
  right: -10px;
  transform: rotateY(180deg);
}

.content .flaticon-cart:before { font-size: 24px }

.content #shoppingIcon span {
  color: #fff;
  background-color: red;
  padding: 1px 6px;
  border-radius: 50px;
  font-size: 12px;
  font-weight: 600;
  position: absolute;
  left: 35px;
  top: -4px;
  transform: rotateY(180deg);
}

.content .header {
  color: #fff;
  height: 100px;
  text-align: center;
  padding-top: 5px;
  letter-spacing: 1;
}

.content .header h3 {
  margin: 0;
  margin-bottom: 3px;
  font-weight: 100;
}

.content .triangle {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 100px 414px 0 0;
  border-color: transparent #fff transparent transparent;
  margin-top: -1px;
}

.content .product {
  height: 448px;
  width: 100%;
  background-color: #fff;
}

.slider { position: absolute; top: 100px; height: 554px; }
.picture { position: relative; margin: 0 15px; }
.picture img { height: 362px; margin-left: 70px; position: relative; }
.title { position: relative; color: #777; margin: 0 15px; }
.title h3 { margin-bottom: 5px; font-family: 'Montserrat', sans-serif; letter-spacing: 1; }
.title span { color: green; font-weight: bold; margin-right: 5px; }
.description { color: #999; margin: 15px 15px; font-size: 14px; }
.picture span { 
  position: absolute;
    top: 160px;
    left: -20px;
    font-size: 10em;
    color: #ededed;
    font-family: "Montserrat", sans-serif;
    font-weight: 900;
    letter-spacing: 4;
    text-transform: uppercase;
    transition: all .8s ease-in-out;
}
.buttons {
  display: none;
  position: absolute;
    top: 70px;
    right: 20px;
    animation: scale-up .8s ease;
}
.buttons > div {
  margin-bottom: 30px;
    border: solid 2px #ddd;
    padding: 10px 12px 10px 10px;
    border-radius: 50px;
    cursor: pointer;
}
.buttons > div:before { 
  font-size: 25px;
    font-weight: 600;
    color: #888;
    margin-left: 0;
    transition: color .6s ease-out;
}

.buttons > div:nth-child(1).selected { border-color: #F44336; }
.buttons > div:nth-child(1).selected:before { color: #F44336; }
.buttons > div:nth-child(2).selected { border-color: #2196F3; }
.buttons > div:nth-child(2).selected:before { color: #2196F3; }

.content .price {
  height: 80px;
  width: 100%;
  background-color: #fff;
  border-top: solid #ddd 4px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.content .price > div {
  margin: 0 20px;
}

.content .price span {
  font-size: 30px;
  color: #00BC34;
}

.content .price a {
  font-size: 20px;
  background-color: #00BC34;
  color: #fff;
  text-decoration: none;
  padding: 8px 35px;
  border-radius: 50px;
}

.content .price a:hover { background-color: #00a52e; }

.no-animation {
  animation: none !important;
}

@keyframes shrink-on {
  0% {
    transform: translateX(0) scale(1);
  }
  70% {
    transform: translateX(250px) scale(.9);
  }
  100% {
    transform: translateX(250px) scale(.95);
  }
}

@keyframes shrink-off {
  0% {
    transform: translateX(250px) scale(.95);
  }
  70% {
    transform: translateX(-10px) scale(1.05);
  }
  100% {
    transform: translateX(0) scale(1);
  }
}

@keyframes scale-up {
  0% {
    transform: scale(0);
  }
  70% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}


.slider .dropdown { 
  position: absolute; 
  top: 0; 
  right: 20px; 
  font-family: "Montserrat", sans-serif; 
  animation: scale-up .8s ease;
}
/** Dropdown **/
.dropdown {
  display: none;
  position: relative;
  width: 100px;
  color: #fff;
  transform-style: preserve-3d;
  perspective: 1500;
}
.dropdown.flip .front {
  transform: rotateX(180deg);
}
.dropdown.flip .back {
  transform: rotateX(0deg);
}
.dropdown .front,
.dropdown .back {
  transition: all 0.4s ease;
}
.dropdown .front {
  height: 40px;
  width: 90px;
  backface-visibility: hidden;
  cursor: pointer;
  border: solid 2px #ddd;
  border-radius: 50px;
  line-height: 40px;
  text-align: center;
  color: #888;
  margin-left: 5px;
}
.dropdown .front:after {
  content: "";
  position: relative;
  top: 15px;
  left: 4px;
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #888;
}
.dropdown .back {
  transform: rotateX(180deg);
  backface-visibility: hidden;
}
.dropdown ul {
  position: absolute;
  top: -120px;
  z-index: 1;
  width: calc(100% - 40px);
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.25);
  list-style: none;
  border-radius: 3px;
}
.dropdown ul li {
  color: #888;
  line-height: 30px;
  cursor: pointer;
}

</style></head><body>
<div class="wrapper">
      <div class="sidebar">
        <div class="brand">JUUCE</div>
        <div class="menu">
          <ul>
            <li><i class="glyph-icon flaticon-user"></i> Profile</li>
            <li><i class="glyph-icon flaticon-like"></i> Wish list</li>
            <li><i class="glyph-icon flaticon-like-1"></i> Why buy juuce?</li>
            <li><i class="glyph-icon flaticon-vision"></i> About us</li>
            <li><i class="glyph-icon flaticon-mail"></i> Contact us</li>
            <li><i class="glyph-icon flaticon-info"></i> FAQ</li>
          </ul>
        </div>
      </div>

      <div class="content no-animation" data-pos="0">
        <div>

          <div id="openMenu">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <div id="shoppingIcon">
            <span>4</span>
            <i class="glyph-icon flaticon-cart"></i>
          </div>
          <div class="header">
            <h3>Cold pressed juices</h3>
            <small>shop category</small>
          </div>
          <div class="triangle"></div>
          
          <div class="product">
            <div class="slider__dots">
              <a href="#" class="slider__dot" data-pos="0"></a>
              <a href="#" class="slider__dot" data-pos="1"></a>
              <a href="#" class="slider__dot" data-pos="2"></a>
              <a href="#" class="slider__indicator"></a>
            </div>
          </div>
          
          <div class="price">
            <div><span>€ 3.00</span></div>
            <div><a href="#">Add to cart</a></div>  
          </div>

          <div class="slider" data-pos="0">
            <div class="slider__slides">

              <div class="slider__slide">
                <div class="picture">
                  <span>ster</span><img src="https://github.com/emoreno911/UI-to-Code/blob/master/juuce_app/img/bottle3x.png?raw=true">
                  <div class="buttons">
                    <div class="glyph-icon flaticon-like"></div>
                    <div class="glyph-icon flaticon-arrows"></div>
                    <div class="glyph-icon flaticon-share"></div>
                  </div>
                </div>
                <div class="title">
                  <h3>Booster</h3><small><span>✔</span> In Stock</small>
                  <div class="dropdown">
                    <div class="front"> 250 ml </div>
                    <div class="back"> 
                      <ul>
                        <li>250 ml</li>
                        <li>500 ml</li>
                        <li>1 lt</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
              </div>
              <div class="slider__slide">
                <div class="picture">
                  <span>Fuel</span> <img src="https://github.com/emoreno911/UI-to-Code/blob/master/juuce_app/img/bottle2x.png?raw=true">
                  <div class="buttons">
                    <div class="glyph-icon flaticon-like"></div>
                    <div class="glyph-icon flaticon-arrows"></div>
                    <div class="glyph-icon flaticon-share"></div>
                  </div>
                </div>
                <div class="title">
                  <h3>Rocket Fuel</h3><small><span>✔</span> In Stock</small>
                  <div class="dropdown">
                    <div class="front"> 250 ml </div>
                    <div class="back"> 
                      <ul>
                        <li>250 ml</li>
                        <li>500 ml</li>
                        <li>1 lt</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
              </div>
              <div class="slider__slide">
                <div class="picture">
                  <span>Red</span><img src="https://github.com/emoreno911/UI-to-Code/blob/master/juuce_app/img/bottle1x.png?raw=true">
                  <div class="buttons">
                    <div class="glyph-icon flaticon-like"></div>
                    <div class="glyph-icon flaticon-arrows"></div>
                    <div class="glyph-icon flaticon-share"></div>
                  </div>
                </div>
                <div class="title">
                  <h3>Big Red</h3><small><span>✔</span> In Stock</small>
                  <div class="dropdown">
                    <div class="front"> 250 ml </div>
                    <div class="back"> 
                      <ul>
                        <li>250 ml</li>
                        <li>500 ml</li>
                        <li>1 lt</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</div>
              </div>

            </div>
          </div>

        </div>
      </div>
      
    </div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdn.jsdelivr.net/domtastic/0.12/domtastic.min.js'></script><script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script >/** https://github.com/emoreno911/UI-to-Code/tree/master/juuce_app **/
'use strict';

var dots = 3;
var contentElem = document.querySelector('.content');
var dotElems = document.querySelectorAll('.slider__dot');
var indicatorElem = document.querySelector('.slider__indicator');
Array.prototype.forEach.call(dotElems, function (dotElem) {
    dotElem.addEventListener('click', function (e) {
        var currentPos = parseInt(contentElem.getAttribute('data-pos'));
        var newPos = parseInt(dotElem.getAttribute('data-pos'));
        var newDirection = newPos > currentPos ? 'right' : 'left';
        var currentDirection = newPos < currentPos ? 'right' : 'left';
        indicatorElem.classList.remove('slider__indicator--' + currentDirection);
        indicatorElem.classList.add('slider__indicator--' + newDirection);
        contentElem.setAttribute('data-pos', newPos);
    });
});

// Hammer.js for touch gestures
var hammertime = new Hammer(contentElem);

// listen to touch events...
hammertime.on("swipeleft swiperight", function(evt) {
    var currentPos = parseInt(contentElem.getAttribute('data-pos')),
        newPos;
    
    if(evt.type == 'swipeleft')
        newPos = (currentPos + 1 > 2)? currentPos : currentPos + 1; 
    else if (evt.type == 'swiperight')
        newPos = (currentPos - 1 < 0)? currentPos : currentPos - 1;

    if(newPos != currentPos) {
        var newDirection = newPos > currentPos ? 'right' : 'left';
        var currentDirection = newPos < currentPos ? 'right' : 'left';
        indicatorElem.classList.remove('slider__indicator--' + currentDirection);
        indicatorElem.classList.add('slider__indicator--' + newDirection);
        contentElem.setAttribute('data-pos', newPos);
    }
});

/** Events **/
$('#openMenu').on('click', function(evt) {
	$('.content')
		.removeClass('no-animation') //disable initial animation
		.toggleClass('shrink');
});

$('.buttons > div').on('click', function(evt) {
	$(this).toggleClass('selected');
});


$(".dropdown").on("click", function(){
  $(this).toggleClass("flip");
})

$(".back ul li").on("click", function(){
    var val = $(this).text();
  $(this).closest('.dropdown').find('.front').text(val);
});
//# sourceURL=pen.js
</script>
</body></html>