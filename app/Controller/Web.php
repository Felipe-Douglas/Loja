<?php

namespace App\Controller;

use League\Plates\Engine;

class Web
{
  private $view;

  public function __construct()
  {
    $this->view = new Engine(__DIR__ . "/../../theme");
  }

  public function home()
  {
    echo $this->view->render("home", [
      "title" => "HOME"
    ]);
  }
  public function checkout()
  {
    echo $this->view->render("checkout", [
      "title" => "CHECKOUT"
    ]);
  }
  public function products()
  {
    echo $this->view->render("products", [
      "title" => "PRODUCTS"
    ]);
  }
  public function store()
  {
    echo $this->view->render("store", [
      "title" => "STORE"
    ]);
  }
}
