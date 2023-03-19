<!-- 
    Template Name: 実績ページ
-->

<?php get_header(); ?>

<?php
$news_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'category_name' => 'works',//slug名を入れる
		'posts_per_page' => 5,
	)
);
?>


<main class="l_main">
    <div class="l_contents">
        <h2 class="title">WORKS</h2>

  <?php if ( $news_query->have_posts() ) : ?>
    <?php while ( $news_query->have_posts() ) : ?>
      <?php $news_query->the_post(); ?>
      <section class="case_section js_h-slide_trigger">
                <div class="case_contents js_h-slide">
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
                        <?php the_content(); ?>
                      </p>
                    </div>
                    <!-- /.case_section_content -->
                  </div>
                  <!-- /.case_section-inner -->
                </div>
                <!-- /.l_contents -->
              </section>
  
  
    <?php endwhile; 
    else:?>
  
    <p>投稿データがありませんでした。</p> 
  <?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php 
the_posts_pagination(array(
  'screen_reader_text' => ' ',
  'prev_text' => '',
  'next_text' => ''
)); 
?>
<!-- /.pagination -->

<div class="m_cta">
      <h2 class="m_cta_copy">お問い合わせはこちら</h2>
      <p class="m_cta_txt">
        webサイト制作について
        お気軽にご相談ください
      </p>

      <div class="m_btn-wrapper m_btn-wrapper__center m_cta_btn-wrapper">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="m_btn m_btn__md m_btn__cta">
          無料で相談する
        </a>
      </div>
      <!-- /.m_btn-wrapper -->
    </div>
    <!-- /.m_cta -->
    </div>
</main>

<?php get_footer(); ?>