<?php
$username = "ruking";
$password = "221298";
system('clear');

system("figlet Rukinggg");

echo "\e[0;31m HackerRuking...Login Dahulu\n";

echo "username : ";
$user = trim(fgets(STDIN));
echo "password : ";
$pass = trim(fgets(STDIN));
if($user == $username && $pass == $password){
sleep(3);


echo "Login Berjaya...\n";

sleep(5);
system('clear');

system("figlet Rukinggg");

echo "Hello Ruking what you want\n";

echo "[1] Update & upgrade
[2] see you ip
[3] hack cctv
[4] Date_Ruking_Hcking
[5] Uuuxxsat\n";
echo "Masukkan Pilihan : ";
$menu = trim(fgets(STDIN));
if($menu == 1)

system('apt update && apt upgrade');

if($menu == 2)

system('ifconfig');    

if($menu == 3)

echo "CCTV AMERIKA
 http://204.128.145.121:80
 http://166.241.21.43:80
 http://76.30.72.111:60001
 http://74.101.38.89:60001
 http://98.167.251.115:10000
 http://24.204.185.185:8082p\n";
 
 if($menu == 4)
 
 ;
 
 
 if($menu == 5)
 
 ;
 
 
 
 \n";
}else{

echo "Login Gagal\n";    
}
?>