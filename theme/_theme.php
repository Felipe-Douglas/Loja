<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css">
</head>
<body>
  <header class="wrapper-header">
    <div class="container">
      <div class="row">
        <!-- LOGO -->
        <div class="col-md-3">
          <div class="header-logo">
            <a href="#" class="Logo">
              <h1>Umbrella Store</h1>
            </a>
          </div>
        </div>
        <!-- /LOGO -->

        <!-- SEARCH -->
        <div class="col-md-6">
          <div class="header-search">
            <form action="" name="header-search" method="get" id="header-search">
              <input type="text" name="header-search-input" id="header-search-input">
              <button class=""></button>
            </form>
          </div>
        </div>
        <!-- /SEARCH -->

        <!-- ACCOUNT -->
        <div class="col-md-3">
          <div class="header-account">
            <!-- wishlist -->
            <div class="wishlist">
              <a href="#">
                <i class="fa fa-heart-o"></i>
                <span>Lista de Desejos</span>
                <div class="qtd">2</div>
              </a>
            </div>
            <!-- /wishlist -->
          </div>
          <!-- cart -->
          <div class="cart">
            <a href="#">
						  <i class="fa fa-shopping-cart"></i>
              <span>Carrinho</span>
              <div class="qtd">2</div>
            </a>
          </div>
          <!-- /cart -->
        </div>
        <!-- /ACCOUNT -->
      </div>
    </div>
  </header>

  <main>
    <?= $this->section('content') ?>
  </main>
</body>
</html>