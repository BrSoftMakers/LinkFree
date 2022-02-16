<?php
# Business site for gererate dinamic link
define("SOFTMAKERS_SITE_URL", "https://www.softmakers.com.br/");
define("REDIRECT_URL_ONFAIL", SOFTMAKERS_SITE_URL."jobs");

# MySQL database attrs to connect
define("DATABASE_HOST", "softmakers.com.br");
define("DATABASE_USERNAME", "softma15_root");
define("DATABASE_PASSWORD", "0M8e,=i#cZ_I");
define("DATABASE_NAME", "softma15_blog_softmakers");

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