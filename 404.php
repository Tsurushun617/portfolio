<?php get_header(); ?>

<!-- ▼ メイン -->
<main class="main">
  <!-- ▼ 404エラー -->
  <section class="error">
    <div class="e-container">
      <h1 date-title="Not Found">ページが見つかりません(;_;)</h1>
      <p>お探しのページは削除されたか、名前が変更された可能性があります。</p>
      <p>
        直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認ください。
      </p>
      <p>
        ブラウザの再読み込みを行ってもこのページが表示される場合は<a href="<?php echo esc_url(home_url('/')); ?>">»トップページ</a>から目的のページをお探しください。
      </p>
    </div>
  </section>
  <!-- ▲ 404エラー -->
</main>
<!-- ▲ メイン -->

<?php get_footer(); ?>