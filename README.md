## Houtje Touwtje

Minimal DIY Static Site Generator that outputs PHP to static html-pages: [see generated static site from this repo](http://atelierbram.github.io/houtje-touwtje/)

Main benefit of doing web-development like this is being able to have a [simple, low-fi implementation](http://arthur.van-dam.net/2005/06/houtje-touwtje) of templating, here with just PHP. It can be appropriate for smaller websites between three to twenty pages, or so.

* The bash script named `io.sh`, is what makes it happen: `curl` to output static HTML-files from PHP-files, which needs to be executed from the terminal.

```bash
#!/bin/bash -x

# write to file
write_to_file()
{

 curl "http://localhost/~www/houtje-touwtje/php/index.php" > "../index.html"
 curl "http://localhost/~www/houtje-touwtje/php/lab/index.php" > "../lab/index.html"
 curl "http://localhost/~www/houtje-touwtje/php/about/index.php" > "../about/index.html"
 curl "http://localhost/~www/houtje-touwtje/php/contact/index.php" > "../contact/index.html"
 }

# execute it
write_to_file
```
Be sure though that the shell scripts have the right permissions set. On UNIX base systems you can do this with:

```bash
chmod +x io.sh
```
or

```bash
chmod 755 io.sh
```
 
### Configuration
Rename the directory names in `io.sh` to resemble the ones on your own machine. Each time one creates a new page, add that link to `io.sh`, and note that the first path to the php files should be absolute url’s.

Also edit at least `config.php` _(`php/inc` folder)_ and the other global variables on top of each page, to resemble your environment and preferences.
Also **before generating for the last time - before uploading to the remote server**, change the path to the root folder in `config.php`, for otherwise the absolute paths to the assets are wrong. You can automate this a bit by executing a shell script for this, it simply renames `config-external.php` to `config.php` and likewise from `config-local.php`. You can do it like this: 

go to `inc` folder 
```bash
cd php/inc
```

execute shell script to change the root directory to the external server paths:

```bash
./external-config.sh
```

execute shell script to change the root directory back to the local development environment:

```bash
./local-config.sh
```

### Generate
Now in the terminal navigate to the folder containing the php folder

```bash
cd ~/Sites/houtje-touwtje/php
```
type the following and hit `Enter`:

```bash
./io.sh
```

### Deployment
You will end up in this setup with a mirrored site; one static html site in your `“houtje-touwtje”-root`-folder, one dynamic php site in the `php`-folder. Presumably the static-files are the ones that going to be (`FTP`) uploaded to the remote server. (Or with git-hub.com/gh-pages “pushed to origin”).

### Final Thoughts
When just wanting to regenerate one page, an alternative way to do that in the terminal besides `curl`, is with `PHP CLI`:

```bash
php -f about/index.php > ../about/index.html
```

Two ways to repeat the previous command from the command line quickly:

1. Use the up arrow to view the previous command and press `enter` to execute it.
2. Type `!!` and press `enter`

When one doesn’t want the [gzip-encoding that takes care of compression of the html-output](http://perishablepress.com/fast-effective-php-compression/), (for instance when using a lot of `pre` tags) just move, or remove the [ob_gzhandler](http://www.php.net/manual/en/function.ob-gzhandler.php).

### Resources
* [Static Site Generators](http://blog.millermedeiros.com/static-site-generators/)
* [writing a file in bash script](http://stackoverflow.com/questions/14637284/writing-a-file-in-bash-script)
* [Advanced Bash-Scripting Guide](http://www.tldp.org/LDP/abs/html/io-redirection.html)
* [php command line](http://www.sitepoint.com/php-command-line-1/)
* [php cli tutorial](http://www.php-cli.com/php-cli-tutorial.shtml)
* [linux command line history](http://www.thegeekstuff.com/2008/08/15-examples-to-master-linux-command-line-history/)
* [php output buffers](http://davidwalsh.name/php-output-buffers)
* [Fast, Effective PHP Compression](http://perishablepress.com/fast-effective-php-compression/)

### License
Copyright (c) 2013 [Bram de Haan](http://atelierbramdehaan.nl/)

Released under [MIT Licence](http://atelierbram.mit-license.org)

