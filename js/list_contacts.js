const getLocalStorage = () => 
   JSON.parse(localStorage.getItem("db_contacts"));

const readContacts = () => 
   getLocalStorage();


const updateTable = () => {

   const createRow = (contact) => {
      const newRow = document.createElement("tr");
      newRow.innerHTML = `

         <td scope="row">${contact.id}</td>
         <td scope="row">${contact.name}</td>
         <td scope="row">${contact.phone}</td>
         <td scope="row" class="table-contacts__icons">
            <!-- actions -->
            <a href="http://localhost/agenda_contatos/view_contact.php?id=${
               contact.id
            }">
               <img src="img/eye-regular.svg" alt="Icone para visualizar dados completos">
            </a>
            <a href="http://localhost/agenda_contatos/edit_contact.php?id=${
               contact.id
            }">
               <img src="img/pen-to-square-regular.svg" alt="Icone para editar os dados">
            </a>
            <a href="">
               <img src="img/trash-can-regular.svg" alt="Ícone para deletar dado" onclick="deleteContact(${
                  contact.id
               })">
            </a>
         </td>

      `;

      document.querySelector("#table-contacts>tbody").appendChild(newRow);
   };

   if (localStorage.getItem("db_contacts") != []) {
      const db_contacts = readContacts();
      db_contacts.forEach(createRow);
   } else {
      console.log("Está vazio");
   }
}

if (localStorage.getItem("db_contacts") != "") {
   updateTable();
} else {
   alert("Está vazio");
}
