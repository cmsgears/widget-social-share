<ul class="nav">
    <?php if( array_key_exists( 'facebook', $widget->links ) ) { ?>
       <li> <a title="Share on Facebook" class="share-facebook <?= $widget->iconSet ?>facebook color-facebook " href="<?= $widget->url ?>"></a></li>
    <?php } ?>
    <?php if( array_key_exists( 'twitter', $widget->links ) ) { ?>
       <li> <a title="Share on Twitter" class="<?= $widget->iconSet ?>twitter color-twitter" href="https://twitter.com/share?url=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
    <?php if( array_key_exists( 'gplus', $widget->links ) ) { ?>
       <li> <a title="Share on Google+" class="<?= $widget->iconSet ?>google-plus color-google-plus" href="https://plus.google.com/share?url=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
    <?php if( array_key_exists( 'linkedin', $widget->links ) ) { ?>
       <li> <a title="Share on LinkedIn" class="<?= $widget->iconSet ?>linkedin color-linkedin" href="http://www.linkedin.com/shareArticle?url=<?= $widget->url ?>" target="_blank"></a></li>
    <?php } ?>
</ul>

