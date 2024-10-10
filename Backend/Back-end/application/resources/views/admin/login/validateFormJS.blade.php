<script>
    function validateForm() {
        let isValid = true;

        const currentPassword = document.getElementById('current-password').value;
        const newPassword = document.getElementById('new-password').value;

        const currentPasswordError = document.getElementById('current-password-error');
        const newPasswordError = document.getElementById('new-password-error');

        currentPasswordError.textContent = '';
        newPasswordError.textContent = '';

        if (!currentPassword) {
            currentPasswordError.textContent = 'Le champ est vide';
            isValid = false;
        } else if (currentPassword.length < 8) {
            currentPasswordError.textContent = 'Veuillez choisir un mot de passe contenant au moins 8 caractères.';
            isValid = false;
        } else if (currentPassword.length > 100) {
            currentPasswordError.textContent = 'Veuillez choisir un mot de passe contenant moins de 100 caractères.';
            isValid = false;
        }

        if (!newPassword) {
            newPasswordError.textContent = 'Le champ est vide';
            isValid = false;
        } else if (newPassword.length < 8) {
            newPasswordError.textContent = 'Veuillez choisir un mot de passe contenant au moins 8 caractères.';
            isValid = false;
        } else if (newPassword.length > 100) {
            newPasswordError.textContent = 'Veuillez choisir un mot de passe contenant moins de 100 caractères.';
            isValid = false;
        } else if (!/[A-Z]/.test(newPassword) || !/[a-z]/.test(newPassword) || !/[0-9]/.test(newPassword) || !/[@$!%*#?&]/.test(newPassword)) {
            newPasswordError.textContent = 'Le nouveau mot de passe doit contenir des majuscules, des minuscules, des chiffres et des caractères spéciaux';
            isValid = false;
        }

        return isValid;
    }
    </script>
