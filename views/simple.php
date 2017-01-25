<ul class="widget-social-share nav">
    <?php if( array_key_exists( 'facebook', $widget->links ) ) { ?>
       <li> <a title="Share on Facebook" class="<?= $widget->iconSet ?>facebook" href="http://www.facebook.com/sharer.php?u=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
    <?php if( array_key_exists( 'twitter', $widget->links ) ) { ?>
       <li> <a title="Share on Twitter" class="<?= $widget->iconSet ?>twitter" href="https://twitter.com/share?url=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
    <?php if( array_key_exists( 'gplus', $widget->links ) ) { ?>
       <li> <a title="Share on Google+" class="<?= $widget->iconSet ?>google-plus" href="https://plus.google.com/share?url=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
    <?php if( array_key_exists( 'linkedin', $widget->links ) ) { ?>
       <li> <a title="Share on LinkedIn" class="<?= $widget->iconSet ?>linkedin" href="http://www.linkedin.com/shareArticle?url=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
</ul>
