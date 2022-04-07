const semaforo = document.getElementById('semaforo');

const sleep = (ms) => {
  return new Promise(res => setTimeout(res, ms))
}

const SemaforoAnimation = async () => {
  let colores = ['c-red', 'c-yellow', 'c-green']

  for (let i=0; i < colores.length; i++){
    semaforo.children[i].classList.add(colores[i]) 

    await sleep(600)

    semaforo.children[i].classList.remove(colores[i])
  }
  SemaforoAnimation()
}

SemaforoAnimation()

const $ = (n) => document.getElementById(n)


$('form').addEventListener('submit', () => {
  let norte = $('sur').value;
  let sur = $('norte').value;

  let oeste = $('oeste').value;
  let este = $('este').value;

  let y = (parseInt(norte) + parseInt(sur)) * 3
  let x =  (parseInt(este) + parseInt(oeste)) * 3


  if(y >= x) {
    alert("primero se ponen en verde los semáforos de los carriles norte y sur con un tiempo de: " +
    y + " segundos" + "\nluego se ponen en verde los semáforos de los carriles este y oeste con un tiempor de: " +
    x + " segundos")  

  } else{
    alert("Primero se ponen en verde los semáforos de los carriles este y oeste con un tiempo de: " +
    x + " segundos" + "\nLuego se ponen en verde los semáforos de los carriles norte y sur con un tiempor de: " +
    y + " segundos")
  }
}) 



