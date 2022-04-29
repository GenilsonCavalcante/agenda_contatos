// LOCALSTORAGE  -  db_contacts
const getLocalStorage = () =>
   JSON.parse(localStorage.getItem("db_contacts")) ?? [];

const setLocalStorage = (contact) =>
   localStorage.setItem("db_contacts", JSON.stringify(contact));


// LOCALSTORAGE  -  id
const setIdLocalStorage = (id) =>
   localStorage.setItem("id", JSON.stringify(id));

const getIdLocalStorage = () => 
   JSON.parse(localStorage.getItem("id"));


// CRUD
const create = (contact) => {
   const db_contacts = read();
   db_contacts.push(contact);
   setLocalStorage(db_contacts);
};

const read = () => 
   getLocalStorage();

const update = (id, contact) => {
   const db_contacts = read();
   db_contacts[id] = contact;
   setLocalStorage(db_contacts);
};


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
};


const saveContact = () => {
   if (isValidFields()) {
      setIdLocalStorage(getIdLocalStorage() + 1);

      const contact = {
         id: getIdLocalStorage(),
         name: document.getElementById("name").value,
         phone: document.getElementById("phone").value,
         email: document.getElementById("email").value,
         observations: document.getElementById("observations").value,
      };

      create(contact);

      // window.location.href = "http://localhost/agenda_contatos/login.php";
   }
};


const updateContact = () => {
   // alert("Upgrade");
   // console.log("Upgrade")
   // if (isValidFields()) {

      const contact = {
         id: 1,
         name: document.getElementById("name").value,
         phone: document.getElementById("phone").value,
         email: document.getElementById("email").value,
         observations: document.getElementById("observations").value,
      };

      update(1, contact);
   // };
};
