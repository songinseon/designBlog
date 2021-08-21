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
    @font-face {
      font-family: 'MapoFlowerIsland';
      src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/MapoFlowerIslandA.woff') format('woff');
      font-weight: normal;
      font-style: normal;
    }

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
    border-bottom: 0.1px solid lightgray;
    box-shadow: 5px 5px 5px lightgray;

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

  <div class="flex justify-center w-full mt-24">
    <img src="./img/portfoliotitle.png" alt="">
  </div>

  <section class="relative mt-24 pf-slider">

    <div class="absolute swiper-button-next">
      <img src="./img/arrowright.png" alt="">
    </div>

    <div class="container h-screen mx-auto swiper-container mySwiper max-w-7xl">
      <div class="swiper-wrapper">

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-lg font-light">예스24 티켓 사이트 리디자인</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-lg font-light ">기획 100%, 디자인 100%</div>
              </div>
            </div>
            <img src="./img/pf-1.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">사이트 DESIGN</div>
            <a class="my-2 text-base" href="">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-lg font-light">일기APP '데이브러쉬' UI/UX</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-lg font-light ">기획 100%, 디자인 100%, 퍼블리싱100%</div>
              </div>
            </div>
            <img src="./img/pf-2.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">APP UI/UX</div>
            <a class="my-2 text-base" href="">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-lg font-light">블루콤 데시벨 퍼블리싱</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-lg font-light ">PUBLISHING 100%</div>
              </div>
            </div>
            <img src="./img/pf-3.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">웹사이트 PUBLISHING</div>
            <a class="my-2 text-base" href="">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-lg font-light">개인블로그 디자인</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-lg font-light ">기획100%, 디자인 100%, 퍼블리싱 100%</div>
              </div>
            </div>
            <img src="./img/pf-4.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">블로그 PROCESS</div>
            <a class="my-2 text-base" href="">VIEW MORE</a>
          </div>
        </div>

        <div class="flex flex-col swiper-slide">
          <div>
            <div class="bg"></div>
            <div class="text-white addi whitespace-nowrap">
              <div>
                <div class="text-2xl">PROJECT</div>
                <div class="my-2 text-lg font-light">빽다방사이트 퍼블리싱</div>
              </div>
              <div class="my-5">
                <div class="text-2xl">PARTICIPATION</div>
                <div class="my-2 text-lg font-light ">퍼블리싱 100%</div>
              </div>
            </div>
            <img src="./img/pf-5.png" alt="">
          </div>
          <div class="my-8">
            <div class="text-2xl">웹사이트 PUBLISHING</div>
            <a class="my-2 text-base" href="">VIEW MORE</a>
          </div>
        </div>
      </div>
    </div>

    <div class="absolute swiper-button-prev">
      <img src="./img/arrowleft.png" alt="">
    </div>

</div>


</section>

</div>

</body>

</html>