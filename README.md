## Houtje Touwtje

Minimal DIY Static Site Generator that outputs PHP to static html-pages: [see generated static site from this repo](http://atelierbram.github.io/houtje-touwtje/)

The main benefit of doing web-development like this is a [simple, low-fi way](http://arthur.van-dam.net/2005/06/houtje-touwtje) - for using templating and variables, here with just PHP. It can be suitable for smaller websites like between three and twenty pages or so.

It consists of two parts:

1. a bash script named `io.sh`, that uses `curl` to output static html files from php files
2. a command that invokes the bash script

```bash
#!/bin/bash

# write to file
write_to_file()
{

 curl "http://localhost/~www/houtje-touwtje/php/index.php" >> "../index.html"
 curl "http://localhost/~www/houtje-touwtje/php/lab/index.php" >> "../lab/index.html"
 curl "http://localhost/~www/houtje-touwtje/php/about/index.php" >> "../about/index.html"
 curl "http://localhost/~www/houtje-touwtje/php/contact/index.php" >> "../contact/index.html"
 }

# execute it
write_to_file
```

### Configuration
Rename the directory names in `io.sh` to resemble the ones on your own machine. Each time one creates a new page, add that link to `io.sh`, and note that the first path to the php files should be absolute url’s.

Also edit at least `config.php` _(`php/inc` folder)_ and the other global variables on top of each page, to resemble your environment and preferences.
Also **before generating for the last time - before uploading to the remote server**, change the path to the root folder in `config.php` _(maybe create a `config-local.php` and `config-deploy.php` ?)_ , for otherwise the absolute paths to the assets are wrong.

### Generate
Now in the terminal navigate to the folder containing the php folder

```bash
cd ~/Sites/houtje-touwtje/php
```
type the following and hit `Enter`:

```bash
./io.sh
```
Be sure though that the shell script `io.sh` has the right permissions set. On the UNIX base systems you can do this with:

```bash
chmod +x io.sh
```
or

```bash
chmod 755 io.sh
```

### Deployment
You will end up in this setup with a mirrored site; one static html site in you’re `“houtje-touwtje”-root`-folder, one dynamic php site in the `php`-folder. Presumably the static-files are the ones that going to be uploaded to the remote server. (Or with git-hub.com/gh-pages “pushed to origin”).

### Final Thoughts
When just wanting to regenerate one page, an alternative way to do that in the terminal besides `curl`, is with `PHP CLI`:

```bash
php -f about/index.php > ../about/index.html ;
```

Two ways to repeat the previous command from the command line quickly:

1. Use the up arrow to view the previous command and press `enter` to execute it.
2. Type `!!` and press `enter`

### Resources
* [Static Site Generators](http://blog.millermedeiros.com/static-site-generators/)
* [writing a file in bash script](http://stackoverflow.com/questions/14637284/writing-a-file-in-bash-script)
* [Advanced Bash-Scripting Guide](http://www.tldp.org/LDP/abs/html/io-redirection.html)
* [php command line](http://www.sitepoint.com/php-command-line-1/)
* [php cli tutorial](http://www.php-cli.com/php-cli-tutorial.shtml)
* [linux command line history](http://www.thegeekstuff.com/2008/08/15-examples-to-master-linux-command-line-history/)

### License
Copyright (c) 2013 [Bram de Haan](http://atelierbramdehaan.nl/)

Released under [MIT Licence](http://atelierbram.mit-license.org)

