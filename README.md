## Houtje Touwtje

Minimal DIY Static Site Generator that outputs PHP to static html-pages: [see generated static site from this repo](http://atelierbram.github.io/houtje-touwtje/)

The main benefit of doing webdevelopment like this is a [simple, low-fi way](http://arthur.van-dam.net/2005/06/houtje-touwtje) - for using templating and variables, here with just PHP. It can be suitable for smaller websites like between three and twenty pages or so.

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

### Edit
Rename the directory names in `io.sh` to resemble the ones on your own machine. Each time one creates a new page, add that link to `io.sh`, and note that the first path to the php files should be absolute url's.

Also edit at least `config.php` and the other global variables in the include files ( `php/inc` folder ) to resemble your needs and environment. Also change the path in `config.php` **before generating for the last time - before uploading to the remote server**, ( maybe create a `config-local.php` and `config-deploy.php` ?) for otherwise the absolute paths are wrong.

### Generate
Now in the terminal navigate to the folder containing the php folder

```bash
cd ~/Sites/houtje-touwtje/php
```
type the following and hit `Enter`:

```bash
./io.sh
```

### Implementation
You will end up in this setup with a mirrored site; one static html site in you're "houtje-touwtje"-root-folder, one dynamic php site in the php-folder. Supposedly the static-files are the ones that you gonna upload to the remote server. Or with git-hub.com/gh-pages the ones you push to origin.  

### Resources
* [Static Site Generators](http://blog.millermedeiros.com/static-site-generators/)
* [writing-a-file-in-bash-script](http://stackoverflow.com/questions/14637284/writing-a-file-in-bash-script)
* [Advanced Bash-Scripting Guide](http://www.tldp.org/LDP/abs/html/io-redirection.html)

### License

Copyright (c) 2013 [Bram de Haan](http://atelierbramdehaan.nl/)

Released under [MIT Licence](http://atelierbram.mit-license.org)

