#! /bin/bash 


#install files for dns server on debian 
echo "don't forget to run as root"
echo "those will be installed 
    power DNS server and power DNS 
       are you ok ? (y/n)"
#apt-get update 
read answ

if [[ $answ == "y" ]]; then 
    apt-get install pdns-server
    apt-get install pdns-backend-mysql
    