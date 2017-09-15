#! bin/bash 

echo "don't forget to run as root"
echo "those will be installed 
    apache 2 , maria db server, software properties common
    and libapache2-mod-php7.0
       are you ok ? (y/n)"
#apt-get update 
read answ

if [[ $answ == "y" ]]; then 
    apt-get install apache2
    apt-get install mariadb-server
    apt-get install software-properties-common
    apt-get install libapache2-mod-php7.0

