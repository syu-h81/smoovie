'use strict';
//オプション・メニューのチェックボックスの制限機能
const checkboxes = document.querySelectorAll('.priority-checkbox[type="checkbox"]');
const maxChecked = 1;
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('change', () => {
    const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
    if (checkedCount > maxChecked) {
      checkbox.checked = false;
      alert(`最大${maxChecked}つまで選択できます`);
    }
  });
});

$(function() {
  ////// serviceセクションのアコーディオン機能 //////
  $('.p-service__box').off('click').on('click', function() {
    const $checkOpen = $(this).find('.p-service__box__check');
    $checkOpen.toggleClass('active');

    const $serviceBody = $(this).find('.p-service__box__body');
    $serviceBody.slideToggle();
  });
  ////// planセクションのコンテンツ切り替え機能 //////
  $('.p-plan__btn').on('click', function() {
    $('.p-plan__btn').removeClass('active');
    // クリックされたボタンに 'active' クラスを付与
    $(this).addClass('active');
    // すべての要素を非表示にする
    $('.p-plan__content').removeClass('open');

    // クリックしたボタンに対応する要素を表示する
    const target = $(this).data('target');
    $(target).addClass('open');
  });
  $('.p-plan__btn').on('click', function() {
    // 全てのボタンを非アクティブに戻す
    $('.p-plan__btn').each(function() {
        var originalSrc = $(this).find('img').attr('src').replace('_active', '');
        $(this).find('img').attr('src', originalSrc);
        $(this).removeClass('active');
    });

    // クリックされたボタンをアクティブにする
    var $img = $(this).find('img');
    var originalSrc = $img.attr('src');
    var newSrc = originalSrc.replace('.png', '_active.png');
    $img.attr('src', newSrc);
    $(this).addClass('active');
  });

  ////// feeセクションのコンテンツ切り替え機能 //////
  $('.p-fee__btn').on('click', function() {
    $('.p-fee__btn').removeClass('active');
    $(this).addClass('active');
    $('.p-fee__content').removeClass('open');

    const target = $(this).data('target');
    $(target).addClass('open');
  });
  $('.p-fee__btn').on('click', function() {
    // 全てのボタンを非アクティブに戻す
    $('.p-fee__btn').each(function() {
        var originalSrc = $(this).find('img').attr('src').replace('_active', '');
        $(this).find('img').attr('src', originalSrc);
        $(this).removeClass('active');
    });
    // クリックされたボタンをアクティブにする
    var $img = $(this).find('img');
    var originalSrc = $img.attr('src');
    var newSrc = originalSrc.replace('.png', '_active.png');
    $img.attr('src', newSrc);
    $(this).addClass('active');
  });

  ////// deliverセクションのコンテンツ切り替え機能 //////
  $('.p-deliver__btn').on('click', function() {
    $('.p-deliver__btn').removeClass('active');
    // クリックされたボタンに 'active' クラスを付与
    $(this).addClass('active');
    // すべての要素を非表示にする
    $('.p-deliver__flow').removeClass('open');

    // クリックしたボタンに対応する要素を表示する
    const target = $(this).data('target');
    $(target).addClass('open');
  });
  $('.p-deliver__btn').on('click', function() {
    // 全てのボタンを非アクティブに戻す
    $('.p-deliver__btn').each(function() {
        var originalSrc = $(this).find('img').attr('src').replace('_active', '');
        $(this).find('img').attr('src', originalSrc);
        $(this).removeClass('active');
    });

    // クリックされたボタンをアクティブにする
    var $img = $(this).find('img');
    var originalSrc = $img.attr('src');
    var newSrc = originalSrc.replace('.png', '_active.png');
    $img.attr('src', newSrc);
    $(this).addClass('active');
  });


  ////// qaセクションのアコーディオン機能 //////
  $('.p-qa__content__list__item').off('click').on('click', function() {
    const $answer = $(this).find('.p-qa__content__list__answer');
    $answer.slideToggle();
    const $icon = $(this).find('.p-qa__content__list__icon');
    $icon.toggleClass('open');
  });

  ////// contactセクションのコンテンツ切り替え機能 //////
  $('.p-contact__btn').on('click', function() {
    $('.p-contact__btn').removeClass('active');
    // クリックされたボタンに 'active' クラスを付与
    $(this).addClass('active');
    // すべての要素を非表示にする
    $('.p-contact__form').removeClass('open');

    // クリックしたボタンに対応する要素を表示する
    const target = $(this).data('target');
    $(target).addClass('open');
  });
  $('.p-contact__btn').on('click', function() {
    // 全てのボタンを非アクティブに戻す
    $('.p-contact__btn').each(function() {
        var originalSrc = $(this).find('img').attr('src').replace('_active', '');
        $(this).find('img').attr('src', originalSrc);
        $(this).removeClass('active');
    });

    // クリックされたボタンをアクティブにする
    var $img = $(this).find('img');
    var originalSrc = $img.attr('src');
    var newSrc = originalSrc.replace('.png', '_active.png');
    $img.attr('src', newSrc);
    $(this).addClass('active');
  });
});

//top swiperの設定
window.addEventListener("DOMContentLoaded", () => {
  const infiniteSlider = new Swiper(".infinite-slider", {
    centeredSlides: true,
    loop: true,
    loopedSlides: 2,
    slidesPerView: 5,
    spaceBetween: 20,
    speed: 1500,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: 'slide'
  });
});

//plan swiperの設定
window.addEventListener("DOMContentLoaded", () => {
  const sampleSlider = new Swiper(".sample-slider", {
    loop: true,
    //centeredSlides: true,
    loopedSlides: 4,
    slidesPerView: 4,
    spaceBetween: 20,
    speed: 1500,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",  // 次のスライドへ進むボタン
      prevEl: ".swiper-button-prev",  // 前のスライドに戻るボタン
    },
    pagination: {
      el: ".swiper-pagination",  // ページネーション要素を指定
      clickable: true,            // クリック可能にする
    },
  });
});

