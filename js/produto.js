const parentButton = document.querySelectorAll("[data-cod]");
const radioButton = document.querySelector("[type='radio']");
const btnOrcamento = document.querySelector(".enviar-orcamento");

// evento para expandir informação de retirada
radioButton.addEventListener("click", informaRetirada);

// Cria interação do botão "adicionar" para esconder após clicar
function ativaAdd(div) {
  const button = div.querySelector('[data-button="add"]');
  button.addEventListener("click", () => {
    div.classList.add("ativo");
  });
}

// Percorre os botoes de "+" e "-" e aplica a função nos mesmos
parentButton.forEach((div) => {
  ativaAdd(div);
  plusOrMinus(div);
});

// Função para incrementar ou decrementar valor após clicar nos botoes
function plusOrMinus(div) {
  const dados = {};
  const inputQtd = div.querySelector(".btn-number input");
  const buttonPlus = div.querySelector(".btn-number .plus");
  const buttonMinus = div.querySelector(".btn-number .minus");

  buttonPlus.addEventListener("click", () => {
    inputQtd.value++;
    recebeDados(div, dados);
  });

  buttonMinus.addEventListener("click", () => {
    if (inputQtd.value < 1) {
      div.classList.remove("ativo");
      inputQtd.value++;
    }

    inputQtd.value--;
    recebeDados(div, dados);
  });

  // Adiciona o produto se a pessoa digitar
  inputQtd.addEventListener("keyup", () => {
    recebeDados(div, dados);
    if (inputQtd.value == 0) {
      inputQtd.value = "";
    }
  });
}

// Setado preço direto no objeto para melhor segurança das informações
const precosPorID = {
  1: 17.6,
  2: 18,
  3: 25,
  4: 17.5,
  5: 20.4,
  6: 20,
  7: 18.4,
  8: 11,
  9: 18,
  10: 15.6,
  11: 15.6,
  12: 35.9,
  13: 17.9,
  14: 59.9,
  15: 68.2,
  16: 32.9,
  A: 31.5,
  D: 31.5,
  E: 25.0,
  F: 17.5,
  G: 20.4,
  H: 20,
  I: 18.4,
  J: 11,
  K: 18,
  L: 15.6,
  M: 15.6,
  N: 35.9,
  O: 17.55,
  P: 59.9,
  Q: 68.2,
  R: 32.9,
};

// Função responsável pela interação do usuario com a quantidade do produto e o formulario
function recebeDados(div, dados) {
  const inputQtd = div.querySelector(".btn-number input");
  const nomeProduto = div.querySelector("h3").innerText;
  const areaProdutos = document.querySelector(".produtos-selecionados");
  const totalProdutos = document.querySelector(".produtos-total");

  const info = div.dataset.cod;
  const elementoExistente = document.querySelector(`li[data-id="${info}"]`);

  const valor = precosPorID[info];
  dados.nome = nomeProduto;
  dados.qtd = +inputQtd.value;
  let total = dados.qtd * valor;
  total = total.toFixed(2);

  // Verifica se o elemento que contém o produto selecionado existe
  // Caso nao, entao cria esse elemento (evita duplicação)
  if (!elementoExistente && div.classList.contains("ativo")) {
    const novoElemento = document.createElement("li");
    novoElemento.setAttribute("data-id", `${info}`);
    if (isNaN(Number(info))) {
      novoElemento.innerText = `${dados.nome} - ${dados.qtd} Kg(s) - Total: R$${total}`;
    } else {
      novoElemento.innerText = `${dados.nome} - x${dados.qtd} pacote(s) - Total: R$${total}`;
    }
    areaProdutos.appendChild(novoElemento);
    // Caso existir, então só atualiza as informações desse produto conforme quantidade
  } else if (elementoExistente) {
    removeProduto(div, dados);
    if (isNaN(Number(info))) {
      elementoExistente.innerText = `${dados.nome} - ${dados.qtd} Kg(s) - Total: R$${total}`;
    } else {
      elementoExistente.innerText = `${dados.nome} - x${dados.qtd} pacote(s) - Total: R$${total}`;
    }
  }
  recalculaTotal();
}

