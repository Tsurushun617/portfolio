//ハンバーガーメニュー
(function () {
  document
    .getElementById("js-buttonHamburger")
    .addEventListener("click", function () {
      document.body.classList.toggle("is-drawerActive");

      if (this.getAttribute("aria-expanded") === "false") {
        this.setAttribute("aria-expanded", "true");
      } else {
        this.setAttribute("aria-expanded", "false");
      }

      // ドロワーメニューが表示されたときにスクロールを固定
      if (document.body.classList.contains("is-drawerActive")) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = ""; // ドロワーメニューが閉じられたときにスクロールを有効に戻す
      }
    });

  document.querySelectorAll(".main-menu").forEach(function (menuItem) {
    menuItem.addEventListener("click", function () {
      // ハンバーガーメニューが表示されている場合は、閉じる処理を行います
      if (document.body.classList.contains("is-drawerActive")) {
        document.body.classList.remove("is-drawerActive");
        document
          .getElementById("js-buttonHamburger")
          .setAttribute("aria-expanded", "false");

        // ドロワーメニューが閉じられたときにスクロールを有効に戻す
        document.body.style.overflow = "";
      }
    });
  });
})();

//scroll時にふわっと出現するアニメーション
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll(".scroll-up");
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 150;
      if (
        window.innerHeight >
        scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin
      ) {
        scrollAnimationElm[i].classList.add("on");
      }
    }
  };
  window.addEventListener("load", scrollAnimationFunc);
  window.addEventListener("scroll", scrollAnimationFunc);
});

// works :タブの切り替え
$(function () {
  const defaultTab = $(".work-list:first-child");

  // 最初の.work-list要素にshowクラスを追加して表示する
  defaultTab.addClass("show");

  // デフォルトのタブにスタイルを適用する
  $(".tab-item:first-child").css({
    "background-color": "var(--third-color)",
    color: "#fff",
  });

  $(".tab-item").click(function () {
    // クリックされたタブのテキストを取得
    const clickedTabText = $(this).text();

    // 現在activeが付いているクラスからactiveを外す
    $(".active").removeClass("active");

    // クリックされたタブメニューにactiveクラスを付与
    $(this).addClass("active");

    // 一旦showクラスを外す
    $(".show").removeClass("show");

    // クリックしたタブのインデックス番号取得
    const index = $(this).index();

    // タブのインデックス番号と同じコンテンツにshowクラスをつけて表示する
    $(".work-list").eq(index).addClass("show");

    // クリックされたタブが「コーディング」であれば、デフォルトのタブのスタイルを解除する
    if (clickedTabText === "コーディング") {
      $(".tab-item:first-child").css({
        "background-color": "",
        color: "",
      });
    }
  });
});

//トップに戻るボタン
$(function () {
  var pagetop = $("#pagetop");
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 2000) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});
