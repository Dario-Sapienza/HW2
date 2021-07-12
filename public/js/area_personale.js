
function onJson(json){
    const prenotazioni = document.querySelector('#corsi_prenotati');
    
if(json === 1){
    const errore = document.querySelector('#errore');
    errore.classList.add('errore');
    errore.classList.remove('hidden');
}

else{


    for(let i=0; i<json.length; i++)
    { 

    
const f = document.querySelector('#frase');
f.classList.remove('hidden');

  const prenotazione = document.createElement('div');
  prenotazione.classList.add('prenotazione');

      const palestra = document.createElement('h3');
      palestra.classList.add('nome_palestra');
      palestra.textContent = json[i].nome;

      
      const corso= document.createElement('h4');
      corso.classList.add('corso');
      corso.textContent = json[i].corso;

         
      prenotazione.appendChild(palestra);
      prenotazione.appendChild(corso);
      
      prenotazioni.appendChild(prenotazione);
        
    }
}

}

function onResponse(response) {
    return response.json();
}

fetch("http://localhost/ProgettoEsame/public/area_personale/carica_corsi").then(onResponse).then(onJson);