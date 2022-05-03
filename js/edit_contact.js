// BROWSER URL
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("id");


// LOCALSTORAGE CONTACTS
const getLocalStorage = () => 
   JSON.parse(localStorage.getItem("db_contacts"));

const setLocalStorage = (contact) =>
   localStorage.setItem("db_contacts", JSON.stringify(contact));

const readContacts = () => 
   getLocalStorage();


// ACCESS CONTACT
const db_contacts = readContacts();
const selected_contact = db_contacts[myParam]; //ACESSANDO PELO ID VINDO DO GET


// ACCESSING ELEMENTS
const div = document.querySelector(".content-form");


// INSERTING CONTENT
div.innerHTML = `

   <form class="create-form" id="create-contact-form" method="POST" action="http://localhost/agenda_contatos/view_contact.php?id=${myParam}">

      <section class="create-form__section">
         <label for="name" class="create-form__label">Nome do Contato:</label>
         <input type="text" class="create-form__input" name="name" id="name" placeholder="Digite o nome" value="${selected_contact.name}" required maxlength="30">
      </section>
      <section class="create-form__section">
         <label for="phone" class="create-form__label">Telefone:</label>
         <input type="text" class="create-form__input" name="phone" id="phone" placeholder="Digite o telefone" value="${selected_contact.phone}" required maxlength="35">
      </section>
      <section class="create-form__section">
         <label for="email" class="create-form__label">Email:</label>
         <input type="text" class="create-form__input" name="email" id="email" placeholder="Digite o email" value="${selected_contact.email}" maxlength="100">
      </section>
      <section class="create-form__section">
         <label for="observations" class="create-form__label">Observações:</label>
         <textarea name="observations" class="create-form__textarea" id="observations" rows="3" placeholder="Insira as observações" maxlength="300">${selected_contact.observations}</textarea>
      </section>
      <div class="create-form__div-button">
         <button type="submit" class="create-form__button" id="create_contact_button" onclick="updateContact()">Atualizar</button>
      </div>

   </form>

`;
