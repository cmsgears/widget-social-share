<ul class="nav">
    <?php if( array_key_exists( 'reddit', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Facebook" class="share-facebook <?= $widget->iconSet ?>reddit color-facebook" href="https://reddit.com/submit?url=<?= $widget->url ?>" target="_blank" ></a>
	   </li>
    <?php } ?>
	<?php if( array_key_exists( 'facebook', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Facebook" class="share-facebook <?= $widget->iconSet ?>facebook color-facebook" href="http://www.facebook.com/sharer.php?u=<?= $widget->url ?>" target="_blank" ></a>
	   </li>
    <?php } ?>
    <?php if( array_key_exists( 'pinterest', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Facebook" class="share-pinterest <?= $widget->iconSet ?>pinterest color-facebook" href="http://pinterest.com/pin/create/link/?url=<?= $widget->url ?>" target="_blank" ></a>
	   </li>
    <?php } ?>

    <?php if( array_key_exists( 'twitter', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Twitter" class="<?= $widget->iconSet ?>twitter color-twitter" href="https://twitter.com/share?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>

    <?php if( array_key_exists( 'linkedin', $widget->links ) ) { ?>
       <li>
		   <a title="Share on LinkedIn" class="<?= $widget->iconSet ?>linkedin color-linkedin" href="http://www.linkedin.com/shareArticle?url=<?= $widget->url ?>" target="_blank"></a>
	   </li>
    <?php } ?>
    <?php if( array_key_exists( 'tumblr', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Facebook" class="share-tumblr <?= $widget->iconSet ?>tumblr color-facebook" href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?= $widget->url ?>" target="_blank" ></a>
	   </li>
    <?php } ?>
    <?php if( array_key_exists( 'mix', $widget->links ) ) { ?>
       <li>
		   <a title="Share on Facebook" class="share-mix <?= $widget->iconSet ?>mix color-facebook" href="http://mix.com/submit?url=<?= $widget->url ?>" target="_blank" ></a>
	   </li>
    <?php } ?>
</ul>
