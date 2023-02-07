<?php

define( 'LL', true );

include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Find us online!">
    <meta name="author" content="Seth Cottle">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>LittleLink</title>
    <link rel="icon" href="data:,">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton-auto.css">
    <link rel="stylesheet" href="css/brands.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="column">

            <img src="images/avatar.png" class="avatar" srcset="images/avatar@2x.png 2x" alt="LittleLink Logo">

            <h1>LittleLink</h1>

            <p>LittleLink is an open source DIY alternative to services like <a href="https://linktr.ee" target="_blank" rel="noopener">Linktree</a> and <a href="https://many.link" target="_blank" rel="noopener">many.link</a>. LittleLink was built using <a href="http://www.getskeleton.com" target="_blank" rel="noopener">Skeleton</a>, a dead simple, responsive boilerplate—we've just created some branded buttons and stripped out the things you won't need. 😊</p>

            <ul class="links">
<?php

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

?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>