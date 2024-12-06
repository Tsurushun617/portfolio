<?php get_header(); ?>

<!-- ▼ メイン -->
<main class="main">
  <!-- ▼ profile -->
  <section class="profile">
    <div class="w-container">
      <h2 class="sec-title">Profile<span class="ja">私について</span></h2>
      <div class="p-container">
        <div class="profile-inner">
          <div class="profile-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/profile.jpg" alt="profile-img" />
          </div>
          <div class="profile-text">
            <p class="profile-name typing">鶴岡 駿 - SHUN TSURUOKA</p>
            <!-- プロフィール詳細 -->
            <p>
              <?php the_field('profile'); ?>
            </p>
          </div>
        </div>
      </div>
  </section>
  <!-- ▲ profile -->

  <!-- ▼ strength -->
  <section class="strength">
    <div class="w-container">
      <h2 class="sec-title">Strength<span class="ja">私の強み</span></h2>
      <div class="strength-container">
        <ul class="strength-list scroll-up">
          <!-- 強みその１ -->
          <li class="strength-item">
            <div class="strength-title">
              <h3><span class="s-list-num">01</span><?php the_field('strength01'); ?></h3>
            </div>

            <div class="strength-description">
              <p>
                <?php the_field('strength01_desc'); ?>
              </p>
            </div>
          </li>
          <!-- 強みその２ -->
          <li class="strength-item">
            <div class="strength-title">
              <h3><span class="s-list-num">02</span><?php the_field('strength02'); ?></h3>
            </div>
            <div class="strength-description">
              <p>
                <?php the_field('strength02_desc'); ?>
              </p>
            </div>
          </li>
          <!-- 強みその３ -->
          <li class="strength-item">
            <div class="strength-title">
              <h3><span class="s-list-num">03</span><?php the_field('strength03'); ?></h3>
            </div>
            <div class="strength-description">
              <p>
                <?php the_field('strength03_desc'); ?>
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ▲ strength -->

  <!-- ▼ policy -->
  <section class="policy">
    <div class="w-container">
      <h2 class="sec-title">
        Concept<span class="ja">大切にしていること</span>
      </h2>
      <div class="policy-container">
        <h3 class="p-title">使いやすい、わかりやすい、美しい。</h3>
        <p class="p-text scroll-up">
          私は<strong>ユーザビリティの向上</strong>を大切にしています。<br>
          区役所・市役所にて７年間高齢者福祉の業務に携わった経験から、ユーザビリティへの配慮の重要性を痛感しました。
        </p>
        <p class="p-text scroll-up">
          「スマホを使いこなしたいけど操作が難しい」「文字が小さくて読めない」「ボタンが押しにくい」など、ふつうの人にとっての「ふつう」がふつうではないと感じる人が多くいる現実を目の当たりにしました。<br>
          その経験から、私は美しさやクリエイティブな要素だけでなく、ユーザーがサイトを快適に利用できることも大切な要素だと考えています。
        </p>
        <p class="p-text scroll-up">
          ホームページの本来の目的を見失わず、お客様とユーザー双方の思いをしっかりと形にするホームページを作り上げることを私は大切にしています。
        </p>
      </div>
    </div>
  </section>
  <!-- ▲ policy -->

  <!-- ▼ career -->
  <section class="career">
    <div class="w-container">
      <h2 class="sec-title">
        Career<span class="ja">これまでのこと</span>
      </h2>
      <div class="career-container">
        <ul class="career-list scroll-up">
          <li class="career-item">
            <p class="timeline-date">1990.6</p>
            <div class="timeline-content">
              <p>千葉県に生まれる。幼少期から外で遊ぶのが好きだった。</p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2006.4</p>
            <div class="timeline-content">
              <p>
                小学3年生から野球をはじめ、進学した高校では硬式野球部に所属する。<br />高校2年時に全国大会への出場を果たす。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2010.4</p>
            <div class="timeline-content">
              <p>
                立教大学法学部へ進学。<br />国際的な感覚と幅広い教養を身に着けるため、立教大学への入学を決める。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2014.4</p>
            <div class="timeline-content">
              <p>
                東京都の区役所に入庁。<br />人口減少時代における地域社会のあり方に興味関心があったので、東京都の区役所に入庁する。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2018.4</p>
            <div class="timeline-content">
              <p>
                千葉県の市役所へ転職。<br />少子高齢化が進む郊外の市町村と地域社会への関心が高まり、地元の市役所へ転職する。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2020.3</p>
            <div class="timeline-content">
              <p>
                市役所で勤務する間、大規模な自然災害や感染症の流行を経験し、インターネット技術の重要性を感じる。公務員として働く傍ら、WordPressブログを開設する。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2021.3</p>
            <div class="timeline-content">
              <p>
                千葉県の市役所を退職する。<br />行政機関では身に着けられないスキルを磨くために、独学でWeb系スキルを学習する。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2022.7</p>
            <div class="timeline-content">
              <p>
                本格的にWebサイト制作に着手する。<br />オンラインスクールや書籍、インターネット教材を用いて、Webサイト制作の学習を独学で開始する。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2023.3</p>
            <div class="timeline-content">
              <p>
                WordPressテーマを自作する。<br />UI・UXを意識したコーディングを心がけるようになる。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2023.9</p>
            <div class="timeline-content">
              <p>
                自作したWordPressテーマをアップデートする。<br />デザインデータに忠実なコーディングを目指し、特訓中。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ▲ career -->

  <!-- ▼ photo -->
  <section class="photo">
    <div class="w-container">
      <h2 class="sec-title">
        Photo Library<span class="ja">自分を表す9枚の写真</span>
      </h2>
      <div class="photo-container">
        <ul class="photo-list">
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo01'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo01_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo02'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo02_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo03'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo03_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/photolibrary/photo-4.JPG" alt="">
              <figcaption class="mask">
                <?php the_field('photo04_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo05'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo05_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo06'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo06_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo07'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo07_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo08'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo08_cap'); ?>
              </figcaption>
            </figure>
          </li>
          <li class="photo-item scroll-up">
            <figure class="mask-contianer">
              <img src="<?php the_field('photo09'); ?>" alt="">
              <figcaption class="mask">
                <?php the_field('photo09_cap'); ?>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- ▲ photo -->
</main>
<!-- ▲ メイン -->

<?php get_footer(); ?>