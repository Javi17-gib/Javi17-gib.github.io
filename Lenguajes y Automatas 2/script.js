function buscar() {
    const query = document.getElementById('search').value.toLowerCase();
    const sections = document.querySelectorAll('section');
  
    for (let section of sections) {
      const text = section.innerText.toLowerCase();
      if (text.includes(query)) {
        section.scrollIntoView({ behavior: 'smooth' });
        section.style.boxShadow = '0 0 20px #0ea5e9';
        setTimeout(() => section.style.boxShadow = '', 1500);
        break;
      }
    }
  }
  