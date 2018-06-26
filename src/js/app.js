// Import js files
import './ui';

console.log('app.js is running ! 💛');

var elem = document.querySelectorAll('.main-carousel');
for (let i = 0; i < elem.length; i++) {
  elem[i];
  var flkty = new Flickity( elem[i], {
    // options
    cellAlign: 'left',
    contain: true
  });
  
  // element argument can be a selector string
  //   for an individual element
  var flkty = new Flickity( '.main-carousel', {
    // options
  });
  
  
}
