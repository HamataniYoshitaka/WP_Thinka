//menu
jQuery(function ($) {
  $('.hamburger-menu').on('click', function () {
    $('.hamburger-menu > .line').toggleClass('active');
    $('.menu-sp').toggleClass('active');
    $('body').toggleClass('active');
  });
  $('.menu-sp > .list-menu > .menu > a').on('click', function () {
    $('.hamburger-menu > .line').toggleClass('active');
    $('.menu-sp').toggleClass('active');
    $('body').toggleClass('active');
  });
});

window.addEventListener("scroll", function () {
  // ヘッダーを変数の中に格納する
  const header = document.querySelector("header");
  // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
  header.classList.toggle("scroll-nav", window.scrollY > 780);
});


//effect scroll
setTimeout(function () {
  $('.scroll').addClass("fade-in");
}, 2800);

//scroll effect contents
$(function () {
  $(window).scroll(function () {
    $(".fade, .fade-delay").each(function () {
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > imgPos - windowHeight * 12 / 13 - 64) {
        $(this).addClass("fade-up");
      }
    });
  });
});
$(function () {
  $(".fade, .fade-delay").each(function () {
    var imgPos = $(this).offset().top;
    var windowHeight = $(window).height();

    if (windowHeight > imgPos) {
      $(this).addClass("fade-up");
    } else {
      $(this).removeClass("fade-up");
    }
  });
});


document.addEventListener('click', function (e) {
  // クリックされた要素がアンカーリンクかどうか確認する
  if (e.target.matches('a[href^="#"]')) {
    e.preventDefault(); // デフォルトのアンカー動作を無効化
    const targetID = e.target.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetID);

    if (targetElement) {
      const offset = 200; // 調整したいピクセル数
      const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
      const offsetPosition = elementPosition - offset;

      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  }
});




