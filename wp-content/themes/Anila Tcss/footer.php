    <div class="footer">
        <div class="footer_logo">
        </div>
        <div class="clear"></div>

        <div class="footer_contact">
            <ul>
            
            <?php if( vp_option('twitter') != ''){ ?>
            <li><a href="<?php echo vp_option('twitter'); ?>" target="_blank" class="footer_contact_twitter"></a></li>
            <?php } ?>
            
            <?php if( vp_option('facebook') != ''){ ?>
            <li><a href="<?php echo vp_option('facebook'); ?>" target="_blank" class="footer_contact_facebook"></a></li>
            <?php } ?>
            
            <?php if( vp_option('dribbble') != ''){ ?>
            <li><a href="<?php echo vp_option('dribbble'); ?>" target="_blank" class="footer_contact_dribbble"></a></li>
            <?php } ?>
            
            <?php if( vp_option('behance') != ''){ ?>
            <li><a href="<?php echo vp_option('behance'); ?>" target="_blank" class="footer_contact_behance"></a></li>
            <?php } ?>
            
            <?php if( vp_option('flickr') != ''){ ?>
            <li class="last"><a href="<?php echo vp_option('flickr'); ?>" target="_blank" class="footer_contact_flickr"></a></li>
            <?php } ?>
            
            </ul>
        </div>
        <div class="copyright">
            <p><?php echo vp_option('copyright'); ?><br />
            Developed by: <a href="http://themesmarts.com">ThemeSmarts</a></p>
        </div>
    </div>    

<?php wp_footer(); ?>

</body>
</html>