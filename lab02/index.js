const input = document.getElementsByClassName("input");
const box = document.getElementById("box");
const form = document.getElementById('form');
const btn = document.getElementById('btn');
const btn2 = document.getElementById('btn2');
let nInput = 0

const respuestas = {}
const preguntas = {
  1: "Ingrese su nombre de usuario:",
  2: "Ingrese su email es:",
  3: "ingrese su primer valor:",
  4: "ingrese su segundo valor:",
  5: "ingrese su tercer valor:",
  6: "ingrese su cuarto valor:",
  7: "Ingrese el primero numero:",
  8: "Ingrese el segundo numero:",
  9: "Ingresa primera nota:",
  10: "Ingrea segunda nota:",
  11: "Ingresa tercera nota:",
  12: "ingrese su primer valor:",
  13: "ingrese su segundo valor:",
  14: "ingrese su tercer valor:",
}

function swap(){
  btn2.hidden = false
  form.hidden = true
}

btn.addEventListener('click', () => {
  btn.hidden = true
  form.hidden = false
  mostrarPregunta()
})

btn2.addEventListener('click', () => {
  box.innerHTML = ''
  btn2.hidden = true
  form.hidden = false
  mostrarPregunta()
})

form.addEventListener('submit', (e) => {
  e.preventDefault();

  box.innerHTML += `${input[0].value}`

  if (!isNaN(parseInt(input[0].value))){
    respuestas[nInput] = parseInt(input[0].value);
  }else{
    respuestas[nInput] = input[0].value
  }
  // breaks
  switch(nInput){
    case 2:
      swap()
      break;
    case 6:
      swap()
      ResolveB(respuestas)
      break;
    case 8:
      swap()
      ResolveC(respuestas)
      break;
    case 11:
      swap()
      ResolveD(respuestas)
      break;
    case 14:
      swap()
      ResolveE(respuestas)
      break;
    default:
      mostrarPregunta();
  }

})

function mostrarPregunta(){
  input[0].value = '';
  nInput++
  box.innerHTML += `<h5>${preguntas[nInput]}</h5>`
}

function ResolveB(arr){
  box.innerHTML += `<br>
    <h5>La suma de los dos primero valores es:  <strong>${arr[3] + arr[4]}</strong></h5> 
    <h5>El producto del tercer y cuarto valor es:  <strong>${arr[5] * arr[6]}</strong></h5>
    ` 
}

function ResolveC(arr){
  if (arr[7] > arr[8]){
    box.innerHTML += `<br>
    <h5>La suma es: <strong>${arr[7] + arr[8]}</strong></h5>
    <h5>La resta es: <strong>${arr[7] - arr[8]}</strong></h5>
    `
  }else{
    box.innerHTML += `<br>
    <h5>El producto es: <strong>${arr[7] * arr[8]}</strong></h5>
    <h5>La división es: <strong>${arr[7] / arr[8]}</strong></h5>
    `
  }
}

function ResolveD(arr){
  let promedio = arr[9] + arr[10] + arr[11]
  if (promedio >= 4){
    box.innerHTML += `<h5><strong>regular</strong></h5>`
  }else {
    box.innerHTML += `<h5><strong>reprobado</strong></h5>`
  }
}

function ResolveE(arr){
  let max = Math.max(arr[12], arr[13], arr[14]);
  box.innerHTML += `<h5>El mayor valor es: <strong>${max}</strong></h5>`
}
