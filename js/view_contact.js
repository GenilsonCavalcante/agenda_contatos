// BROWSER URL
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("id");


// LOCALSTORAGE CONTACTS
const getLocalStorage = () => JSON.parse(localStorage.getItem("db_contacts"));
const readContacts = () => getLocalStorage();


// // ACCESS CONTACT
const db_contacts = readContacts();


// ACCESSING ELEMENTS
const main = document.querySelector("#main-view");
const div = document.querySelector(".main-view__container");


// INSERTING CONTENT
div.innerHTML = `

   <h1 class="main-view__title">${db_contacts[myParam].name}</h1>
   <p class="main-view__p main-view__p--bold">Telefone:</p>
   <p class="main-view__p main-view__p-last">${db_contacts[myParam].phone}</p>
   <p class="main-view__p main-view__p--bold">Email:</p>
   <p class="main-view__p main-view__p-last">${db_contacts[myParam].email}</p>
   <p class="main-view__p main-view__p--bold">Observações:</p>
   <p class="main-view__p main-view__p-last">${db_contacts[myParam].observations}</p>

`;
