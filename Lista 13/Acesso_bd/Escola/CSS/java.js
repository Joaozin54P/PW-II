const textoTitulo = "Inicia seu Banco de Dados ^-^";
const velocidadeDigitacao = 100; // Velocidade de digitação em milissegundos

let indexTitulo = 0;
const tituloElement = document.getElementById("titulo");

function digitarTitulo() {
    if (indexTitulo < textoTitulo.length) {
      tituloElement.textContent += textoTitulo[indexTitulo];
      indexTitulo++;
      setTimeout(digitarTitulo, velocidadeDigitacao);
    }
  }

  digitarTitulo();
setTimeout(digitarParagrafo, 2000); // Atraso para iniciar a digitação do parágrafo