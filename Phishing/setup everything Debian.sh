#! bin/bash 

echo "don't forget to run as root"
#update 
apt-get update 
apt-get install apache2
apt-get install mariadb-server
apt-get install software-properties-common
apt-get install libapache2-mod-php7.0
