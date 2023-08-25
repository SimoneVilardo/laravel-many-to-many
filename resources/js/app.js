import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const deleteSubmitButton = document.querySelectorAll('.delete-post-form button[type="submit"]');

deleteSubmitButton.forEach((button) => {
    button.addEventListener('click', (event) => {

        event.preventDefault();

        const modal = document.getElementById('confirmProjectDelete');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const buttonDelete = document.querySelector('.confirm-delete-button');

        buttonDelete.addEventListener('click', () => {

            button.parentElement.submit();
        });
    })
});
