<?php

defined( 'LL' ) || exit;

function display_links( $links )
{
    echo '<ul class="links">';

    foreach ( $links as $link )
    {
?>
<li>
    <a class="button <?=$link['button_class'];?>" href="<?=$link['link_url'];?>" target="_blank" rel="noopener">
        <img class="icon" src="images/icons/<?=$link['icon_file'];?>" alt="<?=$link['service_name'];?> Logo">
        <span class="label"><?=$link['link_label'];?></span>
    </a>
</li>
<?php
    }

    echo '</ul>';
}

