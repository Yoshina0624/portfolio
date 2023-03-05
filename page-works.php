<!-- 
    Template Name: 実績ページ
-->

<?php get_header(); ?>

<?php
$news_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'category_name' => 'news',
		'posts_per_page' => 5,
	)
);
?>
<?php if ( $news_query->have_posts() ) : ?>
	<?php while ( $news_query->have_posts() ) : ?>
		<?php $news_query->the_post(); ?>
		<p>処理内容</p>
	<?php endwhile; ?>
<?php endif; ?>


<main class="l_main">
    <div class="l_contents">
        <h2 class="title">WORKS</h2>
<?php if (have_posts() ) : ?>
	<?php while (have_posts() ) : ?>
		<?php the_post(); ?>

    <section class="case_section js_h-slide_trigger">
              <div class="l_contents js_h-slide">
                <div class="case_section-inner ">
                  <div class="case_section_wrapper">
                    <a href="https://keke-sito.com/river_recruit/">
                  
                    <?php the_post_thumbnail(null, array('class' => 'case_section_img')); ?>
                  </a>
                  </div>
                  <!-- /.case_section_wrapper -->
                  <div class="case_section_content">
                    <p class="case_section-num">
                    </p>
                    <h2 class="case_section_title">
                        <?php the_title(); ?>
                    </h2>
                    <p class="case_section_txt">
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                  <!-- /.case_section_content -->
                </div>
                <!-- /.case_section-inner -->
              </div>
              <!-- /.l_contents -->
            </section>

	<?php endwhile; 
        else:
  ?>
        <p>投稿データがありませんでした。</p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>



        <section class="case_section js_h-slide_trigger">
          <div class="l_contents">
            <div class="case_section-inner ">
              <div class="case_section_wrapper">
                <a href="https://keke-sito.com/mosya_free/service_site/">
                <img
                  src="<?php echo esc_url( get_template_directory_uri() . '/img/模写修行セキュリティ会社.png' ); ?>"
                  width="1016"
                  height="814"
                  alt="仮想セキュリティ会社ホームページ"
                  class="case_section_img"
                />
              </a>
              </div>
              <!-- /.case_section_wrapper -->
              <div class="case_section_content">
                <h2 class="case_section_title">
                  仮想サービス会社ホームページ
                </h2>
                <p class="case_section_txt">
                    HTML&CSS
                </p>
                <p class="case_section_txt">制作期間 : 約4時間</p>
                <p class="case_section_txt">
                    <a href="https://moshashugyo.com/">模写修行</a>で配布されているデザインのコーディングを行いました。<br>デザインはしていません。
                </p>
              </div>
              <!-- /.case_section_content -->
            </div>
            <!-- /.case_section-inner -->
          </div>

        </section>
        <section class="case_section js_h-slide_trigger">
          <div class="l_contents">
            <div class="case_section-inner ">
              <div class="case_section_wrapper">
                <a href="https://keke-sito.com/mosya_free/burger_shop/">
                <img
                  src="<?php echo esc_url( get_template_directory_uri() . '/img/burger_shop_.png' ); ?>"
                  width="1016"
                  height="814"
                  alt="ハンバーガーショップのホームページ"
                  class="case_section_img"
                />
              </a>
              </div>
              <!-- /.case_section_wrapper -->
              <div class="case_section_content">
                <h2 class="case_section_title">
                  仮想ハンバーガーショップのホームページ
                </h2>
                <p class="case_section_txt">
                    HTML&CSS
                </p>
                <p class="case_section_txt">制作期間 : 約4時間</p>
                <p class="case_section_txt">
                    <a href="https://moshashugyo.com/">模写修行</a>で配布されているデザインのコーディングを行いました。<br>デザインはしていません。
                </p>
              </div>
              <!-- /.case_section_content -->
            </div>
            <!-- /.case_section-inner -->
          </div>

        </section>
    
    </div>
</main>

<?php get_footer(); ?>