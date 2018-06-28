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
sh_icon1 = document.querySelector('#sh-icon1');
sh_icon2 = document.querySelector('#sh-icon2');
sh_icon3 = document.querySelector('#sh-icon3');
sh_icon4 = document.querySelector('#sh-icon4');

pl_icon1 = document.querySelector('#pl-icon1');
pl_icon2 = document.querySelector('#pl-icon2');
pl_icon3 = document.querySelector('#pl-icon3');
pl_icon4 = document.querySelector('#pl-icon4');

sm_icon1 = document.querySelector('#sm-icon1');
sm_icon2 = document.querySelector('#sm-icon2');
sm_icon3 = document.querySelector('#sm-icon3');
sm_icon4 = document.querySelector('#sm-icon4');

var spaceship = document.querySelector('.spaceship');
var spacemodule = document.querySelector('.spacemodule');
var planet = document.querySelector('.planet');

function changeIcon(theIcon, path, picture) {
	theIcon.style.background = "url(../assets/images/"+path+"/"+picture+".svg) no-repeat center"
	theIcon.style.backgroundSize = "100%"
}
window.addEventListener('scroll', function() {
	if (window.scrollY < desc1.offsetHeight + desc2.offsetHeight - 100) {
		if (document.contains(spaceship)) {
			sh_icon1.style.background = "url(../assets/images/desc_planets/clock-degrade.svg) no-repeat center"
			sh_icon1.style.backgroundSize = "100%"
			sh_icon2.style.background = "url(../assets/images/desc_planets/connection.svg) no-repeat center"
			sh_icon2.style.backgroundSize = "100%"
			sh_icon3.style.background = "url(../assets/images/desc_planets/people.svg) no-repeat center"
			sh_icon3.style.backgroundSize = "100%"
			sh_icon4.style.background = "url(../assets/images/desc_planets/services.svg) no-repeat center"
			sh_icon4.style.backgroundSize = "100%"
		}
		else if (document.contains(planet)) {
			pl_icon1.style.background = "url(../assets/images/desc_spaceship/climate-degrade.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spaceship/oxygen.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spaceship/wildlife.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
			pl_icon4.style.background = "url(../assets/images/desc_spaceship/work.svg) no-repeat center"
			pl_icon4.style.backgroundSize = "100%"
		}	
		else if (document.contains(spacemodule)) {
			pl_icon1.style.background = "url(../assets/images/desc_spacemodule/home-degrade.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spacemodule/publics-services.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spacemodule/sun-umbrella.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
		}	
			
	}
	else if (window.scrollY < desc1.offsetHeight + desc2.offsetHeight + desc3.offsetHeight - 100 ) {
		if (document.contains(spaceship)) {
			sh_icon1.style.background = "url(../assets/images/desc_planets/clock.svg) no-repeat center"
			sh_icon1.style.backgroundSize = "100%"
			sh_icon2.style.background = "url(../assets/images/desc_planets/connection-degrade.svg) no-repeat center"
			sh_icon2.style.backgroundSize = "100%"
			sh_icon3.style.background = "url(../assets/images/desc_planets/people.svg) no-repeat center"
			sh_icon3.style.backgroundSize = "100%"
			sh_icon4.style.background = "url(../assets/images/desc_planets/services.svg) no-repeat center"
			sh_icon4.style.backgroundSize = "100%"
		}
		else if (document.contains(planet)) {
			pl_icon1.style.background = "url(../assets/images/desc_spaceship/climate.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spaceship/oxygen-degrade.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spaceship/wildlife.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
			pl_icon4.style.background = "url(../assets/images/desc_spaceship/work.svg) no-repeat center"
			pl_icon4.style.backgroundSize = "100%"
		}	
		else if (document.contains(spacemodule)) {
			pl_icon1.style.background = "url(../assets/images/desc_spacemodule/home.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spacemodule/publics-services-degrade.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spacemodule/sun-umbrella.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
		}
	}
	else if (window.scrollY < desc1.offsetHeight + desc2.offsetHeight + desc3.offsetHeight + desc4.offsetHeight - 100 ){
		if (document.contains(spaceship)) {
			sh_icon1.style.background = "url(../assets/images/desc_planets/clock.svg) no-repeat center"
			sh_icon1.style.backgroundSize = "100%"
			sh_icon2.style.background = "url(../assets/images/desc_planets/connection.svg) no-repeat center"
			sh_icon2.style.backgroundSize = "100%"
			sh_icon3.style.background = "url(../assets/images/desc_planets/people-degrade.svg) no-repeat center"
			sh_icon3.style.backgroundSize = "100%"
			sh_icon4.style.background = "url(../assets/images/desc_planets/services.svg) no-repeat center"
			sh_icon4.style.backgroundSize = "100%"
		}
		else if (document.contains(planet)) {
			pl_icon1.style.background = "url(../assets/images/desc_spaceship/climate.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spaceship/oxygen.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spaceship/wildlife-degrade.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
			pl_icon4.style.background = "url(../assets/images/desc_spaceship/work.svg) no-repeat center"
			pl_icon4.style.backgroundSize = "100%"
		}	
		
	}
	else {
		if (document.contains(spaceship)) {
			sh_icon1.style.background = "url(../assets/images/desc_planets/clock.svg) no-repeat center"
			sh_icon1.style.backgroundSize = "100%"
			sh_icon2.style.background = "url(../assets/images/desc_planets/connection.svg) no-repeat center"
			sh_icon2.style.backgroundSize = "100%"
			sh_icon3.style.background = "url(../assets/images/desc_planets/people.svg) no-repeat center"
			sh_icon3.style.backgroundSize = "100%"
			sh_icon4.style.background = "url(../assets/images/desc_planets/services-degrade.svg) no-repeat center"
			sh_icon4.style.backgroundSize = "100%"
		}
		else if (document.contains(planet)) {
			pl_icon1.style.background = "url(../assets/images/desc_spaceship/climate.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spaceship/oxygen.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spaceship/wildlife.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
			pl_icon4.style.background = "url(../assets/images/desc_spaceship/work-degrade.svg) no-repeat center"
			pl_icon4.style.backgroundSize = "100%"
		}	
		else if (document.contains(spacemodule)) {
			pl_icon1.style.background = "url(../assets/images/desc_spacemodule/home.svg) no-repeat center"
			pl_icon1.style.backgroundSize = "100%"
			pl_icon2.style.background = "url(../assets/images/desc_spacemodule/publics-services.svg) no-repeat center"
			pl_icon2.style.backgroundSize = "100%"
			pl_icon3.style.background = "url(../assets/images/desc_spacemodule/sun-umbrella-degrade.svg) no-repeat center"
			pl_icon3.style.backgroundSize = "100%"
		}
	}

});


// goto Packs