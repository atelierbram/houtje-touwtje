#!/bin/bash -x

copy_file()
{
  cp config-external.php config-external_alt.php
  cp config.php config-local_alt.php
}
copy_file

move_file()
{
  mv -f config-external_alt.php config.php
}
move_file
