<?php require("bootstrap.php"); ?>
<?php $jobs = runQuery("SELECT * FROM jobs WHERE deleted_at IS NULL;"); ?>
<?php $links = runQuery("SELECT * FROM linkfree_links WHERE deleted_at IS NULL;"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title><?= SITE_TITLE ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
</head>

<body>
    <img id="userPhoto" src="/logo.jpg" alt="Logomarca">
    
    <a href="<?= INSTAGRAM_URL ?>" id="userName"><?= INSTAGRAM_PROFILE ?></a>

    <?php foreach($jobs as $job) { ?>
        <div id="links">
            <a class="link" href="<?= SOFTMAKERS_SITE_URL."jobs/".$job["id"]; ?>" target="_blank"><?= $job["title"]; ?></a>
        </div>
    <?php } ?>        

    <?php foreach($links as $link) { ?>
        <div id="links">
            <a class="link" href="<?= $link["url"]; ?>" target="_blank"><?= $link["title"]; ?></a>
        </div>
    <?php } ?>        

    <!-- Javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="main.js"></script>
    <?= GOOGLE_ANALYTICS_TAG ?>
</body>
</html>