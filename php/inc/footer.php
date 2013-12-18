 <?php date_default_timezone_set('UTC'); $thisyear = strftime("%Y"); ?><?php ob_start('compress_footer'); ?>

   <footer class="footer">

    <p><small>&copy; Copyright <?php //if ($thisAuthor!="") echo "$thisAuthor"; ?> <a href="http://atelierbramdehaan.nl">Bram de Haan</a> 2012 - <?php echo $thisyear; ?> <a href="<?php if ($thislicenseLink!="") echo $thislicenseLink; ?>"><?php if ($thisLicense!="") echo $thisLicense; ?></a></small>
<small><a href="https://github.com/atelierbram/houtje-touwtje">Fork this on Github</a></small></p>
  </footer>
  <?php ob_end_flush(); function compress_footer($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?> 
