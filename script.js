let slideIndex = 0;
let timeoutId = null;

// Initialize the slider
showSlides();

// Next/previous controls
function plusSlides(n) {
    clearTimeout(timeoutId);
    showSlidesManual(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    clearTimeout(timeoutId);
    showSlidesManual(slideIndex = n);
}

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    
    // Assignment Requirement: Using a for loop to iterate through slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    
    // For loop to update the navigation dots
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    
    // Auto-play: Changes image every 4 seconds
    timeoutId = setTimeout(showSlides, 4000); 
}

// Helper function for manual clicks to restart the auto-play timer correctly
function showSlidesManual(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    
    timeoutId = setTimeout(showSlides, 4000);
}
