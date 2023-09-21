const menu = document.querySelector('.menu');
const menuBtn = document.querySelector('.menu-btn');
const closeBtn = document.querySelector('.close-btn');
const loginForm = document.querySelector('.login-form')
const signupForm = document.querySelector('.signup-form')
const formToggleButton = document.querySelector('.form-swap-btn')
const formHeading = document.querySelector('.form-heading')

// Window Scrolling Effect
window.addEventListener('scroll', () => {
  var y = window.scrollY;
  if (y > 30) {
    document.querySelector('header').classList.add('visible')
  } else {
    document.querySelector('header').classList.remove('visible')
  }
})

// Carousel item
const carouselItems = document.querySelectorAll('.carousel-item')
const carouselLeftBtn = document.querySelector('.carousel-left-btn')
const carouselRightBtn = document.querySelector('.carousel-right-btn')
let currentSlide = 0

menuBtn.addEventListener('click', function () {
  menu.classList.add('active');
})

closeBtn.addEventListener('click', function () {
  menu.classList.remove('active');
})

if (formToggleButton !== null) {
  formToggleButton.addEventListener('click', () => {
    loginForm.classList.toggle('active')
    signupForm.classList.toggle('active')
    formToggleButton.textContent = formToggleButton.textContent == 'Login?' ? 'SignUp?' : 'Login?'
    formHeading.textContent = formHeading.textContent == 'WELCOME USER' ? 'WELCOME BACK' : 'WELCOME USER'
  })
}

// Carousel sliding DOM
if (carouselLeftBtn !== null) {
  carouselLeftBtn.addEventListener('click', () => {
    if (currentSlide === carouselItems.length - 1) {
      carouselItems[currentSlide].classList.remove('active')
      currentSlide = 0
      carouselItems[currentSlide].classList.add('active')
    } else {
      carouselItems[currentSlide].classList.remove('active')
      currentSlide++
      carouselItems[currentSlide].classList.add('active')
    }
  })


  carouselRightBtn.addEventListener('click', () => {
    if (currentSlide === 0) {
      carouselItems[currentSlide].classList.remove('active')
      currentSlide = carouselItems.length - 1
      carouselItems[currentSlide].classList.add('active')
    } else {
      carouselItems[currentSlide].classList.remove('active')
      currentSlide--
      carouselItems[currentSlide].classList.add('active')
    }
  })
}