const hourElement = document.getElementById("hour");
const minutesElement = document.getElementById("minutes");
const secondsElement = document.getElementById("seconds");
const ampmElement = document.getElementById("ampm");

function updateClock() {
  let hora = new Date().getHours();
  let minutos = new Date().getMinutes();
  let segundos = new Date().getSeconds();
  let ampm = "AM";

  if (hora > 12) {
    hora = hora - 12;
    ampm = "PM";
  }

  hora = hora < 10 ? "0" + hora : hora;
  minutos = minutos < 10 ? "0" + minutos : minutos;
  segundos = segundos < 10 ? "0" + segundos : segundos;

  hourElement.innerHTML = hora;
  minutesElement.innerHTML = minutos;
  secondsElement.innerHTML = segundos;
  ampmElement, (innerText = ampm);
  setTimeout(() => {
    updateClock();
  }, 1000);
}

updateClock();
