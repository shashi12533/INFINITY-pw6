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

// Userform -------------------------------------

var userform = document.querySelector('.userform')
var ctn1 = document.querySelector('.userform_container_first');
var ctn2 = document.querySelector('.userform_container_second');
var ctn3 = document.querySelector('.userform_container_third');
var next1 = document.querySelector('#next1');
var next2 = document.querySelector('#next2');

if (document.body.contains(userform)) {
	next1.addEventListener('click', function() {
		ctn1.classList.remove('is-visible');
		ctn2.classList.add('is-visible');
		
	});
	next2.addEventListener('click', function() {
		ctn2.classList.remove('is-visible');
		ctn3.classList.add('is-visible');
	});
}


// Desc

desc1 = document.querySelector('#desc1');
desc2 = document.querySelector('#desc2');
desc3 = document.querySelector('#desc3');
desc4 = document.querySelector('#desc4');
icon1 = document.querySelector('#icon1');
icon2 = document.querySelector('#icon2');
icon3 = document.querySelector('#icon3');
icon4 = document.querySelector('#icon4');

window.addEventListener('scroll', function() {
	if (window.scrollY < desc1.offsetHeight ) {
		
		
	}
	else if (window.scrollY < desc1.offsetHeight + desc2.offsetHeight - 100) {
		console.log('yeee');
		icon1.style.background = "url(../assets/images/desc_planets/clock-degrade.svg) no-repeat center"
		icon1.style.backgroundSize = "100%"
		icon2.style.background = "url(../assets/images/desc_planets/connection.svg) no-repeat center"
		icon2.style.backgroundSize = "100%"
		icon3.style.background = "url(../assets/images/desc_planets/people.svg) no-repeat center"
		icon3.style.backgroundSize = "100%"
		icon4.style.background = "url(../assets/images/desc_planets/services.svg) no-repeat center"
		icon4.style.backgroundSize = "100%"

		
	}
	else if (window.scrollY < desc1.offsetHeight + desc2.offsetHeight + desc3.offsetHeight - 100 ) {
		icon1.style.background = "url(../assets/images/desc_planets/clock.svg) no-repeat center"
		icon1.style.backgroundSize = "100%"
		icon2.style.background = "url(../assets/images/desc_planets/connection-degrade.svg) no-repeat center"
		icon2.style.backgroundSize = "100%"
		icon3.style.background = "url(../assets/images/desc_planets/people.svg) no-repeat center"
		icon3.style.backgroundSize = "100%"
		icon4.style.background = "url(../assets/images/desc_planets/services.svg) no-repeat center"
		icon4.style.backgroundSize = "100%"
	}
	else if (window.scrollY < desc1.offsetHeight + desc2.offsetHeight + desc3.offsetHeight + desc4.offsetHeight - 100 ){
		icon1.style.background = "url(../assets/images/desc_planets/clock.svg) no-repeat center"
		icon1.style.backgroundSize = "100%"
		icon2.style.background = "url(../assets/images/desc_planets/connection.svg) no-repeat center"
		icon2.style.backgroundSize = "100%"
		icon3.style.background = "url(../assets/images/desc_planets/people-degrade.svg) no-repeat center"
		icon3.style.backgroundSize = "100%"
		icon4.style.background = "url(../assets/images/desc_planets/services.svg) no-repeat center"
		icon4.style.backgroundSize = "100%"
	}
	else {
		icon1.style.background = "url(../assets/images/desc_planets/clock.svg) no-repeat center"
		icon1.style.backgroundSize = "100%"
		icon2.style.background = "url(../assets/images/desc_planets/connection.svg) no-repeat center"
		icon2.style.backgroundSize = "100%"
		icon3.style.background = "url(../assets/images/desc_planets/people.svg) no-repeat center"
		icon3.style.backgroundSize = "100%"
		icon4.style.background = "url(../assets/images/desc_planets/services-degrade.svg) no-repeat center"
		icon4.style.backgroundSize = "100%"
	}

});
