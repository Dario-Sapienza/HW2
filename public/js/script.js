

function Ricerca(event){

  const barraRicerca = event.currentTarget;
  const c = document.querySelector('#contenuti');
  const titoli = c.querySelectorAll('h1');
  
  for(titolo of titoli)
  {
    if(titolo.textContent.toLowerCase().search(barraRicerca.value.toLowerCase()) === -1)
    {
      titolo.parentNode.parentNode.classList.add('hidden');
    }
    else{
      titolo.parentNode.parentNode.classList.remove('hidden');
    }
  }
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------*/

function rimuoviPreferitoVettore(id){
  for(let i=0;i<vettore_preferiti.length;i++)
    if(vettore_preferiti[i].id == id){
    vettore_preferiti.splice(i, 1);
    break;
  }
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------*/


function RemPref(event){

  const preferitoDaRimuovere = event.currentTarget.parentNode.parentNode;
  const pref = document.querySelector('#preferiti');
  pref.removeChild(preferitoDaRimuovere);
  

  fetch('http://localhost/ProgettoEsame/public/palestre/rimuovipreferiti/'+ preferitoDaRimuovere.id);

  rimuoviPreferitoVettore(preferitoDaRimuovere.id);


  const s = document.querySelector('article h1');
  if(pref.childElementCount === 0)
  {
      pref.classList.add('hidden');
      s.classList.add('hidden');
  }
  
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------*/

function caricaPreferito(j, json)
{
  const contenuto = document.createElement('div');
  contenuto.id = json[j].palestra_id;


  const titolo_preferiti = document.createElement('div');
  const title = document.createElement('h1');
  title.textContent = json[j].nome_palestra;

  const pre = document.createElement('img');
  pre.src = rimuovi;
  pre.addEventListener('click', RemPref);

  titolo_preferiti.appendChild(title);
  titolo_preferiti.appendChild(pre);
  contenuto.appendChild(titolo_preferiti);

  const image = document.createElement('img');
  image.src = json[j].immagine;
  image.classList.add('immagine');
  contenuto.appendChild(image);

  const descr = document.createElement('p');
  descr.textContent =  json[j].descrizione;
  descr.classList.add('descrizione');
  contenuto.appendChild(descr);

  /*const pref = document.querySelector('#preferiti');*/
   
  return contenuto;
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------*/


function onJson1(json){ 
  
  if(json !== 1)
  {
  const pref = document.querySelector('#preferiti');
  const s = document.querySelector('#pre');
  pref.classList.add('pref');


  if(json.length !== 0)
  {
    pref.classList.remove('hidden');
    s.classList.remove('hidden');
  }

  
  for (let i = 0; i < json.length; i++) { 
  const preferito = caricaPreferito(i,json);
  
 
  vettore_preferiti.push(preferito);
  preferiti.appendChild(preferito);
  conta_preferiti++;
  }
  }
}

function onResponse1(response){
  return response.json();
}
fetch("http://localhost/ProgettoEsame/public/palestre/caricapreferiti").then(onResponse1).then(onJson1);


/* -------------------------------------------------------------------------------------------------------------------------------------------------*/



function creaPreferitoDinamico(preferitoDaAggiungere){
 
      const contenuto = document.createElement('div');
      contenuto.id = preferitoDaAggiungere.id;


      const titolo_preferiti = document.createElement('div');
      const title = document.createElement('h1');
      title.textContent = preferitoDaAggiungere.querySelector("h1").textContent;

      const pre = document.createElement('img');
      pre.src = rimuovi;
      pre.addEventListener('click', RemPref);

      titolo_preferiti.appendChild(title);
      titolo_preferiti.appendChild(pre);
      contenuto.appendChild(titolo_preferiti);

      const image = document.createElement('img');
      image.src = preferitoDaAggiungere.querySelector(".immagine").src;
      image.classList.add('immagine');
      contenuto.appendChild(image);

      const descr = document.createElement('p');
      descr.textContent = preferitoDaAggiungere.querySelector(".descrizione").textContent;
      descr.classList.add('descrizione');
      contenuto.appendChild(descr);

     /* const pref = document.querySelector('#preferiti');*/
       
      return contenuto;
    }
  

/* -------------------------------------------------------------------------------------------------------------------------------------------------*/

function AddPref(event){
    const pref = document.querySelector('#preferiti');
    const preferito = event.currentTarget.parentNode.parentNode;
  
    for(let i=0; i<vettore_preferiti.length; i++)
    if(vettore_preferiti[i].id === preferito.id)
    {
        return;
    }


    pref.classList.add('pref');
    const s = document.querySelector('#pre');
    s.classList.remove('hidden');

  if(pref.classList.contains('hidden'))
  {
    pref.classList.remove('hidden');
  }

  fetch("http://localhost/ProgettoEsame/public/palestre/aggiungipreferiti/"+preferito.id);

  const preferito_aggiunto = creaPreferitoDinamico(preferito);
  preferito_aggiunto.id = preferito.id;

  vettore_preferiti.push(preferito_aggiunto)
  pref.appendChild(preferito_aggiunto);
  conta_preferiti++;
}


/* -------------------------------------------------------------------------------------------------------------------------------------------------*/


function MenoDettagli(event){
    const p = event.currentTarget;
    p.textContent = piu_dettagli;
    p.classList.add('piu_dettagli');
    p.classList.remove('meno_dettagli');
    p.removeEventListener('click', MenoDettagli);
    p.addEventListener('click', MostraDettagli);
    const dettagli = p.parentNode.querySelector('.descrizione');
    dettagli.classList.add('hidden');

}


/* -------------------------------------------------------------------------------------------------------------------------------------------------*/


function MostraDettagli(event){
    const p = event.currentTarget;
    p.textContent = meno_dettagli;
    p.classList.remove('piu_dettagli');
    p.classList.add('meno_dettagli');
    p.removeEventListener('click', MostraDettagli);
    p.addEventListener('click', MenoDettagli);
    const dettagli = p.parentNode.querySelector('.descrizione');
    dettagli.classList.remove('hidden');
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------*/


function CreaContenuto(json) {

  let contenuti=document.querySelector("#contenuti");

  for(let i=0; i < json.length ;i++){

    const contenuto = document.createElement('div');
    contenuto.id = json[i].id;
    const titolo_preferiti = document.createElement('div');
    const nome = document.createElement('h1');
    nome.textContent = json[i].nome;
    const preferiti = document.createElement('img');
    preferiti.src = piu;
    preferiti.addEventListener('click', AddPref);
    titolo_preferiti.appendChild(nome);
    titolo_preferiti.appendChild(preferiti);
    contenuto.appendChild(titolo_preferiti);
    const image = document.createElement('img');
    image.src = json[i].immagine;
    image.classList.add('immagine');
    contenuto.appendChild(image);
    const descr = document.createElement('p');
    descr.textContent = json[i].descrizione;
    descr.classList.add('hidden');
    descr.classList.add('descrizione');
    contenuto.appendChild(descr);
    const piu_dett = document.createElement('p');
    piu_dett.textContent = piu_dettagli;
    piu_dett.classList.add('piu_dettagli');
    piu_dett.addEventListener('click', MostraDettagli);
    contenuto.appendChild(piu_dett);
    contenuti.appendChild(contenuto);
  }

}
  
function onResponse(response){
  return response.json();
}
fetch("http://localhost/ProgettoEsame/public/palestre/caricacontenuti").then(onResponse).then(CreaContenuto);


/* -------------------------------------------------------------------------------------------------------------------------------------------------*/


const barraRicerca = document.querySelector('input[type="text"]');
barraRicerca.addEventListener('keyup',Ricerca);

const contenuti = document.querySelector('#contenuti');


let conta_preferiti=0;
let vettore_preferiti=[];
/*-----------------------------------------------------------------------------------------------------------------------------------------------*/


/* -------------------------------------------------------------------------------------------------------------------------------------------------*/

