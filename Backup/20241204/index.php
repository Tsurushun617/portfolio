<?php get_header(); ?>

<!-- ▼ メインビジュアル -->
<section class="hero">
  <div class="hero-container">
    <div class="hero-item">
      <h2 class="hero-title">
        <?php bloginfo('name'); ?>
      </h2>
      <p class="hero-txt fadeIn">
        カスタマイズ性が高く、ユーザーの利便性を重視したホームページをご提案いたします。
      </p>
    </div>
  </div>
</section>
<!-- ▲ メインビジュアル -->

<!-- ▼ メイン -->
<main class="main">
  <!-- ▲ Works -->
  <section class="works" id="works">
    <div class="w-container">
      <h2 class="sec-title">Works<span class="ja">制作物</span></h2>
      <p class="sec-desc">
        これまでに制作した架空サイトを紹介しております。
      </p>
      <div class="works-container">
        <?php
        $args = array(
          'post_type' => 'works', // カスタム投稿タイプの名前
          'posts_per_page' => 4, // 表示する投稿数
        );
        $query = new WP_Query($args); ?>
        <ul class="w-grid-list">
          <?php
          if ($query->have_posts()) :
            while ($query->have_posts()) :
              $query->the_post();
          ?>
              <li class="w-grid-item scroll-up">
                <a href="<?php the_permalink(); ?>">
                  <h3 class="w-title"><?php the_title(); ?></h3>
                  <figure class="w-img">
                    <!-- もしアイキャッチ画像があれば -->
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : //もし画像がなければ「no-image」
                    ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-image.png" alt="">
                    <?php endif; ?>
                  </figure>
                  <p class="w-description">
                    <?php the_field("works-desc"); ?>
                  </p>
                </a>
              </li>
            <?php endwhile;
            wp_reset_postdata();
          else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </ul>
        </ul>
      </div>
      <div class="btn-container">
        <a href="<?php echo esc_url(home_url('/works/')); ?>" class="btn">もっと見る</a>
      </div>
    </div>
  </section>
  <!-- ▲ Works -->

  <!-- ▼ Skill -->
  <section class="skill" id="skill">
    <div class="w-container">
      <h2 class="sec-title">Skill<span class="ja">できること</span></h2>
      <p class="sec-desc">
        デザインデータをいただければ、コーディングからの制作も可能です。<br />また、HTML・CSSでコーディングしたWebサイトの動的化にも対応いたします。料金は内容により変動してきますので、まずはお気軽にお問い合わせ下さい。
      </p>
      <div class="skill-container">
        <ul class="s-grid-list">
          <li class="s-grid-item scroll-up">
            <h3 class="s-title">
              Cording<span class="ja">コーディング</span>
            </h3>
            <figure class="service-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/coding.svg" alt="direction" />
            </figure>
            <p class="s-text">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('skill01', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </p>
            <div class="tool-inner">
              <p>使用言語・ツール</p>
              <p>HTML / CSS / JavaScript / jQuery / VSCode</p>
            </div>
          </li>
          <li class="s-grid-item scroll-up">
            <h3 class="s-title">
              WordPress<span class="ja">ワードプレスへの移行</span>
            </h3>
            <figure class="service-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/wordpress.svg" alt="coding" />
            </figure>
            <p class="s-text">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('skill02', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </p>
            <div class="tool-inner">
              <p>使用言語・ツール</p>
              <p>WordPress / PHP / Figma / VSCode /Local by flywheel</p>
            </div>
          </li>
          <li class="s-grid-item scroll-up">
            <h3 class="s-title">
              Upgrade＆Maintenance<span class="ja">サイト改修・保守</span>
            </h3>
            <figure class="service-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/maintenance.svg" alt="maintenance" />
            </figure>
            <p class="s-text">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('skill03', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </p>
            <div class="tool-inner">
              <p>使用言語・ツール</p>
              <p>
                HTML / CSS / JavaScript / jQuery /WordPress / PHP / VSCode
                /Local by flywheel
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ▼ Price -->
  <section class="price" id="price">
    <div class="w-container">
      <h2 class="sec-title">Price<span class="ja">価格表</span></h2>
      <p class="sec-desc">
        以下は参考価格（税込み）です。<br />
        詳しい費用はお問い合わせ時にご確認ください。
      </p>
      <div class="price-container">
        <div class="price-list">
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/code.svg" alt="" />
            </div>
            <span class="price-item">
              トップページコーディング
            </span>
            <!-- ▼ 価格 -->
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price01', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/code.svg" alt="" />
            </div>
            <span class="price-item"> 下層ページコーディング </span>
            <!-- ▼ 価格 -->
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price02', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/code.svg" alt="" />
            </div>
            <span class="price-item"> ランディングページコーディング </span>
            <!-- ▼ 価格 -->
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price03', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/device.svg" alt="" />
            </div>
            <span class="price-item"> レスポンシブ対応 </span>
            <!-- ▼ 価格 -->
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price04', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/seo.svg" alt="" />
            </div>
            <span class="price-item"> 内部SEO対策 </span>
            <!-- ▼ 価格 -->
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price05', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/code.svg" alt="coding" />
            </div>
            <span class="price-item"> コーディング + WordPress化 </span>
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price06', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
          <div class="price-wrapper">
            <div class="price-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/WordPress-icon.svg" alt="wordpress" />
            </div>
            <span class="price-item"> 既存サイトのWordPress化 </span>
            <!-- ▼ 価格 -->
            <span class="price-cost">
              <?php
              $slug = 'custom_field';  // 取得するスラッグ名
              $page = get_page_by_path($slug);  // スラッグ名からページを取得
              $id = $page->ID; // ページのIDを取得
              $get_field = get_field_object('price07', $id); // フィールドオブジェクトを取得
              echo esc_html($get_field['value']); // フィールドの値をエスケープして出力
              ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ▼ Profile -->
  <section class="profile" id="profile">
    <div class="w-container">
      <h2 class="sec-title">Profile<span class="ja">私について</span></h2>
      <div class="p-container">
        <div class="profile-inner scroll-up">
          <div class="profile-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/profile.jpg" alt="profile-img" />
          </div>
          <div class="profile-text">
            <p class="profile-name">鶴岡 駿 - SHUN TSURUOKA</p>
            <p>
              はじめまして、千葉県出身の鶴岡 駿(つるおか
              しゅん)と申します。<br />
              4年制の大学を卒業後、区役所で4年、市役所で3年働いた後、2022年7月からWeb制作の学習を始めました。現在はWebサイト制作の活動をしております。<br />
              Web制作を通して、みなさまの魅力をお伝えするお手伝いができればと思っております。
            </p>
          </div>
        </div>
        <div class="btn-container">
          <a href="<?php echo esc_url(home_url('/profile/')); ?>" class="btn">もっと見る</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ▼ Contact -->
  <section class="contact" id="contact">
    <div class="w-container">
      <h2 class="sec-title">Contact<span class="ja">お問い合わせ</span></h2>
      <div class="contact-container">
        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdT4L2ttmnejIt1ho8NvNNlJDFM2_TOyEIuAEoXJmTb-LOtOg/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true;" class="form">
          <p>
            当方へのお問い合わせは、<br class="sp-only">下記のお問い合わせフォームより送信してください。
          </p>
          <dl class="form-container">
            <!-- お名前 -->
            <dt><span class="required">お名前</span></dt>
            <dd>
              <input type="text" name="entry.1207059317" class="input-text" size="60" value="" autocomplete="name" required />
            </dd>
            <!-- ふりがな -->
            <dt><span class="required">ふりがな</span></dt>
            <dd>
              <input type="text" name="entry.1469301132" class="input-text" size="60" value="" required />
            </dd>
            <!-- メールアドレス -->
            <dt><span class="required">メールアドレス</span></dt>
            <dd>
              <input type="email" name="entry.1757510862" class="input-text" size="60" value="" autocomplete="email" required />
            </dd>
            <!-- 会社名 -->
            <dt>会社名<span class="optional"></span></dt>
            <dd>
              <input type="text" name="entry.1442975567" class="input-text" size="60" value="" autocomplete="organization" />
            </dd>
            <!-- お問い合わせ内容 -->
            <dt><span class="required">お問い合わせ内容</span></dt>
            <dd>
              <textarea name="entry.1422758228" class="message" cols="40" rows="10" required></textarea>
            </dd>
            <!-- スパム対策 -->
            <dt><span class="required">スパム対策にご協力ください</span></dt>
            <dd>
              <input type="text" name="entry.860833466" class="input-text" size="60" value="" placeholder="「もりのくまさん」と入力してください。" autocomplete="spam" pattern="もりのくまさん" required />
            </dd>
          </dl>
          <p class="confirm-text">
            ご入力内容をご確認のうえ、<br class="sp-only">お間違えがなければ、送信ボタンを押して下さい。
          </p>
          <p><small>※送信ボタンをクリックすると、Googleフォームに遷移します。</small></p>
          <div class="btn-container">
            <input type="submit" value="送信する" />
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- ▲ Contact -->
</main>
<!-- ▲ メイン -->

<?php get_footer(); ?>