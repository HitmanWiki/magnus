<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact-us']='Home/contact_us';
$route['about-us']='Home/about_us';
$route['become-an-agent']='Home/become_agent';

$route['country/(:any)']='Home/countries/$1';

$route['canada-details']='Home/canada_details';
$route['australia-details']='Home/australia_details';
$route['counseling']='Home/counseling';
$route['student-assistance']='Home/student_assistance';
$route['visa-guidance']='Home/visa_guidance';
$route['express-entry']='Home/express_entry';
$route['federal-skilled-workers-program']='Home/federal_skilled_workers_program';
$route['federal-skilled-trade-class']='Home/federal_skilled_trade_class';
$route['provincial-nominee-program']='Home/provincial_nominee_program';
$route['canadian-experience-class']='Home/canadian_experience_class';
$route['atlantic-pilot-immigration-program']='Home/atlantic_pilot_immigration_program';
$route['family-sponsorship']='Home/family_sponsorship';
$route['care-giver-permanent-residence']='Home/care_giver_permanent_residence';
$route['rural-and-northern-immigration-pilot']='Home/rural_and_northern_immigration_pilot';
$route['agricultural-food-immigration-pilot']='Home/agricultural_food_immigration_pilot';
$route['work-visa']='Home/work_visa';
$route['study-visa']='Home/study_visa';
$route['super-visa']='Home/super_visa';
$route['visit-tourist-visa']='Home/visit_tourist_visa';
$route['business']='Home/business';
$route['citizenship']='Home/citizenship';

$route['employer-nomination-scheme-subclass-186']='Home/employer_nomination';
$route['skilled-independent-subclass-189-visa']='Home/skilled_independent';
$route['skilled-nominated-visa-subclass-190']='Home/state_sponsored';
$route['skilled-regional-provisional-subclass-489-visa']='Home/skilled_regional';
$route['nsw-new-south-wales-subclass-190-occupation-list-2019']='Home/occupation_list';

$route['parent-visa-subclass-103']='Home/parent_visa';
$route['prospective-marriage-visa-subclass-300']='Home/prospective_marriage';
$route['contributory-parent-visa-subclass-143-and-173']='Home/contributory_parent_visa';
$route['contributory-aged-parent-visa-subclass-884-864']='Home/aged_parent_visa';
$route['student-visa-subclass-500']='Home/student_visa';
$route['student-guardian-visa-subclass-590']='Home/student_guardian_visa';

$route['working-holiday-visa-subclass-417']='Home/working_holiday_visa_subclass_417';
$route['visitor-visa-subclass-600']='Home/visitor_visa_subclass_600';

$route['temporary-work-visa-subclass-457']='Home/temporary_work_visa_subclass_457';
$route['skilled-regional-visa-subclass-887']='Home/skilled_regional_visa_subclass_887';
$route['regional-sponsored-migration-scheme-rsms-visa-subclass-187']='Home/regional_sponsored_migration_scheme_rsms_visa_subclass_187';
$route['business-owner-visa-subclass-890']='Home/business_owner_visa_subclass_890';
$route['investor-retirement-visa-subclass-405']='Home/investor_retirement_visa_subclass_405';
$route['australia-business-talent-subclass-132-visa']='Home/australia_business_talent_subclass_132_visa';
$route['regional-visa']='Home/regional_visa';
$route['assessment-form']='Home/assessment_form';
$route['consultation']='Home/consultation';
$route['pre-assessment-assistance']='Home/pre_assessment_assistance';
$route['documentation-assistance']='Home/documentation_assistance';
$route['pre-landing-and-post-landing-services']='Home/pre_landing_and_post_landing_services';
$route['language-coaching']='Home/language_coaching';
$route['free-visa-assessment']='Home/free_visa_assessment';
$route['blog']='Home/blog';
$route['blog/(:any)']='Home/blog_data/$1';
$route['blog-detail/(:any)']='Home/blog_detail/$1';