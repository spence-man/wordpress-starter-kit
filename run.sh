#!/bin/bash

HOST=127.0.0.1
PORT=8222
DOCROOT="./wordpress"

PHP=$(which php)

if [ $? != 0 ] ; then
 echo "Unable to find PHP"
 exit 1
fi
$PHP -S $HOST:$PORT -t $DOCROOT

# MISC
# $PHP -S $HOST:$PORT -c $INIFILE -t $DOCROOT $ROUTER
# DOCROOT="$(pwd)/public"
# INIFILE="$(pwd)/php.ini"
# ROUTER="$(pwd)/router.php"
