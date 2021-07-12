<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get("/", function (){ return view('homepage'); });
Route::get('/homepage',"HomeController@index")->name('homepage');

Route::get('/piu_info',"Piu_InfoController@index")->name('piu_info');

Route::get('/palestre',"PalestreController@index")->name('palestre');
Route::get('/palestre/caricacontenuti',"PalestreController@carica_contenuti");
Route::get('/palestre/aggiungipreferiti/{id}',"PalestreController@aggiungi_preferiti");
Route::get('/palestre/rimuovipreferiti/{id}',"PalestreController@rimuovi_preferiti");
Route::get('/palestre/caricapreferiti',"PalestreController@carica_preferiti");

Route::get('/area_personale',"Area_PersonaleController@index")->name('area_personale');
Route::get('/area_personale/carica_corsi',"Area_PersonaleController@carica_corsi")->name('/area_personale/carica_corsi');

Route::get('/accesso',"AccessoController@index")->name('accesso');
Route::post('/accesso',"AccessoController@checkLogin");

Route::get('/uscita',"AccessoController@logout")->name('uscita');

Route::get('/iscrizione',"IscrizioneController@index")->name('iscrizione');
Route::post('/iscrizione',"IscrizioneController@registrazione");
Route::get('/iscrizione/controlloMail/{q}',"IscrizioneController@controlloMail");
Route::get('/iscrizione/controlloUsername/{q}',"IscrizioneController@controlloUsername");

Route::get('/atletinews',"AtletiNewsController@index")->name('atletinews');
Route::get('/atletinews/atleti',"AtletiNewsController@atleti");
Route::get('/atletinews/news',"AtletiNewsController@news");
Route::get('/atletinews/click_news/{titolo}',"AtletiNewsController@click_news");

Route::get('/nuove_aperture',"Nuove_ApertureController@index")->name('nuove_aperture');
Route::get('/nuove_aperture/nuove_aff',"Nuove_ApertureController@nuove_aff");

Route::get('/prenotazione_corso',"Prenotazione_CorsoController@index")->name('prenotazione_corso');
Route::post('/prenotazione_corso',"Prenotazione_CorsoController@prenota_corso");

Route::get('/reindirizzamnto3',"ReindirizzamentoController@reindirizzamento3")->name('reindirizzamento3');
Route::get('/reindirizzamnto2',"ReindirizzamentoController@reindirizzamento2")->name('reindirizzamento2');
Route::get('/reindirizzamnto',"ReindirizzamentoController@reindirizzamento")->name('reindirizzamento');






