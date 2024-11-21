function handleFormSubmit(event) {
   // Prevent the default form submission behavior
   event.preventDefault();

   // Perform client-side validation if needed
   // ...

   // Submit the form using AJAX
   const form = event.target;
   const formData = new FormData(form);
   fetch(form.action, {
      method: 'POST',
      body: formData
   })
   .then(response => response.text())
   .then(data => {
      // Handle the response data
      // ...
   })
   .catch(error => {
      console.error('An error occurred:', error);
   });
}

const form = document.querySelector('form');
form.addEventListener('submit', handleFormSubmit);