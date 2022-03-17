//Navigation
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link');

navToggle.addEventListener('click', () => {
   document.body.classList.toggle('nav-open');
});

navLinks.forEach((link) => {
   link.addEventListener('click', () => {
      document.body.classList.remove('nav-open');
   });
});


//Gallery

const gallery = document.getElementById('gallery');
const popup = document.getElementById('popup');
const selectedImage = document.getElementById('selected-image');
const imageIndexes = [1,2,3,4,5,6,7,8,9,11,12,13,14];
const selectedIndex = null;

imageIndexes.forEach((i) => {
   const image = document.createElement('img');
   image.src = `gallery/gal-img-${i}.jpg`;
   image.alt = `Guernsey Architectural Project`;
   image.classList.add('gallery-img');

   image.addEventListener('click', () =>{
      //Popup 
     popup.style.transform = 'translateY(0)';
      selectedImage.src = `gallery/gal-img-${i}.jpg`;
      selectedImage.alt = `Guernsey Architectural Project`;
   })
   gallery.appendChild(image);
})

popup.addEventListener('click', ()=> {
   popup.style.transform = `translateY(-100%)`;
   popup.src = '';
   popup.alt = '';
})