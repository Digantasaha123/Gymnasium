

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

