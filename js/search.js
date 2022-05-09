// BROWSER URL
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("search");

const getLocalStorage = () =>
   JSON.parse(localStorage.getItem("db_contacts")) ?? [];


const db_contacts = getLocalStorage();
db_contacts.forEach(contact => {
   if(contact.name == myParam) {
      alert(contact.name);
   }
});