//tab
$(function () {
  $('.tab-panel').css('display', 'none');
  var hash = location.hash;
  if (hash.match(/#/)) {
    $('.tab-panel').eq(0).fadeIn();
    $('#tab-menu li').eq(0).addClass('selected');
  } else if (hash.match(/#64/)) {
    $('.tab-panel').eq(1).fadeIn();
    $('#tab-menu li').eq(1).addClass('selected');
  } else if (hash.match(/#271/)) {
    $('.tab-panel').eq(2).fadeIn();
    $('#tab-menu li').eq(2).addClass('selected');
  } else if (hash.match(/#401/)) {
    $('.tab-panel').eq(3).fadeIn();
    $('#tab-menu li').eq(3).addClass('selected');
  } else if (hash.match(/#559/)) {
    $('.tab-panel').eq(4).fadeIn();
    $('#tab-menu li').eq(4).addClass('selected');
  } else {
    $('.tab-panel').eq(0).fadeIn();
    $('#tab-menu li').eq(0).addClass('selected');
  }
  $('#tab-menu li a').click(function () {
    var thisUrl = $(this).attr('href');
    history.replaceState('', '', thisUrl);
    var index01 = $('#tab-menu li a').index(this);
    $('.tab-panel').css('display', 'none');
    $('.tab-panel').eq(index01).fadeIn();
    $('#tab-menu li').removeClass('selected');
    $(this).parent().addClass('selected');
  });
});


window.addEventListener('scroll', function () {
  const flow2Elements = document.getElementsByClassName('mission');
  const flow3Elements = document.getElementsByClassName('vision');
  const flow4Elements = document.getElementsByClassName('value');
  const step1Elements = document.getElementsByClassName('step1');
  const step2Elements = document.getElementsByClassName('step2');
  const step3Elements = document.getElementsByClassName('step3');
  const windowHeight = window.innerHeight; // 現在のブラウザの高さを取得する

  // 初期状態でstep1にactiveクラスを追加
  for (let k = 0; k < step1Elements.length; k++) {
    step1Elements[k].classList.add('active');
  }

  // flow2の処理
  for (let i = 0; i < flow3Elements.length; i++) {
    const elementHeight = flow3Elements[i].getBoundingClientRect().bottom; // 要素の位置（座標）を取得する

    if (elementHeight < windowHeight * 0.7) {
      for (let j = 0; j < step2Elements.length; j++) {
        step2Elements[j].classList.add('active');
      }
    } else {
      for (let j = 0; j < step2Elements.length; j++) {
        step2Elements[j].classList.remove('active');
      }
    }
  }

  // flow3の処理
  for (let i = 0; i < flow4Elements.length; i++) {
    const elementHeight = flow4Elements[i].getBoundingClientRect().bottom; // 要素の位置（座標）を取得する

    if (elementHeight < windowHeight * 0.7) {
      for (let j = 0; j < step3Elements.length; j++) {
        step3Elements[j].classList.add('active');
      }
    } else {
      for (let j = 0; j < step3Elements.length; j++) {
        step3Elements[j].classList.remove('active');
      }
    }
  }
});


$(function () {
  var pos = 0;
  var header = $('header');
    $(window).on('scroll', function () {
      if ($(window).width() > 1024) {
        if ($(this).scrollTop() < pos) {
          //上にスクロールしたとき
          header.removeClass('hidden');
        } else {
          //下にスクロールしたとき
          header.addClass('hidden');
        }
        pos = $(this).scrollTop();
      } else {
        if ($(this).scrollTop() < $(window).height()) {
          $('.btn-sp-scrolltop').removeClass('active');
        } else {
          $('.btn-sp-scrolltop').addClass('active');
        }
      }
    });
});


//accordion
$(function () {
  $('.box-type .button').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('active');
    $(this).closest('.box-type').find('.cover').toggleClass('active');
  });
});

$(function () {
  $(".list-voice")
    .on("init", function (event, slick) {
      $(this).append('<div class="slick-num decoration"><span class="now-count"></span> / <span class="all-count"></span></div>');
      $(".now-count").text(slick.currentSlide + 1);
      $(".all-count").text(slick.slideCount);
    })
    .slick({
      arrows: true,
      slidesToShow: 1,
      infinity: true,
      initialSlide: 0,
      prevArrow: '<img src="https://test-horiken.ni-works.jp/wp-content/themes/horiken/assets/imgs/arrow-gray.svg" class="slide-arrow prev-arrow">',
      nextArrow: '<img src="https://test-horiken.ni-works.jp/wp-content/themes/horiken/assets/imgs/arrow-gray.svg" class="slide-arrow next-arrow">',
      responsive: [{
        breakpoint: 1441,
        settings: {
          slidesToShow: 1
        }
      }]
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      $(".now-count").text(nextSlide + 1);
    });
});


$(document).ready(function () {
  function checkBreakPoint() {
    w = $(window).width();


    if ($('.list-flow').hasClass('slick-initialized')) {
      $('.list-flow').slick('unslick');
    }

    if (w <= 481) {
      $('.list-flow').slick({
        slidesToShow: 1,
        arrows: true,
        infinity: true,
        initialSlide: 0,
        prevArrow: '<img src="https://test-horiken.ni-works.jp/wp-content/themes/horiken/assets/imgs/arrow-gray.svg" class="slide-arrow prev-arrow">',
        nextArrow: '<img src="https://test-horiken.ni-works.jp/wp-content/themes/horiken/assets/imgs/arrow-gray.svg" class="slide-arrow next-arrow">',
      });
    } else if (w <= 821) {
      $('.list-flow').slick({
        slidesToShow: 2,
        arrows: true,
        infinity: true,
        initialSlide: 0,
        prevArrow: '<img src="https://test-horiken.ni-works.jp/wp-content/themes/horiken/assets/imgs/arrow-gray.svg" class="slide-arrow prev-arrow">',
        nextArrow: '<img src="https://test-horiken.ni-works.jp/wp-content/themes/horiken/assets/imgs/arrow-gray.svg" class="slide-arrow next-arrow">',
      });
    }
  }

  $(window).resize(function () {
    checkBreakPoint();
  });

  checkBreakPoint();
});

$(document).ready(function () {
  $('.btn-sp-scrolltop').on('click',function(){
    // ページトップにスクロール
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  })
  
  function checkBreakPoint() {
    w = $(window).width();


    if ($('.list-gallery').hasClass('slick-initialized')) {
      $('.list-gallery').slick('unslick');
    }

    if (w <= 481) {
      $('.list-gallery').slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 10000,
        cssEase: "linear",
        slidesToShow: 2,
        swipe: false,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinity: true
      });
    }
  }

  $(window).resize(function () {
    checkBreakPoint();
  });

  checkBreakPoint(); // 初回ロード時にチェックを実行

  $('.toggle-category').on('click',function(){
    $('.category-dropdown').toggle();
  })

});

