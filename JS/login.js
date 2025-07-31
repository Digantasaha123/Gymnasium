  const container = document.querySelector('.container');
  const registerBtn = document.querySelector('.registerBtn');
  const loginBtn = document.querySelector('.LoginBtn');

  registerBtn.addEventListener('click', () => {
    container.classList.add('active');
  });

  loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
  });

  // Register form
  const registerForm = document.querySelector('.formBox.Register form');
  registerForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = registerForm.querySelector('input[placeholder="Username"]').value.trim();
    const email = registerForm.querySelector('input[placeholder="Email"]').value.trim();
    const password = registerForm.querySelector('input[placeholder="Password"]').value.trim();

    if (username.length < 4 || /\d/.test(username)) {
      alert("Username must be at least 4 letters and not contain numbers.");
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

  // Login form
  const loginForm = document.querySelector('.formBox.login form');
  loginForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = loginForm.querySelector('input[placeholder="Username"]').value.trim();
    const password = loginForm.querySelector('input[placeholder="Password"]').value.trim();

    // Same username rules as register
    if (username.length < 4 || /\d/.test(username)) {
      alert("Username must be at least 4 letters and not contain numbers.");
      return;
    }

    if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
      return;
    }

    alert("Login successful!");
  
  });