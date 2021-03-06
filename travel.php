<?php
include "includes/travel-header.php";
?>

<style type="text/css">
  #Header {
    background: #43abef;
}

#Header .container {
    margin: 0 auto;
    max-width: 60em;
}

@media screen and (min-width: 60em)
#Nav ul {
    margin-left: 0;
    margin: 0 20px 0 0;
}

#Nav ul {
    margin: 0 10px 0 10px;
    padding: 10px 0;
}

@media screen and (min-width: 60em)
#Nav ul li#MenuAccount {
    margin-right: -20px;
}
#Nav ul li#MenuAccount {
    margin-right: -10px;
    position: relative;
}
#Nav ul li#MenuFavourites, #Nav ul li#MenuAccount, #Nav ul li#MenuListYourPlace, #Nav ul li#MenuImpersonate {
    float: right;
    padding: 12px 0 10px 0;
}
#Nav ul li {
    display: inline-block;
    font-size: 14px;
    float: left;
}
div.roomsRatesCalendar ul, li {
    list-style: none;
    margin: 0;
    padding: 0;
}

#Nav ul li#MenuAccount #MenuItems {
    display: none;
    position: absolute;
    z-index: 60;
    background: #fff;
    right: 0;
    top: 40px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,.1), 0 6px 20px 0 rgba(0,0,0,.1);
    min-width: 295px;
    overflow: hidden;
    cursor: default;
}

#Nav ul li#MenuAccount #MenuItems ul {
    margin-right: 10px;
}

#Nav ul li#MenuAccount #MenuItems ul {
    margin-left: 0;
    padding: 10px;
    overflow: hidden;
}
@media screen and (min-width: 60em)
#Nav ul {
    margin-left: 0;
    margin: 0 20px 0 0;
}
#Nav ul {
    margin: 0 10px 0 10px;
    padding: 10px 0;
}

#Nav ul li#MenuAccount #MenuItems ul li {
    padding: 10px;
    width: 100%;
}

#Nav ul li {
    display: inline-block;
    font-size: 14px;
    float: left;
}
div.roomsRatesCalendar ul, li {
    list-style: none;
    margin: 0;
    padding: 0;
}

#Nav ul li#MenuAccount #MenuItems ul li a {
    display: block;
    padding: 0;
    color: #43abef;
}
#Nav ul li#MenuFavourites a, #Nav ul li#MenuAccount a, #Nav ul li#MenuListYourPlace a, #Nav ul li#MenuImpersonate a {
    padding: 10px 15px 10px 10px;
}
#Nav ul li a {
    text-decoration: none;
    padding: 10px 10px 10px 0;
    color: #fff;
}
a {
    text-decoration: none;
    color: #43abef;
}

.l-pad-r-s {
    padding-right: .5em;
}

.darkGrey {
    color: #666;
}
.medium {
    font-size: 1.3em;
}
.medium {
    font-size: 1.3em;
}

#Nav ul li#MenuAccount #MenuItems ul li {
    padding: 10px;
    width: 100%;
}

#Nav ul li {
    display: inline-block;
    font-size: 14px;
    float: left;
}
div.roomsRatesCalendar ul, li {
    list-style: none;
    margin: 0;
    padding: 0;
}


</style>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="bundles/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
<div class="content_wrapper">
  <!-- Swiper -->
  <div class="panel">
  <h2 class="panel-header">
    Popular Places
  </h2>
</div>
  
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
      <div class="swiper-slide"><img src="http://placehold.it/308x300"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

  <!-- Swiper JS -->
  <script src="bundles/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
<div class="space-clear-10"></div>
<?php
include "includes/footer.html";
?>