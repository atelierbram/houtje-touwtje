#!/bin/bash -x
copy_file()
{
  cp config-local.php config-local_alt.php 
  cp config.php config-external_alt.php
}
copy_file

move_file()
{
 mv -f config-local_alt.php config.php
}
move_file
