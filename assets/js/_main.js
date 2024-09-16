const { transform } = require("lodash");


//menu
jQuery(function ($) {
  $('.hamburger-menu').on('click', function () {
    $('.hamburger-menu > .line').toggleClass('active');
    $('.menu-sp').toggleClass('active');
  });
  $('.menu-sp > .list-menu > .menu > a').on('click', function () {
    $('.hamburger-menu > .line').toggleClass('active');
    $('.menu-sp').toggleClass('active');
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



document.addEventListener('click', function(e) {
  // クリックされた要素がアンカーリンクかどうか確認する
  if (e.target.matches('a[href^="#"]')) {
    e.preventDefault(); // デフォルトのアンカー動作を無効化
    const targetID = e.target.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetID);

    if (targetElement) {
      const offset = 80; // 調整したいピクセル数
      const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
      const offsetPosition = elementPosition - offset;

      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  }
});

$(function () {
  $('.list-image').slick({
    autoplay: true, 
    autoplaySpeed: 3000, 
    cssEase: "linear", 
    slidesToShow: 1,
    fade: true,
    swipe: false, 
    arrows: false, 
    pauseOnFocus: false, 
    pauseOnHover: false,
    infinity: true, 
  });
}); 

$(function () {
  $('.list-photo').slick({
    autoplay: true, 
    autoplaySpeed: 0, 
    speed: 10000,
    cssEase: "linear", 
    slidesToShow: 4,
    swipe: false, 
    arrows: false, 
    pauseOnFocus: false, 
    pauseOnHover: false,
    infinity: true, 
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3, 
        }
      }
    ]
  });
}); 

// $(document).ready(function () {
//   $('.list-proto').slick({
//     autoplay: true, 
//     autoplaySpeed: 0, 
//     speed: 10000,
//     cssEase: "linear", 
//     slidesToShow: 4,
//     swipe: false, 
//     arrows: false, 
//     pauseOnFocus: false, 
//     pauseOnHover: false,
//     infinity: true, 
//     responsive: [
//       {
//         breakpoint: 641,
//         settings: {
//           slidesToShow: 3, 
//         }
//       }
//     ]
//   });
//     $('.tab-menu > li').click(function () {
//     $('.list-proto').slick('setPosition');
//   });
// }); 


// $(document).ready(function () {
//   $('.list-collabo-image').slick({
//     autoplay: true, 
//     autoplaySpeed: 0, 
//     speed: 10000,
//     cssEase: "linear", 
//     // slidesToShow: 2,
//     swipe: false, 
//     arrows: false, 
//     pauseOnFocus: false, 
//     pauseOnHover: false,
//     infinity: true, 
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 1, 
//         }
//       }
//     ]
//   });
//   $('.tab-menu > li').change(function () {
//     $('.list-collabo-image').slick('setPosition');
//   });
// }); 


// $(document).ready(function () {
//   $('.list-otherproduct-image').slick({
//     autoplay: true, 
//     autoplaySpeed: 0, 
//     speed: 10000,
//     cssEase: "linear", 
//     // slidesToShow: 2,
//     swipe: false, 
//     arrows: false, 
//     pauseOnFocus: false, 
//     pauseOnHover: false,
//     infinity: true, 
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 1, 
//         }
//       }
//     ]
//   });
//     $('.tab-menu > li').click(function () {
//     $('.list-otherproduct-image').slick('setPosition');
//   });
// }); 

// $(function () {
//   $('.list-history').slick({
//     slidesToShow: 2,
//     infinity: true,
//      initialSlide: 0, 
//     prevArrow: '<img src="http://localhost/T_horiken-mokue/wp-content/themes/horiken-mokue/assets/imgs/button-prev.png" class="slide-arrow prev-arrow">',
//     nextArrow: '<img src="http://localhost/T_horiken-mokue/wp-content/themes/horiken-mokue/assets/imgs/button-next.png" class="slide-arrow next-arrow">',
//   });
// }); 



$(function () {
    $(".list-history")
    .on("init", function (event, slick) {
        $(this).append('<div class="slick-num decoration"><span class="now-count"></span> / <span class="all-count"></span></div>');
        $(".now-count").text(slick.currentSlide + 1);
        $(".all-count").text(slick.slideCount);
    })
    .slick({
    slidesToShow: 3,
    infinity: true,
     initialSlide: 0, 
    prevArrow: '<img src="http://test-horiken-mokue.ni-works.jp/wp-content/themes/horiken-mokue/assets/imgs/button-prev.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="http://test-horiken-mokue.ni-works.jp/wp-content/themes/horiken-mokue/assets/imgs/button-next.png" class="slide-arrow next-arrow">',
        responsive: [{
        breakpoint: 1441,
        settings: {
        slidesToShow: 2
        }
    },
    {
        breakpoint: 641,
        settings: {
        slidesToShow: 1
        }
    }]
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".now-count").text(nextSlide + 1);
    });
}); 


