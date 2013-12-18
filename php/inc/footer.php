 <?php date_default_timezone_set('UTC'); $thisyear = strftime("%Y"); ?>

   <footer class="footer">

    <p><small>&copy; Copyright <?php //if ($thisAuthor!="") echo "$thisAuthor"; ?> <a href="http://atelierbramdehaan.nl">Bram de Haan</a> 2012 - <?php echo $thisyear; ?> <a href="<?php if ($thislicenseLink!="") echo $thislicenseLink; ?>"><?php if ($thisLicense!="") echo $thisLicense; ?></a></small>
<small><a href="https://github.com/atelierbram/houtje-touwtje">Fork this on Github</a></small></p>
  </footer>

