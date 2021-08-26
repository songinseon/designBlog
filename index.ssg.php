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
  <section class="h-screen section" data-anchor="section-1">
    <div class="container flex justify-center h-full mx-auto">

      <div class="absolute flex self-center wrapper">
        <div class="circle1"></div>
      </div>

      <div class="absolute flex self-center m-sprout">
        <img src="./img/main-sprout.png" alt="">
      </div>

      <div class="relative flex items-end self-end w-2/4 h-full m-text2">
        <a href="pf.ssg.php" class="relative flex flex-col mb-32 text-xl main-prtext ml-28">
          <div>VIEW</div>
          <div>PORTFOLIO</div>
          <div class="absolute main-prarrow">
            <img src="./img/arrow-r.png" alt="">
          </div>
        </a>
        <ul class="mb-24 -ml-20">
          <li>PUBLISHING</li>
        </ul>
        <ul class="flex mb-16 -ml-20">
          <li class="ml-1 mr-8">UI/UX</li>
          <li class="">WEB</li>
        </ul>
      </div>

      <div class="flex flex-col items-end self-end justify-between w-2/4 mr-12 h-4/6">
        <div class="flex flex-col self-end m-text1 mr-28">
          <div class="text-4xl whitespace-nowrap">
            <div>싹을 틔우는</div>
            <div>햇살같은</div>
            <div>디자이너,</div>
          </div>
          <div class="mt-5 ml-5 text-3xl">송 인 선</div>
          <div class="mt-6 text-4xl ml-14">입니다.</div>
        </div>

        <a href="#section-2" class="relative flex flex-col items-end mb-16 mr-20 text-xl main-metext m-text3">
          <div>VIEW</div>
          <div>ABOUT ME</div>
          <div class="absolute ml-2 main-mearrow">
            <img src="./img/arrow-r.png" alt="">
          </div>
        </a>
      </div>
    </div>
  </section>


  <section class="h-screen section" data-anchor="section-2">
    <div class="container flex items-end justify-center h-full mx-auto">

      <div class="w-2/4 m2-text1 h-5/6 whitespace-nowrap">
        <div class="flex items-center justify-center w-full mt-10 text-4xl h-1/5">
          <div>
            <div class="mb-5">신입</div>
            <div>웹디자이너</div>
          </div>
          <div class="ml-10 text-3xl m2-text1-name ani mt-14">송 인 선</div>
          <div class="ml-10 mt-14">입니다.</div>
        </div>

        <div class="w-full ml-6 m2-text3 h-4/5">
          <div class="flex flex-col items-center w-full h-1/4">
            <div class="mt-12 m2-text3-info"><img src="./img/me-information.png" alt=""></div>

            <div class="flex justify-center mt-12">
              <div class="flex">NAME<div class="ml-8" style="font-family: 'MapoFlowerIsland';">송 인 선</div>
              </div>
              <div class="flex ml-48">E-MAIL<div class="ml-8">songsun95@naver.com</div>
              </div>
            </div>
          </div>

          <div class="flex flex-col items-center w-full mt-8 m2-text3-character h-3/4">
            <div class="ml-24"><img src="./img/me-character.png" alt=""></div>

            <div class="flex items-center w-full ml-56">
              <div class="ml-2 mr-12 text-black">
                <div class="my-9">PASSION</div>
                <div class="my-9">SINCERITY</div>
                <div class="my-9">CHALLENGE</div>
                <div class="my-9">SENSITIVITY</div>
                <div class="my-9">CURIOSITY</div>
              </div>

              <div class="w-full">
                <div class="my-9 m2-text3-chart1"></div>
                <div class="my-9 m2-text3-chart2"></div>
                <div class="my-9 m2-text3-chart3"></div>
                <div class="my-9 m2-text3-chart4"></div>
                <div class="my-9 m2-text3-chart7"></div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col justify-center w-2/4 m2-text2 h-5/6">
        <div class="flex justify-center w-full mt-10 h-1/5">
          <div class="flex flex-col justify-center w-4/6 h-full text-2xl whitespace-nowrap">
            <ul class="m2-text2-list">
              <li>싹을 틔울 수 있는</li>
              <li>열정을 태울 수 있는</li>
            </ul>
            <div class="flex my-4">저는<div class="ml-2 m2-text2-sun">햇살</div>같은 디자이너입니다.</div>
          </div>
          <div class="w-2/6 h-full m2-sun">
            <img src="./img/main-sun.png" alt="">
          </div>
        </div>

        <div class="flex flex-col w-full h-4/5">
          <div class="flex flex-col w-full mt-2">
            <div class="flex self-center mt-12 mr-12 m2-text3-skill"><img src="./img/me-skill.png" alt=""></div>
            <div class="flex w-full ml-20">
              <div class="mr-12 text-black" style="font-family: 'Anaheim', sans-serif;">
                <div class="my-9">PHOTOSHOP</div>
                <div class="my-9">ILLUSTRATER</div>
                <div class="my-9">FIGMA</div>
                <div class="my-9">HTML/CSS</div>
                <div class="my-9">JQUERY</div>
              </div>
              <div class="w-full">
                <div class="my-9 m2-text3-chart5"></div>
                <div class="my-9 m2-text3-chart6"></div>
                <div class="my-9 m2-text3-chart3"></div>
                <div class="my-9 m2-text3-chart7"></div>
                <div class="my-9 m2-text3-chart8"></div>
              </div>

            </div>
          </div>

          <div class="flex flex-col items-center w-full mt-3 h-1/4">
            <div class="mr-12 me-like1"><img src="./img/me-like.png" alt=""></div>
            <div class="mt-6 mr-12 me-like2"><img src="./img/me-like1.png" alt=""></div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section class="h-screen section" data-anchor="section-3">
    <div class="container flex items-end justify-center h-full mx-auto">
      <div class="flex flex-col items-center w-full h-5/6">
        <div class="w-11/12 h-2/4">
          <div class="flex flex-col items-center text-3xl h-1/5">
            <div class="mt-5 m3-text1">디자인 기술</div>
            <div class="m3-stroke"></div>
          </div>

          <div class="flex items-center justify-around h-4/5">
            <div class="flex items-center justify-center m3-card m3-card-1">
              <img class="" src="./img/m3-illustrater.png" alt="">
              <div class="w-full h-full text-center flex-wrapper">
                로고, 포스터제작<br>
                일러스트 작업 등
                <div class="z-50 single-chart m3-card-circle">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <path class="circle" stroke-dasharray="70, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <text x="18" y="20.35" class="percentage">70%</text>
                  </svg>
                </div>
              </div>
            </div>


            <div class="flex items-center justify-center m3-card m3-card-2">
              <img src="./img/m3-photoshop.png" alt="">
              <div class="w-full h-full text-center flex-wrapper">
                로고, 포스터제작<br>
                포토샵 작업 등
                <div class="z-50 single-chart m3-card-circle">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <path class="circle" stroke-dasharray="70, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <text x="18" y="20.35" class="percentage">70%</text>
                  </svg>
                </div>
              </div>
            </div>



            <div class="flex items-center justify-center m3-card m3-card-3">
              <img src="./img/m3-figma.png" alt="">
              <div class="w-full h-full text-center flex-wrapper">
                웹사이트 UI/UX 디자인<br>
                컴포넌트, 오토레이아웃을<br>
                활용한 작업
                <div class="z-50 single-chart m3-card-circle">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <path class="circle" stroke-dasharray="80, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <text x="18" y="20.35" class="percentage">80%</text>
                  </svg>
                </div>
              </div>
            </div>


            <div class="flex items-center justify-center m3-card m3-card-4">
              <img src="./img/m3-visual.png" alt="">
              <div class="w-full h-full text-center flex-wrapper">
                웹사이트 코딩<br>
                프로세스 페이지 코딩
                <div class="z-50 single-chart m3-card-circle">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <path class="circle" stroke-dasharray="65, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <text x="18" y="20.35" class="percentage">65%</text>
                  </svg>
                </div>
              </div>
            </div>


            <div class="flex items-center justify-center m3-card m3-card-5">
              <img src="./img/m3-jquery.png" alt="">
              <div class="w-full h-full text-center flex-wrapper">
                간단한 작업을 통한<br>
                애니메이션 효과
                <div class="z-50 single-chart m3-card-circle">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
                    <path class="circle-bg" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                    <text x="18" y="20.35" class="percentage">60%</text>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="w-11/12 h-2/4">
          <div class="flex flex-col items-center text-3xl h-1/5">
            <div class="mt-5 m3-text2">나의 강점</div>
            <div class="m3-stroke"></div>
          </div>

          <div class="flex items-center justify-around h-4/5">
            <div class="flex items-center justify-center m3-card2 m3-card2-1">
              <img src="./img/m3-clock.png" alt="">
            </div>
            <div class="flex items-center justify-center m3-card2 m3-card2-2">
              <img src="./img/m3-thoughful.png" alt="">
            </div>
            <div class="flex items-center justify-center m3-card2 m3-card2-3">
              <img src="./img/m3-potential.png" alt="">
            </div>
            <div class="flex items-center justify-center m3-card2 m3-card2-4">
              <img src="./img/m3-passion.png" alt="">
            </div>
          </div>
        </div>
      </div>
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