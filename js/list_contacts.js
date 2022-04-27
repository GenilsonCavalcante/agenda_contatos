function updateTable() {

   const getLocalStorage = () =>
      JSON.parse(localStorage.getItem("db_contacts"));

   const readContacts = () => getLocalStorage();

   const createRow = (contact, id = 0) => {
      const newRow = document.createElement("tr");
      newRow.innerHTML = `

         <td scope="row">${(contact.id = id + 1)}</td>
         <td scope="row">${contact.name}</td>
         <td scope="row">${contact.phone}</td>
         <td scope="row" class="table-contacts__icons">
            <!-- actions -->
            <a href="#">
               <img src="img/eye-regular.svg" alt="Icone para visualizar dados completos">
            </a>
            <a href="#">
               <img src="img/pen-to-square-regular.svg" alt="Icone para editar os dados">
            </a>
            <a href="#">
               <img src="img/trash-can-regular.svg" alt="Icone para deletar dado">
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










// id = 1;
// db_contacts.forEach((createRow) => {
//    createRow(createRow, id);
//    id += 1;
// });

/// PROCESSAMENTO ///

// INTERAÇÃO COM O LAYOUT

// const isValidFields = () => {
//    return document.getElementById("create-contact-form").reportValidity();
// }

// // var id = 0;
// // let id_contacts = localStorage.setItem("id_contacts", JSON.stringify(id + 1));
// const saveContact = () => {
//    if (isValidFields()) {

//       const contact = {
//          id: null,
//          name: document.getElementById("name").value,
//          phone: document.getElementById("phone").value,
//          email: document.getElementById("email").value,
//          observations: document.getElementById("observations").value,
//       };

//       createContact(contact);

//    }
// }

// TABLE INDEX.PHP

// const createRow = (contact) => {
//    const newRow = document.createElement('tr');
//    newRow.innerHTML = `

//       <td scope="row">1</td>
//       <td scope="row">${contact.name}</td>
//       <td scope="row">${contact.phone}</td>
//       <td scope="row" class="table-contacts__icons">
//          <!-- actions -->
//          <a href="#">
//             <img src="img/eye-regular.svg" alt="Icone para visualizar dados completos">
//          </a>
//          <a href="#">
//             <img src="img/pen-to-square-regular.svg" alt="Icone para editar os dados">
//          </a>
//          <a href="#">
//             <img src="img/trash-can-regular.svg" alt="Icone para deletar dado">
//          </a>
//       </td>

//    `;

//    document.querySelector("#table-contacts>tbody").appendChild(newRow);
// }

// const updateTable = () => {
//    const db_contacts = readContacts();
//    db_contacts.forEach(createRow);
// }
