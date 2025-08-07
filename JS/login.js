
const container = document.querySelector('.container');
const registerBtn = document.querySelector('.registerBtn');
const loginBtn = document.querySelector('.LoginBtn');

registerBtn.addEventListener('click', () => {
  container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
  container.classList.remove('active');
});


const registerForm = document.querySelector('.formBox.Register form');
registerForm.addEventListener('submit', function (e) {
  const username = document.getElementById('registerUsername').value.trim();
  const email = document.getElementById('registerEmail').value.trim();
  const password = document.getElementById('registerPassword').value.trim();
  const confirmPassword = document.getElementById('confirmPassword').value.trim();

  if (username.length < 4 || /\d/.test(username)) {
    alert("Username must be at least 4 letters and contain no numbers.");
    e.preventDefault(); // Stop submission if validation fails
    return;
  }

  if (!email.includes('@') || !email.includes('.')) {
    alert("Please enter a valid email address.");
    e.preventDefault();
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    e.preventDefault();
    return;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    e.preventDefault();
    return;
  }
});
