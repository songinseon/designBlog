$("body").niceScroll({
  scrollspeed: 5
});

function Fullpage__init() {
  new fullpage('#fullpage', {
    sectionsColor: ['white', 'white', 'white'],
    menu: "header .menu-box"
  });
}

Fullpage__init();

function sendEmailForm(form) {
  if ( form._replyto.value.length == 0 ) {
    alert('이메일 주소를 입력해주세요');
    form._replyto.focus();
    return;
  }
  
  if ( form.message.value.length == 0 ) {
    alert('메세지를 입력해주세요.');
    form.message.focus();
    return;
  }
  
  form.submit();
  
  form._replyto.value = '';
  form.message.value = '';
  form.submit1.innerHTML = '전송되었습니다.';
  form.submit1.disabled = true;
}

// 탑버튼
$(function() {
	$(window).scroll(function() { 
		if ($(this).scrollTop() > 300) { 
			$('#topBtn').fadeIn(); } 
		else { $('#topBtn').fadeOut(); }
	}); 
	$("#topBtn").click(function() { 
  $('html, body').animate({ scrollTop : 0  }, 300); 
    return false; });
});

// 포트폴리오 슬라이드
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 16,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


// 브랜드 첫화면
function Intro_AnimationInit() {
  $(document).ready(function () {
    $(".logo-write > img").fadeIn(1700);
  });
  $(document).ready(function () {
    $(".pr-desktop > img").fadeIn(1500);
  });
}



function Play_AnimationInit() {

  // 브랜드 커스텀
  gsap.fromTo('.logo-ex1', {
    opacity: 0,
    x: -20,
  }, {
    opacity: 1,
    x: 0,
    scrollTrigger: {
      trigger: '.BH-1',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1.1
  });

  gsap.fromTo('.logo-ex2', {
    opacity: 0,
    x: -20,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    delay: 0.3,
    scrollTrigger: {
      trigger: '.BH-1',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1.1
  });

  gsap.fromTo('.logo-ex3', {
    opacity: 0,
    x: -20,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    delay: 0.6,
    scrollTrigger: {
      trigger: '.BH-1',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1.1
  });

  gsap.fromTo('.logo-sun', {
    opacity: 0,
    y: 70,
  }, {
    opacity: 1,
    y: 0,
    scrollTrigger: {
      trigger: '.BH-2',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.logo-sprout', {
    opacity: 0,
    y: 70,
  }, {
    opacity: 1,
    y: 0,
    delay: 0.3,
    scrollTrigger: {
      trigger: '.BH-2',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.logo-name', {
    opacity: 0,
    y: 70,
  }, {
    opacity: 1,
    y: 0,
    delay: 0.6,
    scrollTrigger: {
      trigger: '.BH-2',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });


  gsap.fromTo('.logo-color2', {
    opacity: 0,
    x: -100,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    scrollTrigger: {
      trigger: '.BH-3',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.logo-color3', {
    opacity: 0,
    x: -100,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    delay: 0.3,
    scrollTrigger: {
      trigger: '.BH-3',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  // 프로세스페이지 커스텀

  gsap.fromTo('.pr-color2', {
    opacity: 0,
    x: -100,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    scrollTrigger: {
      trigger: '.pH-3',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.pr-color3', {
    opacity: 0,
    x: -100,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    delay: 0.5,
    scrollTrigger: {
      trigger: '.pH-3',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.pr-color4', {
    opacity: 0,
    x: -100,
  }, {
    opacity: 1,
    x: 0,
    duration: 1,
    delay: 1,
    scrollTrigger: {
      trigger: '.pH-3',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.pr-1', {
    opacity: 0,
    y: 40,
  }, {
    opacity: 1,
    y: 0,
    scrollTrigger: {
      trigger: '.pH-4',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.pr-2', {
    opacity: 0,
    x: -40,
  }, {
    opacity: 1,
    x: 0,
    scrollTrigger: {
      trigger: '.pH-5',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.pr-3', {
    opacity: 0,
    x: 40,
  }, {
    opacity: 1,
    x: 0,
    scrollTrigger: {
      trigger: '.pH-6',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });

  gsap.fromTo('.pr-4', {
    opacity: 0,
    y: 40,
  }, {
    opacity: 1,
    y: 0,
    scrollTrigger: {
      trigger: '.pH-7',
      start: '-10% 0%',
      end: '100% 30%'
    },
    duration: 1
  });




}


Intro_AnimationInit();
Play_AnimationInit();