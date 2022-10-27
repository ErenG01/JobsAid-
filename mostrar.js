import {myprimerofuncion} from "./mysql.js"


const showUsers = document.getElementById('usarioscontent');
const Showcontent = `
<div class="credits">
      <ul>
        <li>Empleos</li>
        <li>Salarios</li>
        <li>${myprimerofuncion.saludar2}</li>
        <li>© 2022 Jobs Aid</li>
        <li>Cookies</li>
        <li>privacidad</li>
        <li>condiciones</li>
      </ul>
    </div>

`;
showUsers.innerHTML = Showcontent;




