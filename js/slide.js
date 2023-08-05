let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(index) {
    showSlides(slideIndex += index);
}


function showSlides(a) {
    
    let i;
    let slides = document.getElementsByClassName("mySlides");

    if (a > slides.length) { 
        slideIndex = 1 
    }

    if (a < 1) { 
        slideIndex = slides.length 
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";

}
