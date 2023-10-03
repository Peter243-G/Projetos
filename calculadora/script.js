const previousOperationText = document.querySelector("#previous-operation");
const currentOperationText = document.querySelector("#current-operation");
const buttons = document.querySelectorAll("#buttons-container button");

class Calculator {
  constructor(previousOperationText, currentOperationText) {
    this.previousOperationText = previousOperationText;
    this.currentOperationText = currentOperationText;
    // Operação digitada no momento (atual)
    this.currentOperation = "";
  }

  // Ação para inserir numeros na tela da calculadora
  addDigit(digit) {
    // impedimndo que o usuario coloque varios pontos
    if (digit === "." && this.currentOperationText.innerText.includes(".")) {
      return;
    }

    // Mostrando o digito que foi clicado
    this.currentOperation = digit;
    this.updateScreen();
  }

  // Processos de todas as operações

  processOperation(operation) {
    // Método de mudança de operação
    if (this.currentOperationText.innerText === "" && operation !== "C") {
      // Mudando operação
      if (this.previousOperationText.innerText !== "") {
        this.changeOperation(operation);
      }
      return;
    }

    // Bifurcando as operações matematicas das operações gerais

    // Pegando o valor da operação atual e a anterior
    let operationValue;
    const previous = +this.previousOperationText.innerText.split(" ")[0];
    const current = +this.currentOperationText.innerText;

    switch (operation) {
      case "+":
        operationValue = previous + current;
        this.updateScreen(operationValue, operation, current, previous);
        break;
      case "-":
        operationValue = previous - current;
        this.updateScreen(operationValue, operation, current, previous);
        break;
      case "/":
        operationValue = previous / current;
        this.updateScreen(operationValue, operation, current, previous);
        break;
      case "*":
        operationValue = previous * current;
        this.updateScreen(operationValue, operation, current, previous);
        break;
      case "DEL":
        this.processDelOperator();
        break;
      case "CE":
        this.processClearCurrentOperation();
        break;
      case "C":
        this.processClearAllOperations();
        break;
      case "=":
        this.processEqualsOperator();
        break;
      default:
        break;
    }
  }

  // Método para atualizar a tela - mudando os valores
  // Valor da operação, Operação, valor atual, resultado
  updateScreen(
    operationValue = null,
    operation = null,
    current = null,
    previous = null
  ) {
    if (operationValue === null) {
      this.currentOperationText.innerText += this.currentOperation;
    } else {
      if (previous === 0) {
        operationValue = current;
      }
      //    Mostrando o valor na tela e jogando para cima
      this.previousOperationText.innerText = `${operationValue} ${operation}`;
      this.currentOperationText.innerText = "";
    }
  }
  // Mudando operação matematica
  changeOperation(operation) {
    const mathOperations = ["*", "/", "-", "+"];

    if (!mathOperations.includes(operation)) {
      return;
    }

    this.previousOperationText.innerText =
      previousOperationText.innerHTML.slice(0, -1) + operation;
  }

  // Deletando o ultimo digito - comando DEL
  processDelOperator() {
    this.currentOperationText.innerText =
      this.currentOperationText.innerText.slice(0, -1);
  }

  // Função de limpar a operação atual - CE (Clear)
  processClearCurrentOperation() {
    this.currentOperationText.innerText = "";
  }

  // Função de limpar todas as operações
  processClearAllOperations() {
    this.currentOperationText.innerText = "";
    this.previousOperationText.innerText = "";
  }

  // Função do operador de igual
  processEqualsOperator() {
    const operation = previousOperationText.innerText.split(" ")[1];

    this.processOperation(operation);
  }
}

const calc = new Calculator(previousOperationText, currentOperationText);

//  Percorrendo os botoes e adicionando em cada um um evento de click.
buttons.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    const value = e.target.innerText;

    // Separando as operações dos numeros
    if (+value >= 0 || value === ".") {
      calc.addDigit(value);
    } else {
      calc.processOperation(value);
    }
  });
});
