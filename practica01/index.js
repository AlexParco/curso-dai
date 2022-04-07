const semaforo = document.getElementById('semaforo');

const sleep = (ms) => {
  return new Promise(res => setTimeout(res, ms))
}

const SemaforoAnimation = async () => {
  let colores = ['c-red', 'c-yellow', 'c-green']

  for (let i=0; i < colores.length; i++){
    semaforo.children[i].classList.add(colores[i]) 

    await sleep(800)

    semaforo.children[i].classList.remove(colores[i])
  }
  SemaforoAnimation()
}

SemaforoAnimation()

const $ = (n) => document.getElementById(n)


$('form').addEventListener('submit', (e) => {
  e.preventDefault()
  
  let norte = $('sur').value;
  let sur = $('norte').value;

  let oeste = $('oeste').value;
  let este = $('este').value;

  let y = (parseInt(norte) + parseInt(sur)) * 3
  let x =  (parseInt(este) + parseInt(oeste)) * 3


  if(y >= x) {
    $('resp').innerHTML += `
    <p>
   primero se ponen en verde los semáforos de los carriles norte y sur con un tiempo de: <strong>${y}</strong> segundos luego se ponen en verde los semáforos de los carriles este y oeste con un tiempo de: <strong>${x}</strong> segundos
    </p>
    `
  } else{
    $('resp').innerHTML += `
    <p>
   primero se ponen en verde los semáforos de los carriles norte y sur con un tiempo de: <strong>${x}</strong> segundos luego se ponen en verde los semáforos de los carriles este y oeste con un tiempo de: <strong>${y}</strong> segundos
    </p>
    `
  }
}) 

//  change theme

$('theme').addEventListener('click', () => {
  if (document.body.style.getPropertyValue('--bg-color') === '#101010'){
    $('theme').innerHTML = 'light'
    document.body.style.setProperty('--bg-color', '#f9f9f9');
    document.body.style.setProperty('--text-color', '#101010');
  }else {
    $('theme').innerHTML = 'dark'
    document.body.style.setProperty('--bg-color', '#101010');
    document.body.style.setProperty('--text-color', '#f9f9f9');
  }
})

