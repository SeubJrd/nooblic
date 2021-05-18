/**
 * File nyan-cat.js.
 *
 * Permet le fonctionnement du nyan-cat
 *
 */
( function() {

	var slider = document.querySelector('#NCslider');
	var trigger1 = document.querySelector('#NC_Trig1');
	var trigger2 = document.querySelector('#NC_Trig2');
	var trigger3 = document.querySelector('#NC_Trig3');

	trigger1.addEventListener('click', click1 );
	trigger2.addEventListener('click', click2 );
	trigger3.addEventListener('click', click3 );

	console.log(trigger1);
	console.log(trigger2);
	console.log(trigger3);

	if( slider )
	{
		//slider.style.transform = "translateX(-33.333%)";
		//document.querySelector('#NCslider').classList.add("ncTranslate-1");
	}

	function click1()
	{
		console.log("click1");
		slider.className = 'ncTranslate-0 NParentGrid';
	}
	function click2()
	{
		console.log("click2");
		slider.className = 'ncTranslate-1 NParentGrid';
	}
	function click3()
	{
		console.log("click3");
		slider.className = 'ncTranslate-2 NParentGrid';
	}

}() );
