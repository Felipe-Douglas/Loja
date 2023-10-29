<?php

// URL BASE DO SITEMA
define("URL_BASE", "http://localhost/umbrella_store");

// CONEXÃO COM O BANCO DE DADOS
define(
  "DATA_LAYER_CONFIG",
  [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "umbrella_store",
    "username" => "root",
    "passwd" => "",
    "options" => [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
  ]
);


// HELPERS

/**
 * RETORNA A URL COMPLETA
 *
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null)
{
  if ($uri) {
    return URL_BASE . "/{$uri}";
  }

  return URL_BASE;
}

/**
 * RETORNA A MENSAGEM PARA O USUARIO
 *
 * @param string $message
 * @param string $type
 * @return string
 */
function message(string $message, string $type)
{
  $icon = ["success" => "<i class=\"fa-solid fa-check\"></i>", "danger" => "<i class=\"fa-solid fa-xmark\"></i>"];
  return "<div class=\"alert alert-" . $type . " d-flex align-items-center\" role=\"alert\">
      " . $icon[$type] . " &nbsp;
      " . $message . "
    </div>";
}
