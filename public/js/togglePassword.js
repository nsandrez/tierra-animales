function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0 1 12 19c-5 0-9-5-9-5a16.23 16.23 0 0 1 3.549-3.953M12 5c5 0 9 5 9 5a16.23 16.23 0 0 1-1.877 2.659M3 3l18 18" />
            </svg>
        `;
    } else {
        passwordInput.type = 'password';
        eyeIcon.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm8-1s-3-5-8-5-8 5-8 5 3 5 8 5 8-5 8-5z" />
            </svg>
        `;
    }
}
