<?php
# Business site for gererate dinamic link
define("SOFTMAKERS_SITE_URL", "https://hml.softmakers.com.br/");
define("REDIRECT_URL_ONFAIL", SOFTMAKERS_SITE_URL."jobs");

# MySQL database attrs to connect
define("DATABASE_HOST", "127.0.0.1");
define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "123456");
define("DATABASE_NAME", "softmakers");

# Site metatags and Google Analytics Tag
define("SITE_TITLE", "SoftMakers - Construir a sua ideia é nosso negócio");
define("INSTAGRAM_URL", "https://www.instagram.com/softmakersbr");
define("INSTAGRAM_PROFILE", "@softmakersbr");
define("GOOGLE_ANALYTICS_TAG", "
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-1EJD2VMKZF'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1EJD2VMKZF');
    </script>
");

require("database.php");
?>