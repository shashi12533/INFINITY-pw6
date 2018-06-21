// Variables ------------------------------------------
var starBox = document.querySelector('.stars');

// Functions ------------------------------------------
function loadSquare() {
	starBox.innerHTML = '';
	var counter = 0;
	while ( counter < 100 ) {
		createSquare();
		counter++
	}
}
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

// SetTimeout -----------------------------------------
setTimeout(function() {
	loadSquare();
}, 0);
setTimeout(function() {
	var scene = document.getElementById('scene');
	var parallaxInstance = new Parallax(scene);
}, 50);
setTimeout(function() {
	loadSquare();
}, 100);

window.addEventListener('keydown', function(e) {
	if (e.which === 32) {
		e.preventDefault();
		loadSquare();
	}
});


function createSquare() {
	var size = getRandomInt(10) + 1 + 'px';
	var star = document.createElement('div');
	star.classList.add('star');
	star.style.left = getRandomInt(100)+ '%';
   star.style.width = size;
   star.style.height = size;
	star.setAttribute("data-depth", "0.2");
	starBox.appendChild(star);
};
var sign = document.querySelector('.sign');
var signin = document.querySelector('#signin');
var signup = document.querySelector('#signup');
var changeLink = document.querySelectorAll('.sign_form_text_link');
for (let i = 0; i < changeLink.length; i++) {
	changeLink[i].addEventListener('click', function() {
		// starBox.style.zIndex = "999"
		setTimeout(function() {
			signin.classList.toggle('is-flex');
			signup.classList.toggle('is-flex');
		}, 00)
		// setTimeout(function() {
		// 	starBox.style.zIndex = "-1"
		// }, 200);
	}) 
	
}
