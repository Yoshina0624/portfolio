<!-- 
    Template Name: スキルページ
-->

<?php get_header(); ?>

<main>
    <div class="l_contents">
        <section id="skill" class="skill">
            <div class="skill_container">
                <h2 class="title">SKILL</h2>
                <div class="skill_contents">
                    <ul class="skill_list">
                            <li class="skill_item skill_html">
                                <img 
                                src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon awesome-html5.png' ); ?>"
                                width="150"
                                height="158"
                                class="skill_img skill_img_html"
                                alt="">
                                <p class="skill_content">HTML</p>
                            </li>
                            <li class="skill_item skill_css">
                                <img 
                                src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon awesome-css3-alt.png' ); ?>" 
                                width="151"
                                height="158"
                                class="skill_img skill_img_css"
                                alt="">
                                <p class="skill_content">CSS</p>
                            </li>
                            <li class="skill_item skill_js">
                                <img 
                                src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon simple-javascript.png' ); ?>" 
                                width="158"
                                height="158"
                                class="skill_img skill_img_js"
                                alt="">
                                <p class="skill_content">JavaScript</p>
                            </li>
                            <li class="skill_item skill_sass">
                                <img 
                                src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon awesome-sass.png' ); ?>" 
                                width="191"
                                height="143"
                                class="skill_img skill_img_sass"
                                alt="">
                                <p class="skill_content">Sass</p>
                            </li>
                            <li class="skill_item skill_wp">
                                <img 
                                src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon awesome-wordpress-simple.png' ); ?>"
                                width="150"
                                height="150"
                                class="skill_img skill_img_wp"
                                alt="">
                                <p class="skill_content">WordPress</p>
                            </li>
                            <li class="skill_item skill_jquery">
                                <img 
                                src="<?php echo esc_url( get_template_directory_uri() . '/img/Icon simple-jquery.png' ); ?>"
                                width="145"
                                height="143"
                                class="skill_img skill_img_jquery"
                                alt="">
                                <p class="skill_content">jQuery</p>
                            </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>