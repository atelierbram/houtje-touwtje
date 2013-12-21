<?php
$thisWebsite="Houtje Touwtje";
$thisPage="homepage";
$thispageTitle="Houtje Touwtje";
$thispageDesc="Minimal DIY Static Site Generator that outputs PHP to static html-pages";
$thisType="index";
$thisUrl="";
$thisLang="en";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisLicense="Released under MIT Licence";
// $thisLicense="All Rights Reserved";
$thislicenseLink="http://atelierbram.mit-license.org/";
// $thislicenseLink="";
include 'inc/config.php';
include 'inc/head.php';
include 'inc/nav.php';
?>
<?php // ob_start('compress_article'); ?>
  <article class="article">

<p>Minimal DIY Static Site Generator that outputs PHP to static html-pages:</p>

<p>Main benefit of doing web-development like this is being able to have a <a href="http://arthur.van-dam.net/2005/06/houtje-touwtje">simple, low-fi implementation</a> of templating, here with just PHP. It can be appropriate for smaller websites with a size between three to twenty pages or so.</p>

<ul>
<li>The bash script named <code>io.sh</code>, is what makes it happen: <code>curl</code> to output static HTML-files from PHP-files, which needs to be executed from the terminal.</li>
</ul>

<pre class="language-bash"><code class="language-bash">
#!/bin/bash -x

# write to file
write_to_file()
{
  curl "http://localhost/~www/houtje-touwtje/php/index.php" &gt; "../index.html"
  curl "http://localhost/~www/houtje-touwtje/php/lab/index.php" &gt; "../lab/index.html"
  curl "http://localhost/~www/houtje-touwtje/php/about/index.php" &gt; "../about/index.html"
  curl "http://localhost/~www/houtje-touwtje/php/contact/index.php" &gt; "../contact/index.html"
}

# execute it
write_to_file
</code></pre>

Be sure though that the shell scripts have the right permissions set. On UNIX base systems you can do this with:

<pre class="language-bash"><code class="language-bash">
chmod +x io.sh
</code></pre>

<p>or</p>

<pre class="language-bash"><code class="language-bash">
chmod 755 io.sh
</code></pre>

<h3>Configuration</h3>

<p>Rename the directory names in <code>io.sh</code> to resemble the ones on your own machine. Each time one creates a new page, add that link to <code>io.sh</code>, and note that the first path to the php files should be absolute url’s.</p>

<p>Also edit at least <code>config.php</code> <em>(<code>php/inc</code> folder)</em> and the other global variables on top of each page, to resemble your environment and preferences.
Also <strong>before generating for the last time - before uploading to the remote server</strong>, change the path to the root folder in <code>config.php</code>, for otherwise the absolute paths to the assets are wrong. You can automate this a bit by executing a shell script for this, it simply renames <code>config-external.php</code> to <code>config.php</code> and likewise from <code>config-local.php</code>. You can do it like this: </p>

<p>go to <code>inc</code> folder

<pre class="language-bash"><code class="language-bash">
cd php/inc
</code></pre>

<p>execute shell script to change the root directory to the external server paths:</p>


<pre class="language-bash"><code class="language-bash">
./external-config.sh
</code></pre>

<p>execute shell script to change the root directory back to the local development environment:</p>


<pre class="language-bash"><code class="language-bash">
./local-config.sh
</code></pre>

<h3>Generate</h3>

<p>Now in the terminal navigate to the folder containing the php folder</p>


<pre class="language-bash"><code class="language-bash">
cd ~/Sites/houtje-touwtje/php
</code></pre>

type the following and hit <code>Enter</code>:</p>

<pre class="language-bash"><code class="language-bash">
./io.sh
</code></pre>

<h3>Deployment</h3>

<p>You will end up in this setup with a mirrored site; one static html site in your <code>“houtje-touwtje”-root</code>-folder, one dynamic php site in the <code>php</code>-folder. Presumably the static-files are the ones that going to be (<code>FTP</code>) uploaded to the remote server. (Or with git-hub.com/gh-pages “pushed to origin”).</p>

<h3>Final Thoughts</h3>

<p>When just wanting to regenerate one page, an alternative way to do that in the terminal besides <code>curl</code>, is with <code>PHP CLI</code>:</p>


<pre class="language-bash"><code class="language-bash">
php -f about/index.php &gt; ../about/index.html
</code></pre>

<p>Two ways to repeat the previous command from the command line quickly:</p>

<ol>
<li>Use the up arrow to view the previous command and press <code>enter</code> to execute it.</li>
<li>Type <code>!!</code> and press <code>enter</code></li>
</ol>

<p>When one doesn’t want the <a href="http://perishablepress.com/fast-effective-php-compression/">gzip-encoding that takes care of compression of the html-output</a>, (for instance when using a lot of <code>pre</code> tags) just move, or remove the <a href="http://www.php.net/manual/en/function.ob-gzhandler.php">ob_gzhandler</a>.</p>

<h3>Resources</h3>

<ul>
<li><a href="http://blog.millermedeiros.com/static-site-generators/">Static Site Generators</a></li>
<li><a href="http://stackoverflow.com/questions/14637284/writing-a-file-in-bash-script">writing a file in bash script</a></li>
<li><a href="http://www.tldp.org/LDP/abs/html/io-redirection.html">Advanced Bash-Scripting Guide</a></li>
<li><a href="http://www.sitepoint.com/php-command-line-1/">php command line</a></li>
<li><a href="http://www.php-cli.com/php-cli-tutorial.shtml">php cli tutorial</a></li>
<li><a href="http://www.thegeekstuff.com/2008/08/15-examples-to-master-linux-command-line-history/">linux command line history</a></li>
<li><a href="http://davidwalsh.name/php-output-buffers">php output buffers</a></li>
<li><a href="http://perishablepress.com/fast-effective-php-compression/">Fast, Effective PHP Compression</a></li>
</ul>
  </article>

<?php // ob_end_flush(); function compress_article($buffer) {
//  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
//  $replace = array(">","<");
//  return preg_replace($search, $replace, $buffer);
// }
// include 'inc/aside.php';
include 'inc/footer.php';
?></div><!-- ./wrapper -->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.  http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<?php include 'inc/script.php'; ?>

<!-- <script src="<?php // echo $rootUrl;?>/assets/js/prism-bash.js"></script> -->

</body>
</html><?php ?>
