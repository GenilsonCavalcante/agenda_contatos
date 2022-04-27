// const getLocalStorage = () => {
//    db_contacts = JSON.parse(localStorage.getItem("db_contacts")) ?? [];
// }


// const setLocalStorage = (db_contacts) => {
//    localStorage.setItem("db_contacts", JSON.stringify(db_contacts));
// }


// // CREATE 
// const createContact = (contact) => {

//    alert("entrou createContact", contact);

//    const db_contacts = readContacts();
//    db_contacts.push(contact);
//    setLocalStorage(db_contacts);
//    alert("Entrou nada", contact);
//    alert("Criou o contato");
// }


// // READ
// const readContacts = () => {
//    getLocalStorage();
// } 


// // UPDATE
// const updateContact = (index, contact) => {
//    const db_contacts = readContacts();
//    db_contacts[index] = contact;
//    setLocalStorage(db_contacts);
// }


// // DELETE
// const deleteContact = (index) => {
//    const db_contacts = readContacts();
//    db_contacts.splice(index, 1);
//    setLocalStorage(db_contacts);
// }


// const isValidFields = () => {

//    alert("Função isValidFields");
   
//    return document.getElementById("create-contact-form").reportValidity();

//    // let msg = '';
//    // let name = document.getElementById("name").value;
//    // let phone = document.getElementById("phone").value;
//    // if (name != '') {
//    //    msg += "- Digite um nome para o contato \n";
//    // }
//    // if (phone != "") {
//    //    msg += "- Digite o telefone do contato \n";
//    // }
//    // if (msg != "") {
//    //    alert(msg);
//    //    return false;
//    // } else {
//    //    return true;
//    // }
// }

// const saveContact = () => {

//    document.getElementById("create_contact_button")
//       .addEventListener("click", function (event) {
//          event.preventDefault();
//       });

//    alert("entrou");
   
//    if (isValidFields()) {
//       // alert("os campos sao validos!")
//       const contact = {
//          id: this.id,
//          name: document.getElementById("name").value,
//          phone: document.getElementById("phone").value,
//          email: document.getElementById("email").value,
//          observations: document.getElementById("observations").value
//       }

//       // alert(contact);
//       // console.log(contact);

//       createContact(contact);

//    } else {
//       alert("Não foi possível salvar esse contato!");
//    }
// }


// // EVENTS
// // function getEventSaveContact() {

// //    document.getElementById("create_contact_button")
// //    .addEventListener("click", saveContact());

// // }






// class Contact {

//    // ATRIBUTES
//    id;

//    constructor() {
//       this.id = 1;
//    }

//    // LOCALSTORAGE
//    getLocalStorage() {
//       JSON.parse(localStorage.getItem("db_contacts")) ?? [];
//    }

//    setLocalStorage (contact) {
//       localStorage.setItem("db_contacts", JSON.stringify(contact));
//    }

//    // CREATE
//    createContact(contact) {
//       const db_contacts = readContacts();
//       db_contacts.push(contact);
//       setLocalStorage(db_contacts);

//       id++;
//    }

      
//    // READ
//    readContacts() {
//       getLocalStorage();
//    } 


//    isValidFields() {

//       alert("Função isValidFields");
      
//       // return document.getElementById("create-contact-form").reportValidity();

//       let msg = '';
//       let name = document.getElementById("name").value;
//       let phone = document.getElementById("phone").value;
//       if (name != '') {
//          msg += "- Digite um nome para o contato \n";
//       }
//       if (phone != "") {
//          msg += "- Digite o telefone do contato \n";
//       }
//       if (msg != "") {
//          alert(msg);
//          return false;
//       } else {
//          return true;
//       }
//    }

//    saveContact() {

//       // document.getElementById("create_contact_button")
//       //    .addEventListener("click", function (event) {
//       //       event.preventDefault();
//       //    });

//       alert("entrou")
//       if (isValidFields()) {
//          alert("os campos sao validos!")
//          const contact = {
//             id: this.id,
//             name: document.getElementById("name").value,
//             phone: document.getElementById("phone").value,
//             email: document.getElementById("email").value,
//             observations: document.getElementById("observations").value,
//          }

//          createContact(contact);

//       } else {
//          alert("Não foi possível salvar esse contato!");
//       }
//    }
// }

// var contact = new Contact();



// ----------------------------------------------



// const getLocalStorage = () =>
//    JSON.parse(localStorage.getItem("db_client")) ?? [];

// const setLocalStorage = (dbClient) =>
//    localStorage.setItem("db_client", JSON.stringify(dbClient));

// // CRUD - create read update delete
// const deleteClient = (index) => {
//    const dbClient = readClient();
//    dbClient.splice(index, 1);
//    setLocalStorage(dbClient);
// };

// const updateClient = (index, client) => {
//    const dbClient = readClient();
//    dbClient[index] = client;
//    setLocalStorage(dbClient);
// };

// const readClient = () => getLocalStorage();

// const createClient = (client) => {
//    const dbClient = getLocalStorage();
//    dbClient.push(client);
//    setLocalStorage(dbClient);
// };


// const isValidFields = () => {
//    return document.getElementById("form").reportValidity();
// };

// //Interação com o layout

// const clearFields = () => {
//    const fields = document.querySelectorAll(".modal-field");
//    fields.forEach((field) => (field.value = ""));
//    document.getElementById("nome").dataset.index = "new";
// };

// const saveClient = () => {
//    debugger;
//    if (isValidFields()) {
//       const client = {
//          nome: document.getElementById("nome").value,
//          email: document.getElementById("email").value,
//          celular: document.getElementById("celular").value,
//          cidade: document.getElementById("cidade").value,
//       };
//       const index = document.getElementById("nome").dataset.index;
//       if (index == "new") {
//          createClient(client);
//          updateTable();
//          closeModal();
//       } else {
//          updateClient(index, client);
//          updateTable();
//          closeModal();
//       }
//    }
// };

// ---------------------------------------------------------------

const getLocalStorage = () => 
   JSON.parse(localStorage.getItem("db_contacts")) ?? [];

const setLocalStorage = (db_contacts) => 
   localStorage.setItem("db_contacts", JSON.stringify(db_contacts));

const createContact = (contact) => {
   const db_contacts = getLocalStorage();
   db_contacts.push(contact);
   setLocalStorage(db_contacts);
}





const isValidFields = () => {

   let msg = "";
   let name = document.getElementById("name").value;
   let phone = document.getElementById("phone").value;

   if (name == "") {
      msg += "- Digite um nome para o contato \n";
   }
   if (phone == "") {
      msg += "- Digite o telefone do contato \n";
   }

   if (msg != "") {
      alert(msg);
      return false;
   } else {
      return true;
   }

}


const saveContact = () => {

   if (isValidFields()) {

      const contact = {
         id: 1,
         name: document.getElementById("name").value,
         phone: document.getElementById("phone").value,
         email: document.getElementById("email").value,
         observations: document.getElementById("observations").value
      }

      createContact(contact);

      // window.location.href = "http://localhost/agenda_contatos/login.php";
      
   }
}
