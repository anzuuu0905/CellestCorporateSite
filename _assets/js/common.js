/**
 * @modules : node_modulesフォルダまでの絶対パスのエイリアス
 * webpack.config.jsにて定義している
 */
// jQuery
import $ from "@modules/jquery";
// Slickスライダー
import '@modules/slick-carousel';
// gsap テキストアニメーション
// import gsap from "@modules/gsap/";
// import TweenMax from "@modules/gsap/";
// import { gsap, ScrollTrigger, TweenMax } from "@modules/gsap/";
import { gsap } from "@modules/gsap/";
import { TweenMax } from "@modules/gsap/";
import { ScrollTrigger } from "@modules/gsap/ScrollTrigger";

("use strict");

// PC/SP判定
// スクロールイベント
// リサイズイベント
// スムーズスクロール

/* ここから */

const breakpoint = 640;
const mql = window.matchMedia(`screen and (max-width: ${breakpoint}px)`); //、MediaQueryListの生成
let deviceFlag = mql.matches ? 1 : 0; // 0 : PC ,  1 : SP

// pagetop
let timer = null;
const $pageTop = $('#pagetop');
$pageTop.hide();

// スクロールイベント
$(window).on('scroll touchmove', function () {

  // スクロール中か判定
  if (timer !== false) {
    clearTimeout(timer);
  }

  // スクロール量が100pxを超えたら、200ms後にフェードイン
  timer = setTimeout(function () {
    if ($(this).scrollTop() > 100) {
      $('#pagetop').fadeIn('normal');
    } else {
      $pageTop.fadeOut();
    }
  }, 200);

  const scrollHeight = $(document).height();
  const scrollPosition = $(window).height() + $(window).scrollTop();
  const footHeight = parseInt($('#footer').innerHeight());


  if (scrollHeight - scrollPosition <= footHeight - 20) {
    // 現在の下から位置が、フッターの高さの位置にはいったら(bottom20px分を引いて調整)
    $pageTop.css({
      'position': 'absolute',
      'bottom': footHeight,
    });
  } else {
    $pageTop.css({
      'position': 'fixed',
      'bottom': '20px'
    });
  }

});


// リサイズイベント
const checkBreakPoint = function (mql) {
  deviceFlag = mql.matches ? 1 : 0; // 0 : PC ,  1 : SP
  // → PC
  if (deviceFlag === 0) {
    console.log('PC');
  } else {
    // →SP
    console.log('SP');
  }

  deviceFlag = mql.matches;
}

// ブレイクポイントの瞬間に発火
mql.addListener(checkBreakPoint); //MediaQueryListのchangeイベントに登録

// 初回チェック
checkBreakPoint(mql);


// スムーズスクロール
// #で始まるアンカーをクリックした場合にスムーススクロール
$('a[href^="#"]').on('click', function () {
  const speed = 500;
  // アンカーの値取得
  const href = $(this).attr('href');
  // 移動先を取得
  const target = $(href == '#' || href == '' ? 'html' : href);
  // 移動先を数値で取得
  const position = target.offset().top;

  // スムーススクロール
  $('body,html').animate({
    scrollTop: position
  }, speed, 'swing');
  return false;
});

// ナビバートグル
$('.js-hamburger').on('click', function () {
  if ($('.js-hamburger').hasClass('open')) {
    $('.js-drawer-menu').fadeOut();
    $('.js-overlay').fadeOut();
    // $('.js-overlay').removeClass('open');
    $(this).removeClass('open');
    $("html").removeClass("is-fixed");  // 背景固定解除！
  } else {
    $('.js-drawer-menu').fadeIn();
    $('.js-overlay').fadeIn();
    // $('.js-overlay').addClass('open');
    $('.js-hamburger').addClass('open');
    $("html").addClass("is-fixed");     // 背景固定！
  }
});

// ナビバートグル
// $('.js-overlay').on('click', function () {
//   $('.js-drawer-menu').fadeOut();
//   $('.js-overlay').removeClass('open');
//   $('.js-hamburger').removeClass('open');
// });

// スライダー（slick）
$('.p-slick').slick({
  autoplay: true,
  dots: true,
  arrows: false,
  variableWidth: true,
  centerPadding: 0
});







gsap.registerPlugin(ScrollTrigger)

