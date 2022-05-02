// LOCALSTORAGE  -  db_contacts
const getLocalStorage = () =>
   JSON.parse(localStorage.getItem("db_contacts")) ?? [];

const db_contacts = getLocalStorage();

const getIdArray = (id) => {
   const cnt = 0;

   db_contacts.forEach(element => {
      if (element.id == id) {
         return cnt;
      }
      cnt++;
   });
};
