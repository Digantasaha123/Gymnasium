// Hamburger menu
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


// star click event
  const reviewItems = document.querySelectorAll('.reviewItem');

  reviewItems.forEach(item => {
    const stars = item.querySelectorAll('.star');

    stars.forEach((star, index) => {
      if (index < 3) {
        star.classList.remove('bx-star');
        star.classList.add('bxs-star');
        star.style.color = '#B6F500';
      }
    });

    stars.forEach(star => {
      star.addEventListener('click', () => {
        const isFilled = star.classList.contains('bxs-star');

        if (isFilled) {
          star.classList.remove('bxs-star');
          star.classList.add('bx-star');
          star.style.color = '';
        } 
        else {
          star.classList.remove('bx-star');
          star.classList.add('bxs-star');
          star.style.color = '#B6F500';
        }
      });
    });
  });