ScrollTrigger.create({
  trigger: ".p-sub-about__contents",
  // markers: true,
  start: "top bottom",
  end: "bottom 10%",
  toggleClass: { targets: ".p-sub-about-content__list", className: "is-active" },
});
ScrollTrigger.create({
  trigger: ".js-sub-about-content1",
  // markers: true,
  start: "top 50%",
  end: "bottom 60%",
  toggleClass: { targets: ".js-sub-about-content__title1", className: "current" },
});
ScrollTrigger.create({
  trigger: ".js-sub-about-content2",
  // markers: true,
  start: "top 60%",
  end: "bottom 70%",
  toggleClass: { targets: ".js-sub-about-content__title2", className: "current" },
});
ScrollTrigger.create({
  trigger: ".js-sub-about-content3",
  // markers: true,
  start: "top 70%",
  end: "top 10%",
  toggleClass: { targets: ".js-sub-about-content__title3", className: "current" },
});

// ローディング画面の読み込み
window.onload = ()=>{
  const loader = document.getElementById('loader');
  if(loader !== null){
    loader.classList.add('loaded');
  }
  const header = document.getElementById('loader-header');
  header.classList.add('loaded');
}

/* GSAP警告メッセージを非表示にする
 * 参考サイト：https://onedarling.site/programming/javascript/gsap-error/
 */

gsap.config({
    nullTargetWarn: false,
  });

// マウスストーカー
// 一番最後に実行する
// スマホの場合は除外する
if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){

  const cursor = $(".cursor")
  const follower = $(".follower");
  let cWidth = 8; //カーソルの大きさ
  let fWidth = 40; //フォロワーの大きさ
  let delay = 5; //数字を大きくするとフォロワーがより遅れて来る
  let mouseX = 0; //マウスのX座標
  let mouseY = 0; //マウスのY座標
  let posX = 0; //フォロワーのX座標
  let posY = 0; //フォロワーのX座標
  
  //カーソルの遅延アニメーション
  //ほんの少ーーーしだけ遅延させる 0.001秒
  TweenMax.to({}, 0.01, {
    repeat: -1,
    onRepeat: function() {
      posX += (mouseX - posX) / delay;
      posY += (mouseY - posY) / delay;
      
      TweenMax.set(follower, {
          css: {    
            left: posX - (fWidth / 2),
            top: posY - (fWidth / 2)
          }
      });
      
      TweenMax.set(cursor, {
          css: {    
            left: mouseX - (cWidth / 2),
            top: mouseY - (cWidth / 2)
          }
      });
    }
  });
  
  //マウス座標を取得
  $(document).on("mousemove", function(e) {
      mouseX = e.pageX;
      mouseY = e.pageY;
  });
  
  $("a").on({
    "mouseenter": function() {
      cursor.addClass("is-active");
      follower.addClass("is-active");
    },
    "mouseleave": function() {
      cursor.removeClass("is-active");
      follower.removeClass("is-active");
    }
  });
  
  $("input").on({
    "mouseenter": function() {
      cursor.addClass("is-active");
      follower.addClass("is-active");
    },
    "mouseleave": function() {
      cursor.removeClass("is-active");
      follower.removeClass("is-active");
    }
  });
  }

/* 
 * カテゴリ検索機能の実装
 * 参考サイト：https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/wp_dropdown_categories#JavaScript_.E3.82.92.E7.94.A8.E3.81.84.E3.81.9F.E9.80.81.E4.BF.A1.E3.83.9C.E3.82.BF.E3.83.B3.E3.81.AA.E3.81.97.E3.83.89.E3.83.AD.E3.83.83.E3.83.97.E3.83.80.E3.82.A6.E3.83.B3.E3.83.A1.E3.83.8B.E3.83.A5.E3.83.BC
 */
    // var dropdown = document.getElementById("cat"); //選択されたカテゴリを取得
    // var wp_home_url = tmp_path.home_url;  //tmp_path.home_urは、function.phpで定義

    // function onCatChange() {
    //   // カテゴリが変更された場合（value 0:全て、1以降：カテゴリの識別番号
    //   if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
    //     location.href = wp_home_url + "/?cat=" + dropdown.options[dropdown.selectedIndex].value;

    //   }else{ //全てが選択された場合
    //     location.href = wp_home_url + "/topics";
    //   }
    // }
    // // ドロップダウンの初期値を選択されたものにする
    // dropdown.onchange = onCatChange;