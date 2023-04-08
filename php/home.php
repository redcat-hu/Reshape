<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamarosan</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
      if (!empty($cookie_2["tracking"])) {
      echo
      "<!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5W7J5FM');</script>
      <!-- End Google Tag Manager -->";
    } ?>
</head>
<body>
<?php
  if (!empty($cookie_2["tracking"])) {
  echo
  '<!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W7J5FM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->';} ?>

<header>
<h1>VARNAI</h1>
</header>
    
<footer>

</footer>

<div id="cookie"></div>
<script>
    var language = "<?= $language[0] ?>";
    var php = ["<?= $local[0] ?>", "<?= $local[1] ?>", "<?= $local[2] ?>"];
</script>
<script src="<?= $local[2] ?>js/cookie.js?v=<?= time() ?>"></script>
<script src="<?= $local[0] ?>js/main.js?v=<?= time() ?>"></script>
</body>
</html>