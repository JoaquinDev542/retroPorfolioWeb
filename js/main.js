setTimeout(function() {
    document.querySelector('.spinnerContainer').style.display = "none";
    document.querySelector('.content').style.display = "block";
  
    // Scroll Reveal
    const sr = ScrollReveal({
    duration: 1000,
    delay: 200
    });
    
    sr.reveal('.header');
    sr.reveal('.hero');
    sr.reveal('.skills');
    sr.reveal('.aboutExtra');
    sr.reveal('.aboutContent');
    sr.reveal('.works');
}, 1500);