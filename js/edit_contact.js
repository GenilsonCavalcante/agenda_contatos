// BROWSER URL
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("id");


// LOCALSTORAGE CONTACTS
const getLocalStorage = () => 
   JSON.parse(localStorage.getItem("db_contacts"));

const readContacts = () => 
   getLocalStorage();


// ACCESS CONTACT
const db_contacts = readContacts();
const selected_contact = db_contacts[myParam - 1]; //ACESSANDO PELO ID VINDO DO GET


// ACCESSING ELEMENTS
const div = document.querySelector(".content-form");


//  action="http://localhost/agenda_contatos/view_contact.php?id=${
//       db_contacts[myParam - 1].id
//    }"

// INSERTING CONTENT
div.innerHTML = `

   <form class="create-form" id="create-contact-form" method="POST" action="http://localhost/agenda_contatos/view_contact.php?id=${
      db_contacts[myParam - 1].id
   }">

      <section class="create-form__section">
         <label for="name" class="create-form__label">Nome do Contato:</label>
         <input type="text" class="create-form__input" name="name" id="name" placeholder="Digite o nome" value="${
            db_contacts[myParam - 1].name
         }" required>
      </section>
      <section class="create-form__section">
         <label for="phone" class="create-form__label">Telefone:</label>
         <input type="text" class="create-form__input" name="phone" id="phone" placeholder="Digite o telefone" value="${
            db_contacts[myParam - 1].phone
         }" required>
      </section>
      <section class="create-form__section">
         <label for="email" class="create-form__label">Email:</label>
         <input type="text" class="create-form__input" name="email" id="email" placeholder="Digite o email" value="${
            db_contacts[myParam - 1].email
         }">
      </section>
      <section class="create-form__section">
         <label for="observations" class="create-form__label">Observações:</label>
         <textarea name="observations" class="create-form__textarea" id="observations" rows="3" placeholder="Insira as observações">${
            db_contacts[myParam - 1].observations
         }</textarea>
      </section>
      <div class="create-form__div-button">
         <button type="submit" class="create-form__button" id="create_contact_button" onclick="updateContact()">Atualizar</button>
      </div>

   </form>

`;
