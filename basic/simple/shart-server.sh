#! /bin/sh

host=localhost
port=8000
rootdir=./www

php -S $host:$port -t $rootdir
