<?php
    define("SOFTMAKERS_SITE_URL", "https://hml.softmakers.com.br/");
    define("DATABASE_HOST", "127.0.0.1");
    define("DATABASE_USERNAME", "root");
    define("DATABASE_PASSWORD", "123456");
    define("DATABASE_NAME", "softmakers");
    
    $conn = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    $conn->set_charset("utf8");
    
    if ($conn->connect_error) {
        header("Location: ".SOFTMAKERS_SITE_URL."jobs");
        die();
    }

    $sql = "SELECT * FROM jobs WHERE deleted_at IS NULL;";
    $result = $conn->query($sql);
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>SoftMakers - Construir a sua ideia é nosso negócio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
</head>

<body>
    <img id="userPhoto" src="/logo.jpg" alt="Logomarca da SoftMakers">
    
    <a href="https://www.instagram.com/softmakersbr" id="userName">@softmakersbr</a>

    <?php if ($result->num_rows > 0) { ?>
        <?php while($row = $result->fetch_assoc()) { ?>
            <div id="links">
                <a class="link" href="<?= SOFTMAKERS_SITE_URL."jobs/".$row["id"]; ?>" target="_blank"><?= $row["title"]; ?></a>
            </div>
        <?php } ?>        
    <?php } ?>

    <!-- Javascript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="index.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1EJD2VMKZF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1EJD2VMKZF');
    </script>
</body>
</html>