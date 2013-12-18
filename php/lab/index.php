<?php
$thisWebsite="Sitename";
$thisPage="lab";
$thispageTitle="Lab Page Title";
$thispageDesc="Lab page description";
$thisType="index";
$thisUrl="lab";
$thisLang="en";
$thisAuthor="Firstname Lastname";
$thisOrg="Organisation Name";
$thisLicense="Released under MIT Licence";
// $thisLicense="All Rights Reserved";
$thislicenseLink="http://atelierbram.mit-license.org/";
// $thislicenseLink="";
include '../inc/config.php';
include '../inc/head.php';
include '../inc/nav.php';
?>

  <article class="article">

    <h1>Article Header</h1>

    <p>Etiam pretium odio eu mi convallis vitae varius neque pharetra. Nulla vestibulum nisi ut sem cursus sed mattis nisi egestas.</p>

    <h2>Article Subhead</h2>

    <p>Vestibulum lacus erat, volutpat vel dignissim at, fringilla ut felis.</p>

  </article>

<?php
include '../inc/aside.php';
include '../inc/footer.php';
?>

</div><!-- ./wrapper -->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
     http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<!-- <script>window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>\x3C/script>")</script> -->

<!-- this is where we put our custom functions -->
<!-- don't forget to concatenate and minify if needed -->
<!-- <script src="assets/js/functions.js"></script> -->

<!-- Asynchronous google analytics; this is the official snippet.
   Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

</body>
</html><?php ?>
