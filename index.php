<?php get_header(); ?>

<!-- ▼ メインビジュアル -->
<section class="hero">
  <div class="hero-box hero-container">
    <div class="hero-item">
      <h2 class="hero-title">
        Shun Tsuruoka's<br> Portofolio
      </h2>
      <div class="hero-txt fadeIn">
        <p>
          デザインを忠実に再現できるコーディングスキルを磨いています。<br>
          SEOやWebアクセシビリティの知識も活かして、Webサイトの改善に取り組んでいます。<br>
          クライアントやエンドユーザーのニーズを的確に捉え、チームメンバーと共により良いWebサイトを作り上げたいと考えています。<br>
          <a href="<?php echo esc_url(home_url('/profile/')); ?>">プロフィールを見る»</a>
        </p>
      </div>
    </div>
    <div class="hero-item">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/kv.jpg" alt="千葉の九十九里浜で長男と一緒に遊んでいるときの写真">
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
        これまでに制作したサイトやWebマーケティングの実績を紹介しております。
      </p>
      <div class="works-container">
        <?php
        $args = array(
          'post_type' => 'works', // カスタム投稿タイプの名前
          'posts_per_page' => 6, // 表示する投稿数
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
                  <p class="w-category">
                    <?php
                    // カテゴリーを表示
                    $categories = get_the_category();
                    if (! empty($categories)) {
                      foreach ($categories as $category) {
                        echo  $category->name;
                      }
                    }
                    ?>
                  </p>
                </a>
              </li>
            <?php endwhile;
            wp_reset_postdata();
          else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>
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
      <h2 class="sec-title">Skill<span class="ja">できること・得意なこと</span></h2>
      <div class="skill-container">
        <ul class="s-grid-list">
          <!-- コーディング -->
          <li class="s-grid-item scroll-up">
            <h3 class="s-title">
              Cording<span class="ja">コーディング</span>
            </h3>
            <figure class="service-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_code.svg" alt="コーディング" />
            </figure>
            <dl class="s-list">
              <dt>
                言語 / ツール
              </dt>
              <dd>
                HTML/CSS/JavaScript/WordPress・PHP
                VSCode（Cursor）/Local by flywheel/Figma/Illustrator</dd>
              <dt>デザインに忠実にコーディング</dt>
              <dd>
                ディレクターやデザイナーと密に協力し、デザインデータの細かなニュアンスを最大限に尊重し、限りなくデザインに忠実なコーディングを行います。<br>
              <dt>保守性を意識したコーディング</dt>
              <dd>
                SASSを活用し、保守性と拡張性を高め、効率的なCSSの管理を実現します。
              </dd>
              <dt>SEO最適化</dt>
              <dd>単にデザインを再現するだけでなく、SEOを意識した構造設計と、画像圧縮、簡潔なコードによる高速化を行い、ユーザー体験を高めます。
              <dt>Git・GitHubも
              </dt>
              <dd>
                GitやGitHubなどのバージョン管理システムの実務経験を有しており、複数人での共同作業も可能です。
              </dd>
            </dl>
          </li>
          <!-- Webサイト運用 -->
          <li class="s-grid-item scroll-up">
            <h3 class="s-title">
              WebMerketing<span class="ja">Webサイト運用</span>
            </h3>
            <figure class="service-icon">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_analytics.svg"
                alt="Webサイト運用" />
            </figure>
            <dl class="s-list">
              <dt>保守・バックアップ
              </dt>
              <dd>
                年間10サイト以上のWebサイトの保守・運用に携わり、データ保護とサイト修正をしてきました。
              </dd>
              <dt>分析ツール導入</dt>
              <dd>
                GA4、Googleタグマネージャー、Googleサーチコンソール、Microsoft
                Clarityなどの分析ツールを駆使したWebサイト運用を行ってきました。
              </dd>
              <dt>Webサイト分析・改善</dt>
              <dd>
                GA4では、カスタムイベントの作成やキーイベントの計測、詳細なレポート分析を行い、ユーザー行動を深く理解し、Webサイトの改善点を特定してきました。 </dd>
              <dt>Webサイト運用の実績</dt>
              <dd>
                BtoC企業のコーポレートサイトでは、平均掲載順位を8.9位から5.1位に、クリック率を1.5%から4.1%に改善し、月あたりのCVをを30%以上増加させることに貢献しました。<br>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
      <div class="btn-container">
        <a href="<?php echo esc_url(home_url('/profile/')); ?>" class="btn">詳しくみる</a>
      </div>
    </div>
  </section>

  <!-- ▼ Contact -->
  <section class="contact" id="contact">
    <div class="w-container">
      <h2 class="sec-title">Contact<span class="ja">お問い合わせ</span></h2>
      <div class="contact-container">
        <form
          action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdT4L2ttmnejIt1ho8NvNNlJDFM2_TOyEIuAEoXJmTb-LOtOg/formResponse"
          method="post" target="hidden_iframe" onsubmit="submitted=true;" class="form">
          <p>
            当方へのお問い合わせは、<br class="sp-only">下記のお問い合わせフォームより送信してください。
          </p>
          <dl class="form-container">
            <!-- お名前 -->
            <dt><span class="required">お名前</span></dt>
            <dd>
              <input type="text" name="entry.1207059317" class="input-text" size="60" value="" autocomplete="name"
                required />
            </dd>
            <!-- ふりがな -->
            <dt><span class="required">ふりがな</span></dt>
            <dd>
              <input type="text" name="entry.1469301132" class="input-text" size="60" value="" required />
            </dd>
            <!-- メールアドレス -->
            <dt><span class="required">メールアドレス</span></dt>
            <dd>
              <input type="email" name="entry.1757510862" class="input-text" size="60" value="" autocomplete="email"
                required />
            </dd>
            <!-- 会社名 -->
            <dt>会社名<span class="optional"></span></dt>
            <dd>
              <input type="text" name="entry.1442975567" class="input-text" size="60" value=""
                autocomplete="organization" />
            </dd>
            <!-- お問い合わせ内容 -->
            <dt><span class="required">お問い合わせ内容</span></dt>
            <dd>
              <textarea name="entry.1422758228" class="message" cols="40" rows="10" required></textarea>
            </dd>
            <!-- スパム対策 -->
            <dt><span class="required">スパム対策にご協力ください</span></dt>
            <dd>
              <input type="text" name="entry.860833466" class="input-text" size="60" value=""
                placeholder="「もりのくまさん」と入力してください。" autocomplete="spam" pattern="もりのくまさん" required />
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