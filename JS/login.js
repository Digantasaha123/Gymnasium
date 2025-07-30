const container = document.querySelector('.container');
const registrationBtn = document.querySelector('.registerBtn');
const loginBtn = document.querySelector('.LoginBtn');

registrationBtn.addEventListener('click', () => {
  container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
  container.classList.remove('active');
});