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

// 一文字ずつ文字が表示されるアニメーション
function TextTypingAnime() {
  $(".hero-title").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var thisChild = "";
    if (scroll >= elemPos - windowHeight) {
      thisChild = $(this).children(); //spanタグを取得
      //spanタグの要素の１つ１つ処理を追加
      thisChild.each(function (i) {
        var time = 100;
        //時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
        $(this)
          .delay(time * i)
          .fadeIn(time);
      });
    } else {
      thisChild = $(this).children();
      thisChild.each(function () {
        $(this).stop(); //delay処理を止める
        $(this).css("display", "none"); //spanタグ非表示
      });
    }
  });
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  TextTypingAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述
// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  //spanタグを追加する
  var element = $(".hero-title");
  element.each(function () {
    var text = $(this).html();
    var textbox = "";
    text.split("").forEach(function (t) {
      if (t !== " ") {
        textbox += "<span>" + t + "</span>";
      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);

    setTimeout(function () {
      TextTypingAnime(); /* アニメーション用の関数を呼ぶ*/
    }, 100); // 文字が表示された後にタイピングが始まる遅延時間（0.1秒）
  });
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

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
