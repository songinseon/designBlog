<?php
$title = "home";
$pageCode = "home";
?>

<?php 
require_once "head.php";
?>

<style>
  header {
    background-color: ;
    position: fixed;
    z-index: 50;
    top: 0;
    align-self: center;
  }
</style>

<div id="fullpage">
  <section class="section h-screen" data-anchor="section-1">
    <div class="container mx-auto flex justify-center h-full">

      <div class="wrapper flex self-center absolute">
        <div class="circle1"></div>
      </div>

      <div class="m-sprout flex self-center absolute">
        <img src="./img/main-sprout.png" alt="">
      </div>

      <div class="m-text2 relative flex self-end h-full items-end w-2/4">
        <a href="pf.ssg.php" class="flex flex-col text-xl ml-28 mb-32 font-bold">
          <div>VIEW</div>
          <div>PORTFOLIO</div>
        </a>
        <ul class="-ml-20 mb-24">
          <li>PUBLISHING</li>
        </ul>
        <ul class="flex -ml-20 mb-16">
          <li class="mr-6 ml-1">UI/UX</li>
          <li class="">WEB</li>
        </ul>
      </div>

      <div class="h-4/6 w-2/4 mr-12 flex flex-col items-end self-end justify-between">
        <div class="m-text1 self-end flex flex-col mr-28">
          <div class="text-4xl whitespace-nowrap">
            <div>싹을 틔우는</div>
            <div>햇살같은</div>
            <div>디자이너,</div>
          </div>
          <div class="text-3xl mt-5 ml-5">송 인 선</div>
          <div class="text-4xl mt-6 ml-14">입니다.</div>
        </div>

        <div class="m-text3 flex flex-col items-end mr-14 text-xl mb-16 font-bold">
          <div>VIEW</div>
          <div>ABOUT ME</div>
        </div>
      </div>
    </div>
  </section>


  <section class="section" data-anchor="section-2">
    <div class="flex justify-center w-full">

    </div>
  </section>


  <section class="section" data-anchor="section-3">
    <div class="flex justify-center">
      <img src="./img/INTRODUCE.png" alt="">
    </div>
  </section>
</div>
</div>



</div>

</body>

</html>