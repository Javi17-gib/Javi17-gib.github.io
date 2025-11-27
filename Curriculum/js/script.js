document.addEventListener('DOMContentLoaded', () => {
  const y = new Date().getFullYear();
  document.querySelectorAll('#year, #year2, #year3').forEach(el => { if(el) el.textContent = y; });

  const modal = document.getElementById('projectModal');
  const closeBtn = modal.querySelector('.modal-close');
  const modalTitle = document.getElementById('modalTitle');
  const modalTech = document.getElementById('modalTech');
  const modalDesc = document.getElementById('modalDesc');
  const modalThumbnails = document.getElementById('modalThumbnails');
  const modalGithub = document.getElementById('modalGithub');

  // Lightbox
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lbClose = document.querySelector('.lightbox-close');
  const lbPrev = document.querySelector('.lightbox-prev');
  const lbNext = document.querySelector('.lightbox-next');
  let currentImages = [];
  let currentIndex = 0;

  document.querySelectorAll('.view-project').forEach(btn => {
    btn.addEventListener('click', e => {
      const card = e.target.closest('.project-card');
      const project = JSON.parse(card.dataset.project);

      modalTitle.textContent = project.title;
      modalTech.textContent = project.tech || '';
      modalDesc.textContent = project.desc || '';
      modalGithub.href = project.github || '#';

      modalThumbnails.innerHTML = '';
      currentImages = project.images || [];

      currentImages.forEach((src, i) => {
        const img = document.createElement('img');
        img.src = src;
        img.addEventListener('click', () => {
          lightboxImg.src = src;
          lightbox.setAttribute('aria-hidden','false');
          currentIndex = i;
        });
        modalThumbnails.appendChild(img);
      });

      modal.setAttribute('aria-hidden','false');
      document.body.style.overflow = 'hidden';
    });
  });

  // Cerrar modal
  closeBtn.addEventListener('click', () => {
    modal.setAttribute('aria-hidden','true');
    document.body.style.overflow = '';
  });

  modal.addEventListener('click', e => {
    if(e.target === modal){
      modal.setAttribute('aria-hidden','true');
      document.body.style.overflow = '';
    }
  });

  document.addEventListener('keydown', e => {
    if(e.key === 'Escape'){
      modal.setAttribute('aria-hidden','true');
      lightbox.setAttribute('aria-hidden','true');
      document.body.style.overflow = '';
    }
  });

  // Lightbox controles
  lbClose.addEventListener('click', () => lightbox.setAttribute('aria-hidden','true'));
  lbPrev.addEventListener('click', () => {
    if(currentImages.length === 0) return;
    currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
    lightboxImg.src = currentImages[currentIndex];
  });
  lbNext.addEventListener('click', () => {
    if(currentImages.length === 0) return;
    currentIndex = (currentIndex + 1) % currentImages.length;
    lightboxImg.src = currentImages[currentIndex];
  });
});