// Caso o contador do produto for igual ou menor a 0, então remove do formulário o produto
function removeProduto(div, dados) {
  const info = div.dataset.cod;
  const elementoExistente = document.querySelector(`li[data-id="${info}"]`);
  if (elementoExistente) {
    if (dados.qtd <= 0) {
      elementoExistente.remove();
    }
  }
}

// função que aplica classe no elemento para expandir informações de retirada
function informaRetirada(event) {
  const infoRetirada = document.querySelector(".informa-retirada");
  if (event.target === this) {
    infoRetirada.classList.add("ativo");
  }
}

// Evento de clique no botão "orçamento"
btnOrcamento.addEventListener("click", (e) => {
  e.preventDefault();
  verificaErro();
});

// variavel bool para verificação dentro da função verificaErro();
let produtoBool;

// Função para verificar erro no formulário
function verificaErro() {
  const elementoProduto = document.querySelector(
    ".produtos-selecionados > [data-id]"
  );
  const divProdutos = document.querySelectorAll(
    ".produtos-selecionados [data-id]"
  );

  const form = document.querySelector("form");
  const inputNome = document.getElementById("nome");
  const inputCheck = document.getElementById("retirada");

  const divErroProduto = document.querySelector(".erro-produto");

  let newPara = document.createElement("p");
  newPara.style.color = "red";

  if (form.checkValidity()) {
    if (!elementoProduto) {
      produtoBool = false;
      newPara.classList.add("msg-erro-produto");
      const selectErro = document.querySelector(".msg-erro-produto");
      if (!selectErro) {
        newPara.innerText =
          "Selecione pelo menos 1 (um) produto para fazer o orçamento!";
        divErroProduto.appendChild(newPara);
      }
    } else {
      produtoBool = true;
      const selectErro = document.querySelector(".msg-erro-produto");
      if (selectErro) {
        selectErro.remove();
      }
    }
  } else {
    form.reportValidity();
  }
  if (produtoBool) {
    mandaOrcamento(inputNome, inputCheck, divProdutos, form);
  }
}

function mandaOrcamento(inputNome, inputCheck, divProdutos, form) {
  const numero = 19993104470;
  const nomeCliente = inputNome.value;
  const valueRetirada = inputCheck.value;
  const inputPagamento = document.querySelectorAll(".pagamento input");
  let recebeRadio = "";
  const LOCAL_KEY = "form_nome";

  inputPagamento.forEach((radio) => {
    if (radio.checked) {
      recebeRadio = radio.value;
    }
  });

  let mensagem = `Olá, desejo um orçamento! \nMeu nome: *${nomeCliente}* \nForma de entrega: *${valueRetirada}*\nForma de pagamento: *${recebeRadio}*\n\n`;

  divProdutos.forEach((div) => {
    mensagem += `- ${div.textContent}\n`;
  });

  mensagem += `\nTotal dos produtos: *R$${somaTotal.toFixed(2)}*`;

  localStorage.removeItem(LOCAL_KEY);

  const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;
  form.submit();
  window.open(url, "_blank");
}

function salvaNome() {
  const LOCAL_KEY = "form_nome";
  const inputNome = document.getElementById("nome");

  const nomeSalvo = localStorage.getItem(LOCAL_KEY);

  document.addEventListener("DOMContentLoaded", () => {
    if (nomeSalvo) {
      inputNome.value = nomeSalvo;
    }
  });

  inputNome.addEventListener("input", () => {
    localStorage.setItem(LOCAL_KEY, inputNome.value);
  });
}
salvaNome();

function recalculaTotal() {
  const produtosAtuais = document.querySelectorAll(".produtos-selecionados li");
  let total = 0;

  produtosAtuais.forEach((item) => {
    const match = item.textContent.match(/Total: R\$(\d+,\d{2}|\d+\.\d{2})/);
    if (match) {
      const valor = parseFloat(match[1].replace(",", "."));
      total += valor;
    }
  });

  somaTotal = total;
  const totalProdutos = document.querySelector(".produtos-total");

  // Se não houver produtos, limpa o texto. Senão, exibe o total.
  if (produtosAtuais.length === 0) {
    totalProdutos.innerText = "";
  } else {
    totalProdutos.innerText =
      "Total dos produtos: R$" + total.toFixed(2).replace(".", ",");
  }
}
