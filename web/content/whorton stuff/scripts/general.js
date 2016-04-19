/*General Scripts for inclusion in rainman sites
 *
 *
 */

	//-------  Find the current page and apply a class
	var sPath = window.location.pathname;
	//var sPage = sPath.substring(sPath.lastIndexOf('\\') + 1);
	var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
	
	function currentPage (){
		$('ul.pageBasedNav').find('a[href*="' + sPage + '"]').parent().addClass('current');
	}	
	
	function clearText(field){
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	
	}

	$("document").ready( function () {
		$('.mainContentContainer').attr("style", "padding-top:5px;")
		$('.price').prepend('<strong>Price: </strong> $');
		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});

    });	
