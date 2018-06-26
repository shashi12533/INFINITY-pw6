// Import js files
import './ui';

console.log('app.js is running ! 💛');

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});

var packs = document.querySelector('.aio_packs');


// window.addEventListener('resize', function() {
//     if (window.innerWidth >= 600) {
//         packs.setAttribute('data-flickity','{ "draggable": false }');
//         console.log('cc')
    
//     } else {
//         packs.setAttribute('data-flickity','{ "wrapAround": true }');
//         console.log('ets')
//     }
// });