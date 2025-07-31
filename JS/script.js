
let menu = document.querySelector('#menuIcon');
let navbar = document.querySelector('.nav');

menu.onclick = () => {
  menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
  menu.classList.remove('bx-x');    
    navbar.classList.remove('active');
}

// typing text

const typed = new Typed('.multiple-text', {
      strings: ['Bodybuilding', 'PowerLifting', 'Strength Training', 'Physical Fitness'],
      typeSpeed: 60,
      backSpeed: 60,
      backDelay: 1000,
      loop: true,
    });


// modal section
  const joinBtn = document.querySelector('.navBtn');
  const modal = document.getElementById('joinModal');

  joinBtn.addEventListener('click', function(event) {
    event.preventDefault(); // prevent default link
    modal.style.display = 'flex';
  });

  function closeModal() {
    modal.style.display = 'none';
  }

  window.addEventListener('click', function(e) {
    if (e.target === modal) {
      closeModal();
    }
  });



