document.addEventListener('DOMContentLoaded', function() {
    evenListeners();
})

function evenListeners () {
    navbar();
    faqListeners();
}

function navbar () {
    const button = document.querySelector('.nav__btn');
    const nav = document.querySelector('.nav__elements');
    const background = document.querySelector('.nav__background');

    const onScroll = (event) => {
      const navscroll = document.querySelector(".navscroll");
      const scrollPosition = event.target.scrollingElement.scrollTop;
  
      if (scrollPosition > 10) {
        if (!navscroll.classList.contains("scrolled-down")) {
          navscroll.classList.add("scrolled-down");
        }
      } else {
        if (navscroll.classList.contains("scrolled-down")) {
          navscroll.classList.remove("scrolled-down");
        }
      }
    };
  
    button.onclick = function () {
      nav.style.transform = "translateX(0)";
      background.style.display = "block";
    }
    
    background.onclick = function () {
      nav.style.transform = "translateX(170px)";
      background.style.display = "none";
    }

    document.addEventListener("scroll", onScroll);
}

function faqListeners() {
  const faqQuestions = document.querySelectorAll('.faq-question');

  faqQuestions.forEach(question => {
      question.addEventListener('click', () => {
          question.classList.toggle('active');
          const answer = question.nextElementSibling;
          if (question.classList.contains('active')) {
              answer.style.maxHeight = answer.scrollHeight + 'px';
          } else {
              answer.style.maxHeight = '0';
          }
      });
  });
}