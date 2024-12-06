<?php get_header(); ?>

<main class="main">
  <!-- ▼ works -->
  <article>
    <section class="work" id="work">
      <?php if (have_posts()) : //もし記事があれば
      ?>
        <?php while (have_posts()) : //記事が存在する間、繰り返す
        ?>
          <div class="w-container">
            <?php the_post(); //投稿記事の情報を取得
            ?>
            <h1 class="work-title">
              <?php the_title(); ?>
            </h1>
            <!-- もしアイキャッチ画像があれば -->
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <!-- 代替の画像を表示 -->
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-image.png" alt="画像はありません">
            <?php endif; ?>
            <div class="concept">
              <?php the_content(); ?>
              <h2>コンセプト</h2>
              <dl>
                <dt><?php the_field('work-title01'); ?></dt>
                <dd><?php the_field('work-txt01'); ?></dd>
                <dt><?php the_field('work-title02'); ?></dt>
                <dd><?php the_field('work-txt02'); ?></dd>
                <dt><?php the_field('work-title03'); ?></dt>
                <dd><?php the_field('work-txt03'); ?></dd>
                <dt><?php the_field('work-title04'); ?></dt>
                <dd><?php the_field('work-txt04'); ?></dd>
                <dt><?php the_field('work-title05'); ?></dt>
                <dd><?php the_field('work-txt05'); ?></dd>
                <dt><?php the_field('work-title06'); ?></dt>
                <dd><?php the_field('work-txt06') ?></dd>
				<dt><?php the_field('work-title07'); ?></dt>
                <dd><?php the_field('work-txt07') ?></dd>
              </dl>
            </div>
            <div class="wire-frame">
              <h2>デザイン</h2>
              <figure>
                <img src="<?php the_field('design'); ?>" alt="">
              </figure>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <!-- 投稿データがない場合表示される部分 -->
          <p>記事が見つかりません</p>
        <?php endif; ?>
          </div>
    </section>
  </article>
  <!-- ▲ works -->
</main>

<?php get_footer(); ?>