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
        <a href="pf.ssg.php" class="main-prtext flex flex-col text-xl ml-28 mb-32 relative">
          <div>VIEW</div>
          <div>PORTFOLIO</div>
          <div class="main-prarrow absolute">
            <img src="./img/arrow-r.png" alt="">
          </div>
        </a>
        <ul class="-ml-20 mb-24">
          <li>PUBLISHING</li>
        </ul>
        <ul class="flex -ml-20 mb-16">
          <li class="mr-8 ml-1">UI/UX</li>
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

        <a href="#section-2" class="relative main-metext m-text3 flex flex-col items-end mr-20 text-xl mb-16">
          <div>VIEW</div>
          <div>ABOUT ME</div>
          <div class="main-mearrow absolute ml-2">
            <img src="./img/arrow-r.png" alt="">
          </div>
        </a>
      </div>
    </div>
  </section>


  <section class="section h-screen" data-anchor="section-2">
    <div class="flex justify-center h-full items-end container mx-auto">

      <div class="m2-text1 w-2/4 h-5/6 whitespace-nowrap">
        <div class="flex text-3xl items-center justify-center h-1/5 w-full">
          <div>
            <div class="mb-5">신입</div>
            <div>웹디자이너</div>
          </div>
          <div class="m2-text1-name ani mt-12 ml-10">송 인 선</div>
          <div class="mt-12 ml-10">입니다.</div>
        </div>

        <div class="h-4/5 w-full"></div>
      </div>

      <div class="m2-text2 w-2/4 h-5/6">
        <div class="flex items-center justify-center h-1/5 w-full">
          <div class="w-4/6 text-xl mt-7 h-full flex flex-col justify-center whitespace-nowrap">
          <ul class="ml-28 m2-text2-list">
            <li>싹을 틔울 수 있는</li>
            <li>열정을 태울 수 있는</li>
          </ul>
          <div class="ml-28 mt-7 flex">저는<div class="ml-2 m2-text2-sun">햇살</div>같은 디자이너입니다.</div>
          </div>
          <div class="m2-sun w-2/6 h-full mr-28">
            <img src="./img/main-sun.png" alt="">
          </div>
        </div>

        <div class="flex items-center justify-center h-4/5 w-full"></div>
      </div>

    </div>
  </section>


  <section class="section" data-anchor="section-3">
    <div class="flex justify-center">
    </div>
  </section>


  <section class="section" data-anchor="section-4">
    <div class="flex justify-center">
    </div>
  </section>


</div>
</div>



</div>

</body>

</html>