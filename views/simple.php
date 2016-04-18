<?php if( $showLinks ) { ?>
    <ul class="widget-social-share nav">
        <?php if( isset( $links['facebook'] ) ) { ?>
           <li> <a title="Share on Facebook" class="fa fa-facebook" href="http://www.facebook.com/sharer.php?u=<?=$url?>" target="_blank"></a></li>
        <?php } ?>
        <?php if( isset( $links['twitter'] ) ) { ?>
           <li> <a title="Share on Twitter" class="fa fa-twitter" href="https://twitter.com/share?url=<?=$url?>" target="_blank"></a></li>
        <?php } ?>
        <?php if( isset( $links['gplus'] ) ) { ?>
           <li> <a title="Share on Google+" class="fa fa-google-plus" href="https://plus.google.com/share?url=<?=$url?>" target="_blank"></a></li>
        <?php } ?>
        <?php if( isset( $links['linkedin'] ) ) { ?>
           <li> <a title="Share on LinkedIn" class="fa fa-linkedin" href="http://www.linkedin.com/shareArticle?url=<?=$url?>" target="_blank"></a></li>
        <?php } ?>
    </ul>
<?php } ?>