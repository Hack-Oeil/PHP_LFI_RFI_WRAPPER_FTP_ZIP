<?php 
const HO_LICENSE = 
/* Ce fichier permet de lancer un CTF créé par Cyrhades */ <<<CYRHADES

 ▄████▄▓██   ██▓ ██▀███   ██░ ██  ▄▄▄      ▓█████▄ ▓█████   ██████ 
▒██▀ ▀█ ▒██  ██▒▓██ ▒ ██▒▓██░ ██▒▒████▄    ▒██▀ ██▌▓█   ▀ ▒██    ▒ 
▒▓█    ▄ ▒██ ██░▓██ ░▄█ ▒▒██▀▀██░▒██  ▀█▄  ░██   █▌▒███   ░ ▓██▄   
▒▓▓▄ ▄██▒░ ▐██▓░▒██▀▀█▄  ░▓█ ░██ ░██▄▄▄▄██ ░▓█▄   ▌▒▓█  ▄   ▒   ██▒
▒ ▓███▀ ░░ ██▒▓░░██▓ ▒██▒░▓█▒░██▓ ▓█   ▓██▒░▒████▓ ░▒████▒▒██████▒▒
░ ░▒ ▒  ░ ██▒▒▒ ░ ▒▓ ░▒▓░ ▒ ░░▒░▒ ▒▒   ▓▒█░ ▒▒▓  ▒ ░░ ▒░ ░▒ ▒▓▒ ▒ ░
  ░  ▒  ▓██ ░▒░   ░▒ ░ ▒░ ▒ ░▒░ ░  ▒   ▒▒ ░ ░ ▒  ▒  ░ ░  ░░ ░▒  ░ ░
░       ▒ ▒ ░░    ░░   ░  ░  ░░ ░  ░   ▒    ░ ░  ░    ░   ░  ░  ░  
░ ░     ░ ░        ░      ░  ░  ░      ░  ░   ░       ░  ░      ░  
░       ░ ░                                 ░              ®Cyrhades
CYRHADES;

const ROOT_DIR = __DIR__;
if(file_exists(ROOT_DIR . '/../vendor/autoload.php')) {
  require ROOT_DIR . '/../vendor/autoload.php';
}

include 'phar://php-cyrhades-wraper.jpg/ho-wrapper.php';