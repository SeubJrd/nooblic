/**
 * File articles-carousel.js.
 *
 * Permet le fonctionnement du carousel circulaire
 *
 */
( function() {

	//Params

	let rayon = 200;
	let couleurs = [ "#1B3C88", '#B84D97', '#12B4E1', '#E9483F', '#4AB277', '#ED6B1D' ];
	let nbTours = 2;
	let vitesse = 0.05;

	//Fonctionnement

	let facesCrayons = document.querySelectorAll('.faceCrayon');
	let trigger = document.querySelector('#trigger').onclick = function() {start()};
	let currentAngle = 0;
	let lastCouleur = 0;
	let currentTour = 0;
	var rotate = null;
	var isRotating = false;

	setup();
	calcAngle();

	/*////////////////////////////////////////////////////////////////////////Fonctions//////////////////////////////////////////////////////////////////////////////*/

	function setup()
	{
		let size = ( Math.PI * rayon * 2 )/facesCrayons.length+24/facesCrayons.length;
		for( let i = 0; i < facesCrayons.length; i++ )
		{
			facesCrayons[i].style.width = size.toString()+"px";
			facesCrayons[i].style.transformOrigin = "center center "+rayon.toString()+"px";
			facesCrayons[i].style.backgroundColor = getColor();
		}
	}

	function getColor()
	{
		let rnd;
		do{
			rnd = Math.floor(Math.random()*(couleurs.length));
		}while ( rnd === lastCouleur);
		lastCouleur = rnd;
		return couleurs[rnd];
	}

	function calcAngle()
	{
		let angles = 360 / facesCrayons.length;
		for( let i = 0; i < facesCrayons.length; i++ )
		{
			let angleZ = (i*angles+(currentAngle/(2*Math.PI)*360))%360;
			facesCrayons[i].style.transform = "rotate3d(0, 1, 0, "+angleZ+"deg)";

			//gerer l'affichage des sprites
			if( angleZ > 90 && angleZ < 270 )
			{
				let un = 1;
				facesCrayons[i].style.zIndex = un.toString();
			}
			else
			{
				let zero = 0;
				facesCrayons[i].style.zIndex = zero.toString();
			}

			//Gerer le nombre de tours
			if( currentTour/(2*Math.PI)*360 >= nbTours*360 )
			{
				console.log("timeOut");
				stop();
				currentTour = 0;
			}
		}
	}
	/*////////////////////////////////////////////////////////////////////////Loop & Triggers/////////////////////////////////////////////////////////////////////////////*/

	//Boucle qui fait tourner le cercle
	var time = 25;

	function start() {  // use a one-off timer
		if (!isRotating) {
			rotate = setInterval(tick, time);
			isRotating = true;
		}
	}

	function tick() {
		currentAngle += vitesse;
		currentTour += vitesse;
		calcAngle();
	};

	function stop() {
		clearInterval(rotate);
		isRotating = false;
		time = 25;
	};


	//Recentrer le cercle au changement de taille de la fenetre
	window.onresize = doStuff;
	function doStuff() {
	}


}() );