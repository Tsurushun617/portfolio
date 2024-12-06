<?php get_header(); ?>

<main class="main">
  <div class="w-container">
    <?php breadcrumb(); ?>
  </div>
  <!-- ▼ works -->
  <article>
    <section class="works" id="works">
      <div class="w-container">
        <h2 class="sec-title">Works<span class="ja">実績</span></h2>
        <div class="tab">
          <!-- ▼ タブ -->
          <ul class="tab-list">
            <li class="tab-item">コーディング</li>
            <li class="tab-item">Webマーケティング</li>
            <li class="tab-item"><?php echo get_cat_name(1); ?></li>
          </ul>
          <!-- ▲ タブ -->
          <!-- ▼ 作品集 -->
          <div class="tab-box">
            <?php
            // カスタム投稿タイプ "works" のクエリを作成
            $args = array(
              'post_type' => 'works', // カスタム投稿タイプを指定
              'posts_per_page' => 6, // 表示する記事数を指定
              'tax_query' => array(
                array(
                  'taxonomy' => 'category', // カテゴリータクソノミーを指定
                  'field' => 'slug',
                  'terms' => 'cording', // カテゴリーが "cording" の記事を取得
                ),
              ),
              'orderby' => 'date',
            );
            ?>
            <!-- コーディング -->
            <ul class="work-list">
              <?php
              $website_query = new WP_Query($args);
              // カスタムクエリが有効な場合
              if ($website_query->have_posts()) :
                while ($website_query->have_posts()) :
                  $website_query->the_post();
                  // ここに記事の表示コードを追加
              ?>
                  <li class="work-item">
                    <a href="<?php the_permalink(); ?>">
                      <h3 class="work-title">
                        <?php the_title(); ?>
                      </h3>
                      <figure class="work-thumb">
                        <!-- もしアイキャッチ画像があれば -->
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                          <!-- 代替の画像を表示 -->
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-image.png" alt="画像はありません">
                        <?php endif; ?>
                      </figure>
                      <p class="work-desc">
                        <?php the_field('works-desc'); ?>
                      </p>
                      <p class="work-tag">
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
              <?php
                endwhile;
                // ループをリセット
                wp_reset_postdata();
              else :
                // 該当する記事がない場合の表示
                echo '該当する記事がありません。';
              endif;
              ?>
            </ul>
            <!-- Webマーケティング -->
            <?php
            // カスタム投稿タイプ "works" のクエリを作成
            $args = array(
              'post_type' => 'works', // カスタム投稿タイプを指定
              'posts_per_page' => 4, // 表示する記事数を指定
              'tax_query' => array(
                array(
                  'taxonomy' => 'category', // カテゴリータクソノミーを指定
                  'field' => 'slug',
                  'terms' => 'web-marketing', // カテゴリーが "website" の記事を取得
                ),
              ),
              'orderby' => 'date',
            );
            ?>
            <ul class="work-list">
              <?php
              $cording_query = new WP_Query($args);
              // カスタムクエリが有効な場合
              if ($cording_query->have_posts()) :
                while ($cording_query->have_posts()) :
                  $cording_query->the_post();
                  // ここに記事の表示コードを追加
              ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <h3><?php the_title(); ?></h3>
                      <figure>
                        <!-- もしアイキャッチ画像があれば -->
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                          <!-- 代替の画像を表示 -->
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-image.png" alt="画像はありません">
                        <?php endif; ?>
                      </figure>
                      <p>
                        <?php the_field('works-desc'); ?>
                      </p>
                    </a>
                  </li>
              <?php
                endwhile;
                // ループをリセット
                wp_reset_postdata();
              else :
                // 該当する記事がない場合の表示
                echo '該当する記事がありません。';
              endif;
              ?>
            </ul>
            <!-- Webサイト -->
            <?php
            // カスタム投稿タイプ "works" のクエリを作成
            $args = array(
              'post_type' => 'works', // カスタム投稿タイプを指定
              'posts_per_page' => 4, // 表示する記事数を指定
              'tax_query' => array(
                array(
                  'taxonomy' => 'category', // カテゴリータクソノミーを指定
                  'field' => 'slug',
                  'terms' => 'website', // カテゴリーが "website" の記事を取得
                ),
              ),
              'post__in' => array(299, 115, 122,),
              'orderby' => 'post__in',
            );
            ?>
            <ul class="work-list">
              <?php
              $cording_query = new WP_Query($args);
              // カスタムクエリが有効な場合
              if ($cording_query->have_posts()) :
                while ($cording_query->have_posts()) :
                  $cording_query->the_post();
                  // ここに記事の表示コードを追加
              ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <h3><?php the_title(); ?></h3>
                      <figure>
                        <!-- もしアイキャッチ画像があれば -->
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                          <!-- 代替の画像を表示 -->
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-image.png" alt="画像はありません">
                        <?php endif; ?>
                      </figure>
                      <p>
                        <?php the_field('works-desc'); ?>
                      </p>
                    </a>
                  </li>
              <?php
                endwhile;
                // ループをリセット
                wp_reset_postdata();
              else :
                // 該当する記事がない場合の表示
                echo '該当する記事がありません。';
              endif;
              ?>
            </ul>
          </div>
          <!-- ▲ 作品集 -->
        </div>
      </div>
    </section>
  </article>
  <!-- ▲ works -->
</main>
<?php get_footer(); ?>