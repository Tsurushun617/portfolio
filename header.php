<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N7HKKBFS');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <!-- ▼ファビコン -->
  <link rel="icon" type="image" sizes="32✕32"
    href="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- 非公開 -->
  <meta name="robots" content="noindex,nofollow" />
  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=PT+Sans&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Kaku+Gothic+New&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
      };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "jxbpb6j2ov");
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7HKKBFS"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- ▼ ヘッダー -->
  <header class="header">
    <div class="header-container w-container">
      <!-- ▼ ロゴ -->
      <h1 class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo2.0.png"
            alt="<?php bloginfo('name'); ?>" /></a>
      </h1>
      <!-- ▲ ロゴ -->
      <!-- 🍔ボタン（クリックする３本線の部分） -->
      <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav"
        aria-expanded="false">
        <span class="p-hamburger__line">
          <span class="u-visuallyHidden"> メニューを開閉する </span>
        </span>
      </button>
      <!-- ▲ 🍔ボタン -->
      <!-- ▼ ナビゲーションメニュー -->
      <nav class="nav">
        <ul class="main-menu">
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/works/')); ?>">Works<span class="ja">実績</span></a>
          </li>
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/')); ?>#skill">Skill<span class="ja">できること</span></a>
          </li>
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/profile/')); ?>profile/">Profile<span class="ja">私について</span></a>
          </li>
          <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/')); ?>#contact">Contact<span class="ja">お問い合わせ</span></a>
          </li>
        </ul>
      </nav>
      <!-- ▲ ナビゲーションメニュー -->
    </div>
  </header>
  <!-- ▲ ヘッダー -->