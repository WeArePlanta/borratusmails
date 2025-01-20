function calcular() {
  // Obtener el valor ingresado por el usuario
  var inputNumber = document.getElementById('input-number');

  if (inputNumber) {
    const numero = parseFloat(inputNumber.value);

    if (isNaN(numero) || numero < 0) {
      alert("Por favor, ingresa un número válido.");
      return;
    }

    // Calcular grCO2e
    const grCO2e = numero * 4;
    document.getElementById('result-grco2e').textContent = "grCO2e: " + grCO2e.toFixed(2);

    // Calcular kilómetros en auto
    const kmAuto = grCO2e / 163.91;
    document.getElementById('result-km').textContent = "Kilómetros en auto: " + kmAuto.toFixed(2);
  }

  calcular();
}


