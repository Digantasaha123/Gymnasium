const container = document.querySelector('.container');
const registerBtn = document.querySelector('.registerBtn');
const loginBtn = document.querySelector('.LoginBtn');

if (registerBtn) {
    registerBtn.addEventListener('click', () => {
        container.classList.add('active');
    });
}

if (loginBtn) {
    loginBtn.addEventListener('click', () => {
        container.classList.remove('active');
    });
}

const adminRegisterForm = document.getElementById('adminRegisterForm');

if (adminRegisterForm) {
    adminRegisterForm.addEventListener('submit', function(event) {
        const username = document.getElementById('adminRegisterUsername').value.trim();
        const email = document.getElementById('adminRegisterEmail').value.trim();
        const password = document.getElementById('adminRegisterPassword').value.trim();
        const role = document.getElementById('adminRole').value;

        if (username === "") {
            alert("Username cannot be empty.");
            event.preventDefault();
        } else if (username.length < 4) {
            alert("Username must be at least 4 characters long.");
            event.preventDefault();
        } else if (/\d/.test(username)) {
            alert("Username cannot contain numbers.");
            event.preventDefault();
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert("Please enter a valid email address format (e.g., name@example.com).");
            event.preventDefault();
        } else if (role === "") {
            alert("You must select an admin role from the list.");
            event.preventDefault();
        } else if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            event.preventDefault();
        } else if (!/[A-Z]/.test(password)) {
            alert("Password must contain at least one uppercase letter.");
            event.preventDefault();
        } else if (!/[a-z]/.test(password)) {
            alert("Password must contain at least one lowercase letter.");
            event.preventDefault();
        } else if (!/\d/.test(password)) {
            alert("Password must contain at least one number.");
            event.preventDefault();
        }
    });
}

const adminLoginForm = document.getElementById('adminLoginForm');

if (adminLoginForm) {
    adminLoginForm.addEventListener('submit', function(event) {
        const username = document.getElementById('adminloginUsername').value.trim();
        const password = document.getElementById('adminloginPassword').value.trim();

        if (username === "") {
            alert("Please enter your username.");
            event.preventDefault();
        } else if (password === "") {
            alert("Please enter your password.");
            event.preventDefault();
        }
    });
}


const togglePasswordIcons = document.querySelectorAll('.toggle-password');

togglePasswordIcons.forEach(icon => {
    icon.addEventListener('click', function () {
        const passwordInput = this.previousElementSibling;
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('bx-lock-alt');
        this.classList.toggle('bx-lock-open-alt');
    });
});