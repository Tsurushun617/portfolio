<?php get_header(); ?>

<!-- ▼ メイン -->
<main class="main">
  <div class="w-container">
    <?php breadcrumb(); ?>
  </div>
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
              1年間のWeb制作会社での実務経験を通じて、コーポレートサイトの制作・修正、LPのコーディング、WordPressのカスタマイズなど、幅広い業務に携わってきました。
            </p>
            <p>
              HTML、CSS、JavaScript、PHPを用いたコーディングはもちろん、GA4などの分析ツールの導入・アクセス解析を行い、ユーザー行動を深く理解することで、Webサイトの改善点を発見し、コンバージョン率向上に貢献してきました。
            </p>
            <p>
              チームメンバーが日々の業務で活用できるよう、分析ツール導入方法や、データの見方に関するノウハウをまとめたマニュアルを作成し、チームメンバーへの共有・説明を行ってきました。
            </p>
          </div>
        </div>
      </div>
  </section>
  <!-- ▲ profile -->

  <!-- ▼ skill -->
  <section class="skill">
    <div class="w-container">
      <h2 class="sec-title">
        Skill<span class="ja">できること・得意なこと</span>
      </h2>
      <!-- ▼ chaet -->
      <div class="chart">
        <div class="w-container">
          <div class="chart-container">
            <ul class="chart-list scroll-up">
              <!-- チャートその１ -->
              <li class="chart-item">
                <div class="chart-title">
                  <h3><span class="list-num">01</span>言語</h3>
                </div>
                <div class="chart-desc">
                  <p>
                    プログラミング言語の自己評価です。
                  </p>
                </div>
                <div class="radar-chart radar-chart01">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200">
                    <g stroke="#dce5eb">
                      <path d="M 100 100 L 100.0 0.0" />
                      <path d="M 100 100 L 195.1 69.1" />
                      <path d="M 100 100 L 158.8 180.9" />
                      <path d="M 100 100 L 41.2 180.9" />
                      <path d="M 100 100 L 4.9 69.1" />
                    </g>
                    <g stroke="#dce5eb" fill="none">
                      <path d="M 100.0 0.0 L 195.1 69.1 L 158.8 180.9 L 41.2 180.9 L 4.9 69.1 L 100.0 0.0" />
                      <path d="M 100.0 20.0 L 176.1 75.3 L 147.0 164.7 L 53.0 164.7 L 23.9 75.3 L 100.0 20.0" />
                      <path d="M 100.0 40.0 L 157.1 81.5 L 135.3 148.5 L 64.7 148.5 L 42.9 81.5 L 100.0 40.0" />
                      <path d="M 100.0 60.0 L 138.0 87.6 L 123.5 132.4 L 76.5 132.4 L 62.0 87.6 L 100.0 60.0" />
                      <path d="M 100.0 80.0 L 119.0 93.8 L 111.8 116.2 L 88.2 116.2 L 81.0 93.8 L 100.0 80.0" />
                    </g>
                    <path d="M 100.0 10.0 L 176.1 75.3 L 141.1 156.6 L 64.7 148.5 L 42.9 81.5 L 100.0 10.0" fill="#cc100030" stroke="#cc1000" />
                    <g fill="#cc1000">
                      <circle cx="100.0" cy="10.0" r="3" />
                      <circle cx="176.1" cy="75.3" r="3" />
                      <circle cx="141.1" cy="156.6" r="3" />
                      <circle cx="64.7" cy="148.5" r="3" />
                      <circle cx="42.9" cy="81.5" r="3" />
                    </g>
                  </svg>
                  <dl>
                    <div>
                      <dt>HTML</dt>
                      <dd>9.0</dd>
                    </div>
                    <div>
                      <dt>CSS</dt>
                      <dd>8.0</dd>
                    </div>
                    <div>
                      <dt>SASS</dt>
                      <dd>7.0</dd>
                    </div>
                    <div>
                      <dt>JavaScript</dt>
                      <dd>6.0</dd>
                    </div>
                    <div>
                      <dt>WordPress・PHP</dt>
                      <dd>6.0</dd>
                    </div>
                  </dl>
                </div>
              </li>
              <!-- チャートその２ -->
              <li class="chart-item">
                <div class="chart-title">
                  <h3><span class="list-num">02</span>ツール</h3>
                </div>
                <div class="chart-desc">
                  <p>
                    実務で使えるツールです。
                  </p>
                </div>
                <div class="radar-chart radar-chart02">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200">
                    <g stroke="#dce5eb">
                      <path d="M 100 100 L 100.0 0.0" />
                      <path d="M 100 100 L 178.2 37.7" />
                      <path d="M 100 100 L 197.5 122.3" />
                      <path d="M 100 100 L 143.4 190.1" />
                      <path d="M 100 100 L 56.6 190.1" />
                      <path d="M 100 100 L 2.5 122.3" />
                      <path d="M 100 100 L 21.8 37.7" />
                    </g>
                    <g stroke="#dce5eb" fill="none">
                      <path d="M 100.0 0.0 L 178.2 37.7 L 197.5 122.3 L 143.4 190.1 L 56.6 190.1 L 2.5 122.3 L 21.8 37.7 L 100.0 0.0" />
                      <path d="M 100.0 14.3 L 167.0 46.6 L 183.6 119.1 L 137.2 177.2 L 62.8 177.2 L 16.4 119.1 L 33.0 46.6 L 100.0 14.3" />
                      <path d="M 100.0 28.6 L 155.8 55.5 L 169.6 115.9 L 131.0 164.4 L 69.0 164.4 L 30.4 115.9 L 44.2 55.5 L 100.0 28.6" />
                      <path d="M 100.0 42.9 L 144.7 64.4 L 155.7 112.7 L 124.8 151.5 L 75.2 151.5 L 44.3 112.7 L 55.3 64.4 L 100.0 42.9" />
                      <path d="M 100.0 57.1 L 133.5 73.3 L 141.8 109.5 L 118.6 138.6 L 81.4 138.6 L 58.2 109.5 L 66.5 73.3 L 100.0 57.1" />
                      <path d="M 100.0 71.4 L 122.3 82.2 L 127.9 106.4 L 112.4 125.7 L 87.6 125.7 L 72.1 106.4 L 77.7 82.2 L 100.0 71.4" />
                      <path d="M 100.0 85.7 L 111.2 91.1 L 113.9 103.2 L 106.2 112.9 L 93.8 112.9 L 86.1 103.2 L 88.8 91.1 L 100.0 85.7" />
                    </g>
                    <path d="M 100.0 20.0 L 146.9 62.6 L 187.7 120.0 L 121.7 145.0 L 74.0 154.1 L 12.3 120.0 L 45.3 56.4 L 100.0 20.0" fill="#cc100030" stroke="#cc1000" />
                    <g fill="#cc1000">
                      <circle cx="100.0" cy="20.0" r="3" />
                      <circle cx="146.9" cy="62.6" r="3" />
                      <circle cx="187.7" cy="120.0" r="3" />
                      <circle cx="121.7" cy="145.0" r="3" />
                      <circle cx="74.0" cy="154.1" r="3" />
                      <circle cx="12.3" cy="120.0" r="3" />
                      <circle cx="45.3" cy="56.4" r="3" />
                    </g>
                  </svg>
                  <dl>
                    <div>
                      <dt>Visual Studio Code</dt>
                      <dd>8.0</dd>
                    </div>
                    <div>
                      <dt>Git・GitHub</dt>
                      <dd>6.0</dd>
                    </div>
                    <div>
                      <dt>FileZilla</dt>
                      <dd>9.0</dd>
                    </div>
                    <div>
                      <dt>Figma</dt>
                      <dd>5.0</dd>
                    </div>
                    <div>
                      <dt>illustrator</dt>
                      <dd>6.0</dd>
                    </div>
                    <div>
                      <dt>GA4・<br class="pcNone">サーチコンソール
                      </dt>
                      <dd>9.0</dd>
                    </div>
                    <div>
                      <dt>Googleタグマネージャー</dt>
                      <dd>7.0</dd>
                    </div>
                  </dl>
                </div>
              </li>
              <!-- チャートその３ -->
              <li class="chart-item">
                <div class="chart-title">
                  <h3><span class="list-num">03</span>属性・気質</h3>
                </div>
                <div class="chart-desc">
                  <p>
                    私の属性・気質です。<br>
                    性格診断の結果は<a href="https://www.16personalities.com/ja/infj%E5%9E%8B%E3%81%AE%E6%80%A7%E6%A0%BC" target="_blank">「INFJ型の提唱者」</a>でした。
                  </p>
                </div>
                <div class="radar-chart radar-chart03">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200">
                    <g stroke="#dce5eb">
                      <path d="M 100 100 L 100.0 0.0" />
                      <path d="M 100 100 L 186.6 50.0" />
                      <path d="M 100 100 L 186.6 150.0" />
                      <path d="M 100 100 L 100.0 200.0" />
                      <path d="M 100 100 L 13.4 150.0" />
                      <path d="M 100 100 L 13.4 50.0" />
                    </g>
                    <g stroke="#dce5eb" fill="none">
                      <path d="M 100.0 0.0 L 186.6 50.0 L 186.6 150.0 L 100.0 200.0 L 13.4 150.0 L 13.4 50.0 L 100.0 0.0" />
                      <path d="M 100.0 16.7 L 172.2 58.3 L 172.2 141.7 L 100.0 183.3 L 27.8 141.7 L 27.8 58.3 L 100.0 16.7" />
                      <path d="M 100.0 33.3 L 157.7 66.7 L 157.7 133.3 L 100.0 166.7 L 42.3 133.3 L 42.3 66.7 L 100.0 33.3" />
                      <path d="M 100.0 50.0 L 143.3 75.0 L 143.3 125.0 L 100.0 150.0 L 56.7 125.0 L 56.7 75.0 L 100.0 50.0" />
                      <path d="M 100.0 66.7 L 128.9 83.3 L 128.9 116.7 L 100.0 133.3 L 71.1 116.7 L 71.1 83.3 L 100.0 66.7" />
                      <path d="M 100.0 83.3 L 114.4 91.7 L 114.4 108.3 L 100.0 116.7 L 85.6 108.3 L 85.6 91.7 L 100.0 83.3" />
                    </g>
                    <path d="M 100.0 20.0 L 186.6 50.0 L 160.6 135.0 L 100.0 170.0 L 13.4 150.0 L 30.7 60.0 L 100.0 20.0" fill="#cc100030" stroke="#cc1000" />
                    <g fill="#cc1000">
                      <circle cx="100.0" cy="20.0" r="3" />
                      <circle cx="186.6" cy="50.0" r="3" />
                      <circle cx="160.6" cy="135.0" r="3" />
                      <circle cx="100.0" cy="170.0" r="3" />
                      <circle cx="13.4" cy="150.0" r="3" />
                      <circle cx="30.7" cy="60.0" r="3" />
                    </g>
                  </svg>
                  <dl>
                    <div>
                      <dt>分析</dt>
                      <dd>8.0</dd>
                    </div>
                    <div>
                      <dt>共感</dt>
                      <dd>10.0</dd>
                    </div>
                    <div>
                      <dt>協調性</dt>
                      <dd>7.0</dd>
                    </div>
                    <div>
                      <dt>コミュニケーション</dt>
                      <dd>7.0</dd>
                    </div>
                    <div>
                      <dt>内向性</dt>
                      <dd>10.0</dd>
                    </div>
                    <div>
                      <dt>誠実</dt>
                      <dd>8.0</dd>
                    </div>
                  </dl>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ▲ chart -->
      <div class="skill-container">
        <div class="textbox">
          <h3 class="s-title">コーディングについて</h3>
          <div class="scroll-up">
            <h4>デザインに忠実にコーディング</h4>
            <p class="s-text">
              ディレクターやデザイナーと密に協力し、デザインデータの細かなニュアンスを最大限に尊重し、限りなくデザインに忠実なコーディングを行います。
            </p>
            <h4>保守性を意識したコーディング</h4>
            <p class="s-text">
              コードのメンテナンス性に配慮し、適宜コメントをつけることで、チーム開発においてもスムーズな連携を実現します。<br>
              SASSを活用することで、CSSの保守性と拡張性を高め、効率的なスタイルシートの管理を実現しています。あらゆるデバイスの画面サイズに柔軟に対応し、レイアウトが崩れることなく、快適な閲覧体験を提供するコーディングを得意としています。
            </p>
            <h4>SEO最適化</h4>
            <p class="s-text">
              単にデザインを再現するだけでなく、SEOを意識した構造設計と、画像圧縮、簡潔なコードによる高速化を行い、ユーザー体験を高めます。
            </p>
            <h4>Git・GitHubを用いた共同作業</h4>
            <p class="s-text">
              GitやGitHubなどのバージョン管理システムの実務経験を有しており、複数人での共同作業も可能です。<br>
              <a href="https://github.com/Tsurushun617" target="_blank">» GitHub</a>
            </p>
          </div>
        </div>
        <div class="textbox">
          <h3 class="s-title">Webサイト運用について</h3>
          <h4>Webサイト運用の実績</h4>
          <div class="scroll-up">
            <p class="s-text">
              年間10サイト以上のWebサイトの保守・運用に携わり、定期的なバックアップとサイト修正を実施することで、データ保護とサイト修正をしてきました。
            </p>
            <h4>分析ツール導入</h4>
            <p class="s-text">
              コーダーとして、HTML、CSS、JavaScriptを用いたWebサイトの構築だけでなく、Webマーケターとしての経験も活かし、GA4、Googleタグマネージャー、Googleサーチコンソール、Microsoft Clarityなどの分析ツールを駆使したデータドリブンなWebサイト運用を行ってきました。
            </p>
            <h4>Webサイト分析・改善</h4>
            <p class="s-text">
              GA4では、カスタムイベントの作成やキーイベントの計測、詳細なレポート分析を行い、ユーザー行動を深く理解し、Webサイトの改善点を特定してきました。<br>これにより、クライアントのWebサイトのコンバージョン率向上やユーザーエンゲージメントの改善に貢献してきました。
            </p>
            <h4>Webサイト運用の実績</h4>
            <p class="s-text">
              GoogleアナリティクスやMicrosoft Clarityを用いた詳細なアクセス分析に基づき、あるBtoC企業のコーポレートサイトでは、平均掲載順位を8.9位から5.1位に、クリック率を1.5%から4.1%に改善し、月あたりのCVをを30%以上増加させることに貢献しました。<br>
              今後も、最新のSEOトレンドを学び、より効果的なWebサイト運営を支援していきたいと考えています。
            </p>
          </div>
        </div>
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
                <a href="https://www.rikkyo.ac.jp/undergraduate/lp/" target="_blank">立教大学法学部</a>へ進学。<br />国際的な感覚と幅広い教養を身に着けるため、立教大学への入学を決める。
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
                千葉県の市役所を退職する。<br />行政機関では身に着けられないスキルを磨くために、独学でWeb系スキルを学習する。オンラインスクールや書籍、インターネット教材を用いて、Webサイト制作の学習を独学。
              </p>
            </div>
          </li>
          <li class="career-item">
            <p class="timeline-date">2024.1〜現在</p>
            <div class="timeline-content">
              <p>
                Web制作・Webマーケティング会社（<a href="https://soichiro.co.jp/" target="_blank">株式会社Soichiro</a>）に就職。<br>
                コーディング、Webマーケティングの担当になり、実務経験を積む。
              </p>
            </div>
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