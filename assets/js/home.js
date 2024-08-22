let dots = document.getElementsByClassName("dots-item");
let dotsArea = document.getElementsByClassName("dots-block")[0];
let slides = document.getElementsByClassName("slides-item");
let prevBtn = document.getElementById("left-button");
let nextBtn = document.getElementById("right-button");
slideIndex = 1;
let timer;

showSlides(slideIndex);
function showSlides(n) {
  if (n < 1) {
    slideIndex = slides.length;
  } else if (n > slides.length) {
    slideIndex = 1;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].classList.add("active");
  clearTimeout(timer);
  timer = setTimeout(() => plusSlides(1), 3200);
}

function plusSlides(n) {
  showSlides((slideIndex += n));
}
function currentSlide(n) {
  showSlides((slideIndex = n));
}
document.onkeydown = function (e) {
  switch (e.keyCode) {
    case 37:
      e.preventDefault();
      slideIndex--;
      showSlides(slideIndex);
      break;
    case 39:
      e.preventDefault();
      slideIndex++;
      showSlides(slideIndex);
      break;
  }
};
prevBtn.onclick = function () {
  plusSlides(-1);
};
nextBtn.onclick = function () {
  plusSlides(1);
};
dotsArea.onclick = function (e) {
  for (let i = 0; i < dots.length + 1; i++) {
    if (e.target.classList.contains("dots-item") && e.target == dots[i - 1]) {
      currentSlide(i);
    }
  }
};
