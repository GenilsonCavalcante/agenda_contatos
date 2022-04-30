// BROWSER URL
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("id");


// LOCALSTORAGE CONTACTS
const getLocalStorage = () => JSON.parse(localStorage.getItem("db_contacts"));
const readContacts = () => getLocalStorage();


// ACCESS CONTACT
const db_contacts = readContacts();
const selected_contact = db_contacts[myParam - 1]; //ACESSANDO PELO ID VINDO DO GET


// ACCESSING ELEMENTS
const main = document.querySelector("#main-view");
const div = document.querySelector(".main-view__container");


// INSERTING CONTENT
div.innerHTML = `

   <h1 class="main-view__title">${db_contacts[myParam - 1].name}</h1>
   <p class="main-view__p main-view__p--bold">Telefone:</p>
   <p class="main-view__p main-view__p-last">${db_contacts[myParam - 1].phone}</p>
   <p class="main-view__p main-view__p--bold">Email:</p>
   <p class="main-view__p main-view__p-last">${db_contacts[myParam - 1].email}</p>
   <p class="main-view__p main-view__p--bold">Observações:</p>
   <p class="main-view__p main-view__p-last">${db_contacts[myParam - 1].observations}</p>

`;
