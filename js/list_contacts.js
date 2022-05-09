import { url } from "./url.js";


// BROWSER URL
const urlParams = new URLSearchParams(window.location.search);
let searchContact = urlParams.get("search");


// LOCALSTORAGE
const getLocalStorage = () => JSON.parse(localStorage.getItem("db_contacts"));


// CREATE TABLE HEAD
const db_contacts = getLocalStorage();
let table = document.getElementById("table-contacts");
let existContacts = db_contacts !== null && db_contacts != "";

if (existContacts) {

   table.innerHTML = `
      <thead class="table-contacts__thead">
         <tr>
            <th scope="col">#${db_contacts.length}</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">
               <!-- search -->
               <form action="${url}/index.php" method="GET" class="table-contacts__search-form">
                  <input type="search" name="search" id="search" class="table-contacts__search-input" placeholder="Pesquisar">
                  <label for="search">
                     <img src="img/search.svg" alt="Ícone para pesquisar">
                  </label>
               </form>
            </th>
         </tr>
      </thead>
      <tbody class="table-contacts__tbody">
      </tbody>
   `;

} else {
   table.innerHTML = `<p class="main__p-info">Ainda não existe contatos em sua agenda! Click para <a href="${url}/create.php" class="main__link-form">Adicionar Contato</a></p>`;
}

const updateTable = () => {
   const createRow = (contact, index) => {
      const newRow = document.createElement("tr");
      newRow.innerHTML = `

         <td scope="row">${index + 1}</td>
         <td scope="row">${contact.name}</td>
         <td scope="row">${contact.phone}</td>
         <td scope="row" class="table-contacts__icons">
            <!-- actions -->
            <a href="${url}/view_contact.php?id=${index}">
               <img src="img/eye-regular.svg" alt="Icone para visualizar dados completos">
            </a>
            <a href="${url}/edit_contact.php?id=${index}">
               <img src="img/pen-to-square-regular.svg" alt="Icone para editar os dados">
            </a>
            <a href="">
               <img src="img/trash-can-regular.svg" alt="Ícone para deletar dado" onclick="deleteContact(
                  ${index}
               )">
            </a>
         </td>

      `;

      document.querySelector("#table-contacts>tbody").appendChild(newRow);
      index++;
   };

   let index = 0;
   db_contacts.forEach(createRow, index);
};


const search = (text) => {

   const createRow = (contact, index) => {
      const newRow = document.createElement("tr");
      newRow.innerHTML = `

         <td scope="row">${index + 1}</td>
         <td scope="row">${contact.name}</td>
         <td scope="row">${contact.phone}</td>
         <td scope="row" class="table-contacts__icons">
            <!-- actions -->
            <a href="${url}/view_contact.php?id=${index}">
               <img src="img/eye-regular.svg" alt="Icone para visualizar dados completos">
            </a>
            <a href="${url}/edit_contact.php?id=${index}">
               <img src="img/pen-to-square-regular.svg" alt="Icone para editar os dados">
            </a>
            <a href="">
               <img src="img/trash-can-regular.svg" alt="Ícone para deletar dado" onclick="deleteContact(
                  ${index}
               )">
            </a>
         </td>

      `;

      document.querySelector("#table-contacts>tbody").appendChild(newRow);
   };


   let index = 0;
   let existContact = false;
   
   db_contacts.forEach((contact) => {

      let nameContact = contact.name.toLowerCase();
      if(nameContact == text) {
         createRow(contact, index);
         existContact = true;
      }

      index++;

   });

   if (!existContact) {
      
      const tbody = document.querySelector(".table-contacts__tbody");
      
      tbody.innerHTML = `
         <p class="main__search-p">Contato não encontrado, <a href="${url}/index.php">voltar</a>.</p>
      `;
   }
};


if (searchContact) {
   let text = searchContact.toLowerCase()
   search(text);
} else {
   updateTable();
}
