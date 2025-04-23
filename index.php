<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="./js/mobile-navbar.js" defer></script>
  <title>Reginaldo Espetos</title>
</head>

<body>
  <?php 
include_once('./inc/header.php')
?>
  <div class="img-titulo">
    <h1>Reginaldo Espetos</h1>
    <h2>Centro de distribuição e fábrica de espetos</h2>
  </div>
  <section class="container-home">
    <div class="home-quem-somos">
      <div class="title-quem-somos">
        <h1>Quem somos?</h1>
        <button>Saiba mais</button>
      </div>
      <p>
        Há mais de 10 anos entregando qualidade e preço justo ao nossos
        clientes. Somos uma família comprometida com a excelência no ramo de
        espetos. A melhor distribuidora da região pertinho de você!
      </p>
    </div>
  </section>
  <section class="home-produtos">
    <h1>Nossos Produtos</h1>
    <div class="produtos">
      <ul>
        <li>
          <img src="./assets_reginaldo/bovina.jpeg" alt="">
          <p>Espeto de carne bovina</p>
        </li>
        <li>
          <img src="./assets_reginaldo/bovina.jpeg" alt="">
          <p>Espeto de carne bovina</p>
        </li>
        <li>
          <img src="./assets_reginaldo/bovina.jpeg" alt="">
          <p>Espeto de carne bovina</p>
        </li>
        <li>
          <img src="./assets_reginaldo/bovina.jpeg" alt="">
          <p>Espeto de carne bovina</p>
        </li>
      </ul>
    </div>
    <button>Mais produtos<img src="assets_reginaldo/seta-dourado.png"></button>
  </section>
  <section class="home-parceiros">
    <h1>Nosso parceiros</h1>
    <p>Contamos com diversas empresas que fortalecem nossa trajetória e acreditam no nosso trabalho</p>
    <ul class="parceiros">
      <li><img src="assets_reginaldo/parceiros/dogs.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/flexblog.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/dogs.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/flexblog.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/dogs.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/flexblog.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/dogs.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/flexblog.svg" alt=""></li>
      <li><img src="assets_reginaldo/parceiros/flexblog.svg" alt=""></li>
      </div>
  </section>

  <?php 
  include_once('./inc/footer.php');
  ?>
</body>

</html>