<footer class="l_footer">
    <p class="l_footer_logo">Keisuke Saito</p>
    <ul class="l_sns-list">
    <li class="l_sns-item"><a href="https://twitter.com/keke_zp51"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/twitterのアイコン素材_その2.svg' ); ?>" class="twitter" alt=""></a></li>
    </ul>
    <ul class="l_footer_list">
    <li class="l_footer_item">
        <a href="<?php echo esc_url( home_url('/service') ); ?>" class="l_footer_link">SERVICE</a>
    </li>
    <li class="l_footer_item">
        <a href="<?php echo esc_url( home_url( '/skill' ) ); ?>" class="l_footer_link">SKILL</a>
    </li>
    <li class="l_footer_item">
        <a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="l_footer_link">WORKS</a>
    </li>
    <li class="l_footer_item">
        <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>" class="l_footer_link">FAQ</a>
    </li>
    <li class="l_footer_item">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="l_footer_link">CONTACT</a>
    </li>
    </ul>
    <p class="l_footer-copyright">&copy; 2023 YOFUKASHI</p>
</footer>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>

    <?php wp_footer(); ?>
</body>

</html>