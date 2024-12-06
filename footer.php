    <!-- ▼ フッター -->
    <footer class="footer">
      <div class="w-container">
        <div class="footer-container">
          <!-- ▼フッターナビ -->
          <nav class="nav">
            <ul class="main-menu">
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/')); ?>works/">Works<span class="ja">実績</span></a>
              </li>
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/')); ?>#skill">Skill<span class="ja">できること</span></a>
              </li>
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/profile/')); ?>">Profile<span class="ja">私について</span></a>
              </li>
              <li class="menu-item h-contact">
                <a href="<?php echo esc_url(home_url('/')); ?>#contact">Contact<span class="ja">お問い合わせ</span></a>
              </li>
            </ul>
          </nav>
          <!-- ▲フッターナビ -->
          <div class="contact-link">
            <p>
              制作の依頼・ご相談などお気軽にお問い合わせくださいませ。
            </p>
            <div class="sns-container">
              <a href="<?php echo esc_url(home_url('/')); ?>#contact">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/mail.svg" alt="お問い合わせ" />
              </a>
            </div>
          </div>
        </div>
        <!-- コピーライト -->
        <p class="copyright"><small>&copy; 2024 SHUN TSURUOKA</small></p>
      </div>
    </footer>
    <!-- ▲ フッター -->

    <!-- ▼ トップに戻るボタン -->
    <div id="pagetop">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="pagetop" aria-label="ページトップに戻る">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pagetop.svg" alt="ページトップに戻る" />
      </a>
    </div>
    <!-- ▲ トップに戻るボタン -->
    </body>
    <?php wp_footer(); ?>

    </html>