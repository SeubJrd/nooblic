/**
 * File articles-carousel.js.
 *
 * Permet le fonctionnement du carousel circulaire
 *
 */
( function() {

	//Params
	let carouselArticles = null;
	let carouselArticles2 = null;
	let circleCenter = null;
	const angle = 45; //rad
	const rayon = 259; //px
	const rayon2 =289*0.479; //px
	let itemArray = [];
	let itemBoundingBox = [];

	let rot = 0;

	init();
	calcRotation();

	/*////////////////////////////////////////////////////////////////////////Fonctions//////////////////////////////////////////////////////////////////////////////*/

	function init()
	{
		//Calculer le centre du carousel
		calcCarouselpos();

		//Recupérer les éléments de carousel
		//Normalement pas plus de 8 éléments dans le tableau
		itemArray = document.querySelectorAll(".carouselItem");
		for( let i = 0; i < itemArray.length; i++ )
		{
			itemBoundingBox.push(itemArray[i].getBoundingClientRect());
		}
	}

	function calcCarouselpos()
	{
        carouselArticles = document.querySelector("#carouselArticles");
        carouselArticles2 = document.querySelector("#carouselArticles2");
		circleCenter = { x: (carouselArticles.getBoundingClientRect().right - carouselArticles.getBoundingClientRect().left)/2, y: (carouselArticles.getBoundingClientRect().bottom - carouselArticles.getBoundingClientRect().top)/2 };
	}

	function calcRotation() {
		for( let i = 0; i < itemArray.length; i++ ) {

            let currentRayon = rayon;
		    if( i+1 > 8 ) currentRayon = rayon2; //Passer au plus petit cercle apres 8 articles

			itemArray[i].style.left = Math.cos((angle * Math.PI / 180) * i + rot ) * currentRayon + (circleCenter.x - (itemBoundingBox[i].right - itemBoundingBox[i].left) / 2) + "px";
			itemArray[i].style.top = Math.sin((angle * Math.PI / 180) * i + rot ) * currentRayon + (circleCenter.y - (itemBoundingBox[i].bottom - itemBoundingBox[i].top)) + "px";
			itemArray[i].style.transform = "rotate(" + ((angle * i + rot*180/Math.PI)+90) + "deg)";
		}
	}

	//onmousemove = function(e){ rot = e.clientX/1000 };

	/*////////////////////////////////////////////////////////////////////////Loop & Triggers/////////////////////////////////////////////////////////////////////////////*/

	//Boucle qui fait tourner le cercle
	var time = 25;
	setInterval(function() {

		rot+=0.002;

		//faire tourner la totalité de la div plutot que chaque élément indépendamment
        carouselArticles.style.transform = "rotate(" + ((angle + rot*180/Math.PI)+90) + "deg)";
        carouselArticles2.style.transform = "rotate(" + ((angle - rot*180/Math.PI)+90) + "deg)";

	}, time);

	//Recentrer le cercle au changement de taille de la fenetre
	window.onresize = doStuff;
	function doStuff() {
		calcCarouselpos();
	}


}() );