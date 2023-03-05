<!-- アクセスしたURLにページが存在しなかった場合に表示されるページ -->
<?php get_header(); ?>

<main class="l_main">
  <div class="m_kv">
    <div class="m_kv-inner l_container-lg">
      <div class="m_kv-box">
        <h1 class="m_kv-title">404 Not Found</h1>
        <p class="m_kv-desc">
          お探しのページは見つかりません。
        </p>
      </div>
      <!-- /.m_kv-box -->
    </div>
    <!-- /.m_kv-inner -->
  </div>
  <!-- /.m_kv -->


  <div class="m_btn-wrapper m_btn-wrapper__center m_cta_btn-wrapper">
        <a href="<?php echo esc_url( home_url( '' ) ); ?>" class="m_btn m_btn__md  notfound_txt">
          トップページに戻る
        </a>
      </div>
      <!-- /.m_btn-wrapper -->

</main>

<?php get_footer(); ?>