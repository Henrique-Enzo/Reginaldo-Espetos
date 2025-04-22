<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script src="script.js" defer></script>
  <title>Reginaldo Espetos</title>
</head>

<body>
  <?php 
include_once('./inc/header.php')
?>
  <div class="titulo">
    <h1>Produtos</h1>
  </div>
  <main>
    <h2 class="titulo-produto">Nossos Espetos</h2>
    <section id="produtos" class="container">
      <div data-cod="1">
        <div class="img"></div>
        <h3>Bolinha Mandioca c/ Queijo e Bacon</h3>
        <p>Pacote c/ 4 un: R$<span class="preco">17,80</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="2">
        <div class="img"></div>
        <h3>Bolinha Quibe c/ Queijo e Bacon</h3>
        <p>Pacote c/ 4 un: R$<span class="preco">18,00</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="8">
        <div class="img"></div>
        <h3 class="nome">Coração</h3>
        <p>Pacote c/ 5 un: R$<span class="preco">25,00</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="6">
        <div class="img"></div>
        <h3>Filé de Frango</h3>
        <p>Pacote c/ 5 un: R$<span class="preco">17,50</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="5">
        <div class="img"></div>
        <h3>Kafta Tradicional</h3>
        <p>Pacote c/ 6 un: R$<span class="preco">20,40</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="3">
        <div class="img"></div>
        <h3>Kaftão de Carne c/ Queijo</h3>
        <p>Pacote c/ 4 un: R$<span class="preco">20,00</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="4">
        <div class="img"></div>
        <h3 class="nome">Kaftão de Frango c/ Queijo</h3>
        <p>Pacote c/ 4 un: R$<span class="preco">18,40</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="7">
        <div class="img"></div>
        <h3>Pão de Alho General</h3>
        <p>Pacote c/ 5 un: R$<span class="preco">11,00</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="12">
        <div class="img"></div>
        <h3 class="nome">Kibão c/ Queijo</h3>
        <p>Pacote c/ 4 un: R$<span class="preco">18,00</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="10">
        <div class="img"></div>
        <h3>Linguiça Fina de Pernil Tradicional</h3>
        <p>Pacote c/ 6 un: R$<span class="preco">15,60</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="11">
        <div class="img"></div>
        <h3>Linguiça Fina de Pernil Apimentado</h3>
        <p>Pacote c/ 6 un: R$<span class="preco">15,60</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="13">
        <div class="img"></div>
        <h3>Medalhão de Frango</h3>
        <p>Pacote KG c/ 4 un: R$<span class="preco">35,90</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="9">
        <div class="img"></div>
        <h3>Panceta</h3>
        <p>Pacote c/ 5 un: R$<span class="preco">17,50</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="14">
        <div class="img"></div>
        <h3>Queijo Mussarela Bolinha</h3>
        <p>Pacote KG c/ 5 un: R$<span class="preco">59,90</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="16">
        <div class="img"></div>
        <h3>Queijo Coalho Alegria</h3>
        <p>Pacote KG c/ 6 un: R$<span class="preco">68,20</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="15">
        <div class="img"></div>
        <h3 class="nome">Tulipa</h3>
        <p>Pacote KG c/ 4 un: R$<span class="preco">32,90</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
    </section>
    <h2 class="titulo-produto">Nossas Porções</h2>
    <section id="produtos" class="container">
      <div data-cod="A">
        <div class="img"></div>
        <h3>Bolinha Mandioca c/ Queijo e Bacon</h3>
        <p>Preço por KG: R$<span class="preco">31,50</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
      <div data-cod="B">
        <div class="img"></div>
        <h3 class="nome">Bolinha de Kibe c/ Queijo</h3>
        <p>Preço por KG: R$<span class="preco">31,50</span></p>
        <button data-button="add">Adicionar</button>
        <div class="btn-number">
          <button class="minus">-</button>
          <input type="number" min="0" max="100" value="0" />
          <button class="plus">+</button>
        </div>
      </div>
    </section>
    <form id="formulario">
      <h2 class="titulo-form">Faça agora mesmo seu orçamento</h2>
      <label for="nome">Nome*</label>
      <input type="text" id="nome" name="nome" required minlength="3" maxlength="45"
        placeholder="Escreva o nome completo..." />
      <div class="erro-input"></div>
      <div class="info-radio">
        <div class="entrega">
          <h3>Forma de entrega</h3>
          <label for=""><input type="radio" id="retirada" name="radio" value="Retirada" required />Retirada</label>
          <div class="informa-retirada">
            <img src="assets_reginaldo/icone_atencao.png" alt="" />
            <p>Tempo estimado para conclusão do produto: 1 dia útil</p>
          </div>
        </div>
        <div class="pagamento">
          <h3>Forma de pagamento</h3>
          <label for=""><input type="radio" id="pix" name="pagRadio" value="Pix" required />Pix<img
              src="assets_reginaldo/pix.png"></label>
          <label for=""><input type="radio" id="debito" name="pagRadio" value="Débito" required />Cartão de
            débito<img src="assets_reginaldo/icone-cartao.png"></label>
        </div>
      </div>
      <div class="produtos-selecionados">
        <h2>Produto(s) selecionado(s):</h2>
        <div class="erro-produto"></div>
      </div>
      <button class="enviar-orcamento" type="submit">Enviar Orçamento</input>
    </form>
  </main>

  <?php 
  include_once('./inc/footer.php');
  ?>
</body>

</html>