$(function () {
    $(".list-process")
    .on("init", function (event, slick) {
        $(this).append('<div class="slick-num decoration"><span class="now-count"></span> / <span class="all-count"></span></div>');
        $(".now-count").text(slick.currentSlide + 1);
        $(".all-count").text(slick.slideCount);
    })
    .slick({
      arrows: true,
    slidesToShow: 4,
    infinity: true,
    initialSlide: 0, 
    prevArrow: '<img src="http://test-horiken-mokue.ni-works.jp/wp-content/themes/horiken-mokue/assets/imgs/button-prev.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="http://test-horiken-mokue.ni-works.jp/wp-content/themes/horiken-mokue/assets/imgs/button-next.png" class="slide-arrow next-arrow">',
        responsive: [{
        breakpoint: 1441,
        settings: {
        slidesToShow: 3
        }
    },
     {
        breakpoint: 1025,
        settings: {
        slidesToShow: 2
        }
    },
    {
        breakpoint: 821,
        settings: {
        slidesToShow: 1
        }
    }
  ]
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".now-count").text(nextSlide + 1);
    });
}); 


//tab

$(function() {
	$('.tab-panel').css('display','none');
	var hash = location.hash;
	if (hash.match(/#building/)){
		$('.tab-panel').eq(0).fadeIn();
		$('#tab-menu li').eq(0).addClass('selected');
	} else if (hash.match(/#collaboration/)){
		$('.tab-panel').eq(1).fadeIn();
		$('#tab-menu li').eq(1).addClass('selected');
	} else if (hash.match(/#proto/)){
		$('.tab-panel').eq(2).fadeIn();
		$('#tab-menu li').eq(2).addClass('selected');
	} else if (hash.match(/#workshop/)){
		$('.tab-panel').eq(3).fadeIn();
		$('#tab-menu li').eq(3).addClass('selected');
	} else if (hash.match(/#promotion/)){
		$('.tab-panel').eq(4).fadeIn();
		$('#tab-menu li').eq(4).addClass('selected');
	} else {
		$('.tab-panel').eq(0).fadeIn();
		$('#tab-menu li').eq(0).addClass('selected');
	}
	$('#tab-menu li a').click(function() {
		var thisUrl = $(this).attr('href');
		history.replaceState('','',thisUrl);
		var index01 = $('#tab-menu li a').index(this);
		$('.tab-panel').css('display','none');
		$('.tab-panel').eq(index01).fadeIn();
		$('#tab-menu li').removeClass('selected');
		$(this).parent().addClass('selected');
	});
});

$(function() {
	$('.tab-panel-product').css('display','none');
	var hash = location.hash;
	if (hash.match(/#woodenhandle/)){
		$('.tab-panel-product').eq(0).fadeIn();
		$('#tab-menu li').eq(0).addClass('selected');
	} else if (hash.match(/#other-products/)){
		$('.tab-panel-product').eq(1).fadeIn();
		$('#tab-menu li').eq(1).addClass('selected');
	} else {
		$('.tab-panel-product').eq(0).fadeIn();
		$('#tab-menu li').eq(0).addClass('selected');
	}
	$('#tab-menu li a').click(function() {
		var thisUrl = $(this).attr('href');
		history.replaceState('','',thisUrl);
		var index01 = $('#tab-menu li a').index(this);
		$('.tab-panel-product').css('display','none');
		$('.tab-panel-product').eq(index01).fadeIn();
		$('#tab-menu li').removeClass('selected');
		$(this).parent().addClass('selected');
	});
});



// サムネイルシャッフル機能
// function shuffleContent(container) {
//     var content = Array.from(container.querySelectorAll('li'));
//     for (var i = content.length - 1; i > 0; i--) {
//         const j = Math.floor(Math.random() * (i + 1));
//         container.appendChild(content[j]);
//     }
// }

// ドキュメントが読み込まれたときの初期化処理
// document.addEventListener('DOMContentLoaded', function() {
//     var gallery = document.querySelector('.list-gallery');
//     shuffleContent(gallery);

//     // サムネイルクリックでモーダルを開く処理
//     document.querySelectorAll('.gallery-item').forEach(function(item) {
//         item.addEventListener('click', function() {
//             var img = item.querySelector('img').src;
//             var modal = document.createElement('div');
//             modal.classList.add('modal');
//             modal.innerHTML = `
//                 <img src="http://test-horiken-mokue.ni-works.jp/wp-content/themes/horiken-mokue/assets/imgs/gallery/close.png" alt="close" class="close">
//                 <img class="modal-content" src="${img}">
//             `;
//             document.body.appendChild(modal);

//             // モーダルを表示
//             modal.style.display = 'block';

//             // 閉じるボタンの動作
//             modal.querySelector('.close').addEventListener('click', function() {
//                 modal.style.display = 'none';
//                 document.body.removeChild(modal);
//             });

//             // モーダル背景クリックで閉じる
//             window.addEventListener('click', function(event) {
//                 if (event.target === modal) {
//                     modal.style.display = 'none';
//                     document.body.removeChild(modal);
//                 }
//             });
//         });
//     });

//     // ボタンのクリックイベントを設定
//     document.querySelector('.button a').addEventListener('click', function() {
//         shuffleContent(gallery);
//     });
// });


document.addEventListener('DOMContentLoaded', function() {
    function getRandomImages(images, count) {
        const shuffled = images.sort(() => 0.5 - Math.random());
        return shuffled.slice(0, count);
    }

    function updateGallery(images) {
        var gallery = document.querySelector('.list-gallery');
        gallery.innerHTML = ''; // 現在のギャラリーをクリア

        images.forEach(function(image) {
            var li = document.createElement('li');
            li.classList.add('gallery-item');
            li.setAttribute('data-id', image.id);
            li.innerHTML = `
                <a class="link" href="javascript:void(0);">
                    <div class="image">${image.thumbnail}</div>
                </a>
            `;
            gallery.appendChild(li);

            // サムネイルクリックでモーダルを開く処理
            li.querySelector('a').addEventListener('click', function() {
                var img = li.querySelector('img').src;
                var modal = document.createElement('div');
                modal.classList.add('modal');
                modal.innerHTML = `
                  <img src="http://test-horiken-mokue.ni-works.jp/wp-content/themes/horiken-mokue/assets/imgs/gallery/close.png" alt="close" class="close">
                    <img class="modal-content" src="${img}">
                `;
                document.body.appendChild(modal);

                // モーダルを表示
                modal.style.display = 'block';

                // 閉じるボタンの動作
                modal.querySelector('.close').addEventListener('click', function() {
                    modal.style.display = 'none';
                    document.body.removeChild(modal);
                });

                // モーダル背景クリックで閉じる
                window.addEventListener('click', function(event) {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                        document.body.removeChild(modal);
                    }
                });
            });
        });
    }

    // 初回ロード時にランダム画像を表示
    var initialImages = getRandomImages(allGalleryImages, 8);
    updateGallery(initialImages);

    // ボタンのクリックイベントを設定
    document.querySelector('.button a').addEventListener('click', function(event) {
        event.preventDefault(); // デフォルトのリンク動作を防ぐ
        var newImages = getRandomImages(allGalleryImages, 8);
        updateGallery(newImages);
    });
});


window.addEventListener('scroll', function() {
    const flow2Elements = document.getElementsByClassName('flow2');
    const flow3Elements = document.getElementsByClassName('flow3');
    const flow4Elements = document.getElementsByClassName('flow4');
    const step1Elements = document.getElementsByClassName('step1');
    const step2Elements = document.getElementsByClassName('step2');
    const step3Elements = document.getElementsByClassName('step3');
    const stepLabelElements = document.getElementsByClassName('step3-label');
    const step4Elements = document.getElementsByClassName('step4');
    const windowHeight = window.innerHeight; // 現在のブラウザの高さを取得する
    
    // 初期状態でstep1にactiveクラスを追加
    for (let k = 0; k < step1Elements.length; k++) {
        step1Elements[k].classList.add('active');
    }

    // flow2の処理
    for (let i = 0; i < flow2Elements.length; i++) {
        const elementHeight = flow2Elements[i].getBoundingClientRect().bottom; // 要素の位置（座標）を取得する
        
        if (elementHeight < windowHeight * 1.0) {
            for (let j = 0; j < step2Elements.length; j++) {
                step2Elements[j].classList.add('active');
            }
                        for (let k = 0; k < step1Elements.length; k++) {
                step1Elements[k].classList.remove('active');
            }
                        for (let k = 0; k < stepLabelElements.length; k++) {
                 stepLabelElements[k].classList.remove('active');
            }
        } else {
            for (let j = 0; j < step2Elements.length; j++) {
                step2Elements[j].classList.remove('active');
            }
        }
    }

    // flow3の処理
    for (let i = 0; i < flow3Elements.length; i++) {
        const elementHeight = flow3Elements[i].getBoundingClientRect().bottom; // 要素の位置（座標）を取得する
        
        if (elementHeight < windowHeight * 1.0) {
            for (let j = 0; j < step3Elements.length; j++) {
                step3Elements[j].classList.add('active');
            }
            for (let j = 0; j < stepLabelElements.length; j++) {
                stepLabelElements[j].classList.add('active');
            }
            for (let k = 0; k < step2Elements.length; k++) {
                step2Elements[k].classList.remove('active');
            }
        } else {
            for (let j = 0; j < step3Elements.length; j++) {
                step3Elements[j].classList.remove('active');
            }
        }
    }

    // flow4の処理
    for (let i = 0; i < flow4Elements.length; i++) {
        const elementHeight = flow4Elements[i].getBoundingClientRect().bottom; // 要素の位置（座標）を取得する
        
        if (elementHeight < windowHeight * 1.0) {
            for (let j = 0; j < step3Elements.length; j++) {
                step3Elements[j].classList.add('move');
            }
            for (let k = 0; k < stepLabelElements.length; k++) {
                 stepLabelElements[k].classList.remove('active');
            }
            for (let j = 0; j < step4Elements.length; j++) {
                step4Elements[j].classList.add('active');
            }
        } else {
            for (let j = 0; j < step3Elements.length; j++) {
                step3Elements[j].classList.remove('move');
            }
            for (let j = 0; j < step4Elements.length; j++) {
                step4Elements[j].classList.remove('active');
            }
        }
    }
});


$(function(){
  var pos = 0;
  var header = $('header');
  
  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos ){
      //上にスクロールしたとき
      header.removeClass('hidden');
    }else{
      //下にスクロールしたとき
      header.addClass('hidden');
    }
    pos = $(this).scrollTop();
  });
});


