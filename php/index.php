<?php
$thisWebsite="Sitename";
$thisPage="homepage";
$thispageTitle="Home Page Title";
$thispageDesc="page description";
$thisType="index";
$thisUrl="";
$thisLang="en";
$thisAuthor="Firstname Lastname";
$thisOrg="Organisation Name";
$thisLicense="Released under MIT Licence";
// $thisLicense="All Rights Reserved";
$thislicenseLink="http://atelierbram.mit-license.org/";
// $thislicenseLink="";
include 'inc/config.php';
include 'inc/head.php';
include 'inc/nav.php';
?>
<?php ob_start('compress_article'); ?>
  <article class="article">

    <h1>Article Header</h1>

    <p>Etiam pretium odio eu mi convallis vitae varius neque pharetra. Nulla vestibulum nisi ut sem cursus sed mattis nisi egestas.</p>

    <h2>Article Subhead</h2>

    <p>Vestibulum lacus erat, volutpat vel dignissim at, fringilla ut felis.</p>

  </article>

<?php ob_end_flush(); function compress_article($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
include 'inc/aside.php';
include 'inc/footer.php';
?></div><!-- ./wrapper -->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.  http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?php include 'inc/script.php'; ?>

</body>
</html><?php ?>
