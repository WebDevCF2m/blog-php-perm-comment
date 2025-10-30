<?php
// path: config.dev.php

// paramètres de connexions
const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PWD = "";
const DB_NAME = "my_blog";
const DB_PORT = 3306;
const DB_CHARSET = "utf8mb4";

// paramètres supplémentaires pour PDO
const DB_TYPE = "mysql"; // valable pour MySQL et/ou MariaDB

// racine de notre site pour PHP
const RACINE_PATH = __DIR__;
// URL racine de notre site pour le navigateur (jusqu'au dossier public)
// évite les problèmes de chemins relatifs si on utilise Twig ou des redirections
// qui sont liés à la réécriture des URLs
const RACINE_URL = "http://web2025/blog-php-perm-comment/public/";

// API de mailjet
const DSN="mailjet+api://public:private@default";