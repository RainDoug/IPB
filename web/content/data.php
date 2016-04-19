<?PHP  include_once('scripts/functions.php');?>

<?PHP

/*	DATA FILE
	Client:Insurance Professionals of Brevard, LLC 
	Template: GNwhy
*/

$businessName="Insurance Professionals of Brevard, LLC";

//;iwloc=near&addr&amp
//new location 1
$location=array();
$location[0]=array(
	'address'=>'2800 Aurora Road, Suite F',
	"city"=>"Melbourne",
	"state"=>"Florida ",
	"zip"=>"32935",
	"directions"=>"500 Feet East of Wickham Road",
	"mailAddr"=>"2800 Aurora Road, Suite F",
	"mailCity"=>"Melbourne",
	"mailState"=>"Florida ",
	"mailZip"=>"32935",
	"phone"=>"(321) 752-5266",
	//"phone2"=>"321-684-8325",
	"fax"=>"321-752-5233",
	"contact"=>"Tiffany Jackson",
	"email"=>array("Tiffany Jackson"=>"tjackson@ipbrevard.com",),
	"googlePlace"=>'<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=(321)+752-5266&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=34.861942,84.990234&amp;vpsrc=6&amp;ie=UTF8&amp;hq=(321)+752-5266&amp;hnear=&amp;t=m&amp;cid=5384501600090386012&amp;ll=28.161762,-80.666599&amp;spn=0.052969,0.072956&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=(321)+752-5266&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=34.861942,84.990234&amp;vpsrc=6&amp;ie=UTF8&amp;hq=(321)+752-5266&amp;hnear=&amp;t=m&amp;cid=5384501600090386012&amp;ll=28.161762,-80.666599&amp;spn=0.052969,0.072956&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>',
	"photos"=>array("name"=>"pic.jpg",	),
);



//Vars for template
$mainPhone=$location[0]['phone'];
$mainFax=$location[0]['fax'];
$tollFree="";
$mainEmail=$location[0]['email'];   //gets the first email out of the contact
$mainEmail=reset($mainEmail);
$formEmail="tjackson@ipbrevard.com";			//you could set the form email here
$servicesEmail= &$formEmail;  		//--these can now be used interchangably
$mainAddr=$location[0]['address'];
$city=$location[0]['city'];
$state=$location[0]['state'];
$zip=$location[0]['zip'];

$fbAddress="https://www.facebook.com/pages/Hennessey-Insurance-Services-LLC/276666828396";
$liAddress="";
$blAddress="";
/*$twAddress="http://www.linkedin.com/pub/kent-shepard/1a/295/173";*/
$gpAddress="http://maps.google.com/maps/place?hl=en&georestrict=input_srcid:fb1a794103984eae";

$area="East Florida";
$stateName="Florida";



$counties=make_alpha("Brevard, Indian River, Volusia");
$cities=make_alpha("Melbourne, Palm Bay, Melbourne Beach, Satellite Beach, West Melbourne, Indialantic, Indian Harbour Beach, Titusville, Cocoa Beach");

$foundedYear="2005";
$copyYear=copyRighted("2010");

//companies
//Chartis, Allstate, SAFECO, America First, Republic Insurance Group, Columbia Insurance Group, Travelers, The Hartford, Amtrust, Progressive, Texas Mutual, Service Lloyds, Allied Property & Casualty, The Zenith, Unitrin/Kemper, Blue Cross Blue Shield, Aetna, Chubb, Zurich, Fireman's Fund, United Healthcare, Humana, Prudential 
//Memberships
//
//Community Involvement
// o	American Heart Association
// o	Member of Chamber of Commerce
// o	Payne University (Carter crossed out Board of Trustees. Was there a different title you wanted there?)
// o	Boys and Girls Club
// o	St. Judes
// o	Boy Scouts of America



/*$slogan="Your crop insurance specialists for over 65 years.";*/
$siteDescription="Business and Personal Insurance, Financial Products, and Highly Trained Agents";

$footerDescription= $businessName . " : " . $siteDescription . "<br/>" . $slogan;
$titleTag=$siteDescription;
$generalTitle= $businessName . " | " . $titleTag;

$keywords= "Insurance Products, Employee Benefits";
$headerAlt= $footerDescription;
$altTag1= "Employee Benefits";
$altTag2= "Insurance Products";
$altTag3= "";
$altTag4= "Securities";
$altTag5="Business Insurance";
$altTag6="Estate Planning";
$altTagAuto="Best Car Insurance";
$altTagLife= "Life Insurance";
$altTagBusiness="Best Business Insurance";
$altTagProperty="Employee Benefits";

?>	