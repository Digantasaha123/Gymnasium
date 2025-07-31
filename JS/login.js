// Panel toggle
const container = document.querySelector('.container');
const registerBtn = document.querySelector('.registerBtn');
const loginBtn = document.querySelector('.LoginBtn');

registerBtn.addEventListener('click', () => {
  container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
  container.classList.remove('active');
});

// Register form validation
const registerForm = document.querySelector('.formBox.Register form');
registerForm.addEventListener('submit', function (e) {
  e.preventDefault();

  const username = document.getElementById('registerUsername').value.trim();
  const email = document.getElementById('registerEmail').value.trim();
  const password = document.getElementById('registerPassword').value.trim();

  if (username.length < 4 || /\d/.test(username)) {
    alert("Username must be at least 4 letters and contain no numbers.");
    return;
  }

  if (!email.includes('@') || !email.includes('.')) {
    alert("Please enter a valid email address.");
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return;
  }

  alert("Registration successful!");
});

// Login form validation
const loginForm = document.querySelector('.formBox.login form');
loginForm.addEventListener('submit', function (e) {
  e.preventDefault();

  const username = document.getElementById('loginUsername').value.trim();
  const password = document.getElementById('loginPassword').value.trim();

  if (username.length < 4 || /\d/.test(username)) {
    alert("Username must be at least 4 letters and contain no numbers.");
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return;
  }

  alert("Login successful!");
});