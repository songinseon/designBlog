<?php 
$title="portfolio";
$pageCode="pf";
?>

<?php 
require_once "head.php";
?>

<style>
  html,
  body {
    position: relative;
    height: 100%;
  }

  body {
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
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
    border: 0.1px solid gray;

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

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>

<div>

<div class="flex w-full justify-center mt-24">
  <img src="./img/portfoliotitle.png" alt="">
</div>

<section class="pf-slider mt-16">

  <div class="swiper-button-next">
    <img src="./img/arrowright.png" alt="">
  </div>

  <div class="swiper-container mySwiper container mx-auto max-w-7xl">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
  </div>

  <div class="swiper-button-prev">
    <img src="./img/arrowleft.png" alt="">
  </div>

  </div>


</section>

</div>

</body>

</html>