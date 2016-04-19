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
