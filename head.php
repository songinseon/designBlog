<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>

  <!-- 테일윈드 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.2/tailwind.min.css">
  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <!-- 스크롤 트리거 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <!-- 풀페이지 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">
  <!-- 라이트박스 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/index.css">
  <script src="./js/index.js" defer></script>


</head>

<body>

  <!-- 상단바 -->
  <div class="">

    <div class="wrap overflow-x-hidden flex flex-col justify-center items-center">
      <header class="container h-44 mx-auto top-bar flex justify-center">

        <div class="flex items-center justify-between h-full w-11/12">
          <!-- 로고 -->
          <a href="index.ssg.php" class="<?=$pageCode == "home" ? "at" : ""?> logo mr-32">
            <img src="./img/logo.png" alt="">
          </a>

          <!-- 상단 메뉴 -->
          <nav class="text-xl tracking-wider justify-around whitespace-nowrap">
            <a class="<?=$pageCode == "home" ? "at" : ""?>" href="index.ssg.php#section-2">ME</a>
            <a class="<?=$pageCode == "brand" ? "at" : ""?>" style="margin-left:108px;" href="brand.ssg.php">BRANDING</a>
            <a class="<?=$pageCode == "pf" ? "at" : ""?>" style="margin-left:108px;" href="pf.ssg.php">PORTFOLIO</a>
            <a class="<?=$pageCode == "process" ? "at" : ""?>" style="margin-left:108px;" href="process.ssg.php">PROCESS</a>
          </nav>

        </div>
      </header>