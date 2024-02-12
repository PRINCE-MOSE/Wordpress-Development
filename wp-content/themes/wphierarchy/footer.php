<?php wp_footer();?>


    </div> <!-- #Content div -->
</div> <!-- #Page div -->

<footer id="colophon" class="site-footer" role="contentinfo">

    
    <a href="<?php echo esc_url(__( 'https://wordpress.org/' , 'wphierarchy')); ?>">
     <?php printf(esc_html__( 'Prowdly powered by %s','wphierarchy' ), 'wordpress' ); ?>
    </a>

    <!-- Widget for footer goes in here -->
    <?php 
        if (! is_active_sidebar( 'footer-sidebar' )) {
            return;
        }
        
    
    ?>

    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </div>

</footer>

    <?php wp_footer(); ?>
</body>
</html>