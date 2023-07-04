//Vecchio import del "bootstrap" di Laravel
//Non si tratta del framework CSS ma del "bootstrap" cioè delle istruzioni iniziali
//In pratica importa le librerie | Lodash e Axios |
import './bootstrap';

//Importo il nostro sass
import '~resources/scss/app.scss'

//Importo il JS di Bootstrap
import * as bootstrap from 'bootstrap'

//Informo Vite di processare le immagini presenti in /resources/img
import.meta.glob('../img/**');

//importiamo fontawesome
import '@fortawesome/fontawesome-free/js/all.js'