/********* Fade In **********/

document.addEventListener('DOMContentLoaded', function () {

    const sectionObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animationTitre(entry);
  
          observer.unobserve(entry.target)
        }
  
      });
    });
    const sections = document.querySelectorAll('.hero, .presentation-section, .project-section, .form-section, .form-section-single, .single-site');
    sections.forEach((section) => {
      sectionObserver.observe(section);
    });
  });
  
  
  function animationTitre(entry) {
  
    const title = entry.target.querySelector('h1, h2, h3');
    if (title && title.textContent) {
      let mots = title.textContent.split(' ');
      title.textContent = '';
  
      mots.forEach((mot) => {
        let span = document.createElement('span');
        span.classList.add('titleFade');
        span.textContent = mot;
        title.appendChild(span);
      });
  
      let spans = title.querySelectorAll('.titleFade');
  
      spans.forEach((span, index) => {
        let delai = 350 + 350 * index;
        setTimeout(() => {
          span.classList.add('visibility');
        }, delai);
      });
    }
  }
  