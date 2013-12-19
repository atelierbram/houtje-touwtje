#!/bin/bash

remove_file()
{
 rm -f ../index.html
 rm -f ../lab/index.html
 rm -f ../about/index.html
 rm -f ../contact/index.html
}
remove_file

# write to file
write_to_file()
{

 curl "http://localhost/~www/houtje-touwtje/php/index.php" >> "../index.html"
 curl "http://localhost/~www/php/houtje-touwtje/php/lab/index.php" >> "../lab/index.html"
 curl "http://localhost/~www/php/houtje-touwtje/php/about/index.php" >> "../about/index.html"
 curl "http://localhost/~www/php/houtje-touwtje/php/contact/index.php" >> "../contact/index.html"
 }

# execute it
write_to_file

