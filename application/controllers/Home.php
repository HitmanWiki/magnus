<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('fetch_data');
    }


public function index()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_testimonial']=$this->fetch_data->get_testimonial();
	$data['get_slider']=$this->fetch_data->get_slider();
	$data['get_detail']=$this->fetch_data->get_blog();
	$data['get_stories']=$this->fetch_data->get_stories();
	$this->load->view('home',$data);
}
	

public function contact_us()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('contact',$data);
}


public function about_us()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('about',$data);
}	
public function countries($countrySlug)
{
	//echo $serviceSlug;
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_country_data']=$this->fetch_data->get_country_data($countrySlug);
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('country',$data);
}
	
	
public function canada_details()
{
	$this->load->view('canada-details.php');
}
	
public function australia_details()
{
	$this->load->view('australia-details.php');
}



public function become_agent()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('become_agent',$data);
}


public function counseling()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('counseling.php',$data);
}

public function student_assistance()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('student-assistance.php',$data);
}

public function visa_guidance()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('visa-guidance.php',$data);
	
}
public function express_entry()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('express-entry.php',$data);
}
public function federal_skilled_workers_program()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('federal-skilled-workers-program.php',$data);
}
public function federal_skilled_trade_class()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('federal-skilled-trade-class.php',$data);
}
public function provincial_nominee_program()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('provincial-nominee-program.php',$data);
}
public function canadian_experience_class()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('canadian-experience-class.php',$data);
}
public function atlantic_pilot_immigration_program()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('atlantic-pilot-immigration-program.php',$data);
}
public function family_sponsorship()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('family-sponsorship.php',$data);
}
public function care_giver_permanent_residence()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('care-giver-permanent-residence.php',$data);
}
public function rural_and_northern_immigration_pilot()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('rural-and-northern-immigration-pilot.php',$data);
}
public function agricultural_food_immigration_pilot()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('agricultural-food-immigration-pilot.php',$data);
}

public function work_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('work-visa.php',$data);
}
public function study_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('study-visa.php',$data);
}
public function super_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('super-visa.php',$data);
}
public function visit_tourist_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('visit-tourist-visa.php',$data);
}
public function citizenship()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('citizenship.php',$data);	
}
public function business()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('business.php',$data);	
}

public function working_holiday_visa_subclass_417()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('working-holiday-visa-subclass-417.php',$data);	
}
public function visitor_visa_subclass_600()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('visitor-visa-subclass-600.php',$data);	
}
public function temporary_work_visa_subclass_457()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('temporary-work-visa-subclass-457.php',$data);	
}
public function skilled_regional_visa_subclass_887()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('skilled-regional-visa-subclass-887.php',$data);	
}
public function regional_sponsored_migration_scheme_rsms_visa_subclass_187()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('regional-sponsored-migration-scheme-rsms-visa-subclass-187.php',$data);	
}

public function business_owner_visa_subclass_890()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('business-owner-visa-subclass-890.php',$data);	
}
public function investor_retirement_visa_subclass_405()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('investor-retirement-visa-subclass-405.php',$data);	
}
public function australia_business_talent_subclass_132_visa()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('australia-business-talent-subclass-132-visa.php',$data);	
}
public function contact_form()
{
	
	$user_name = trim($this->input->post('name'));
	$user_email = trim($this->input->post('email'));
	$user_mobile = trim($this->input->post('phone'));
	$user_subject = trim($this->input->post('subject'));
	$country = trim($this->input->post('country'));
	$visa= trim($this->input->post('visa'));
	$user_message = trim($this->input->post('msg'));
	
	$from_email = $user_email; 
	$to_email = 'immigrationmagnus@gmail.com'; 
	
	//Load email library 
	$this->load->library('email'); 
	$this->email->set_mailtype("html");
	$this->email->from($from_email, $user_name); 
	$this->email->to($to_email);
	$this->email->subject('Contact Queries Magnus Immigration'); 
	$email_body ="<table border='0' cellpadding='10'>
	<tr><td><b>Name</b></td><td>".$user_name."</td></tr>
	<tr><td><b>Email</b></td><td>".$user_email."</td></tr>
	<tr><td><b>Contact</b></td><td>".$user_mobile."</td></tr>
	<tr><td><b>Query About </b></td><td>".$user_subject."</td></tr>
	<tr><td><b>Country Query </b></td><td>".$country."</td></tr>
	<tr><td><b>Visa For </b></td><td>".$visa."</td></tr>
	<tr><td><b>Message</b></td><td>".$user_message."</td></tr>
	<tr><td><b>Date</b></td><td>".Date('d-m-Y')."</td></tr>
	</table>";
	$this->email->message($email_body);
	if($this->email->send())
	{
		echo "success";
	}
	else
	{
	}	
}
public function agent_form()
{	
	$first_name = trim($this->input->post('name'));
	$last_name = trim($this->input->post('last_name'));
	$email = trim($this->input->post('email'));
	$email1 = trim($this->input->post('email1'));
	$mobile = trim($this->input->post('phone'));
	$mobile1 = trim($this->input->post('phone1'));
	$companyname = trim($this->input->post('companyname'));
	$skypeid = trim($this->input->post('skypeid'));
	$address = trim($this->input->post('address'));
	$country = trim($this->input->post('country'));
	$province = trim($this->input->post('province'));
	$postalcode = trim($this->input->post('postalcode'));
	$message = trim($this->input->post('msg'));
	
	$from_email = $email; 
	$to_email = 'immigrationmagnus@gmail.com'; 
	
	//Load email library 
	$this->load->library('email'); 
	$this->email->set_mailtype("html");
	
	$this->email->from($from_email, $first_name); 
	$this->email->to($to_email);
	
	$this->email->subject('Become An Agent Queries  Magnus Immigration'); 
	
	$email_body ="<table border='0' cellpadding='10'>
	<tr><td><b>First Name</b></td><td>".$first_name."</td></tr>
	<tr><td><b>Last Name</b></td><td>".$last_name."</td></tr>
	<tr><td><b>Contact</b></td><td>".$email."</td></tr>
	<tr><td><b>Contact </b></td><td>".$email1."</td></tr>
	<tr><td><b>Phone </b></td><td>".$mobile."</td></tr>
	<tr><td><b>Phone </b></td><td>".$mobile1."</td></tr>
	<tr><td><b>Company Name </b></td><td>".$companyname."</td></tr>
	<tr><td><b>Skypeid </b></td><td>".$skypeid."</td></tr>
	<tr><td><b>Address </b></td><td>".$address."</td></tr>
	<tr><td><b>Country </b></td><td>".$country."</td></tr>
	<tr><td><b>State </b></td><td>".$province."</td></tr>
	<tr><td><b>Postal Code </b></td><td>".$postalcode."</td></tr>
	<tr><td><b>Message</b></td><td>".$message."</td></tr>
	<tr><td><b>Date</b></td><td>".Date('d-m-Y')."</td></tr>
	</table>";
	$this->email->message($email_body);

	if($this->email->send())
	{
		echo "success";
	}
	else
	{
	}
		
	}

public function employer_nomination()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('employer_nomination.php',$data);
}
public function skilled_independent()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('skilled_independent.php',$data);
}
public function state_sponsored()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('state_sponsored.php',$data);
}
public function skilled_regional()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('skilled_regional.php',$data);
}
public function occupation_list()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('occupation_list.php',$data);
}

public function parent_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('parent_visa.php',$data);
}
public function prospective_marriage()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('prospective_marriage.php',$data);
}
public function contributory_parent_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('contributory_parent_visa.php',$data);
}
public function aged_parent_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('aged_parent_visa.php',$data);
}

public function student_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('student_visa.php',$data);
}
public function student_guardian_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('student-guardian-visa-subclass-590.php',$data);
}

public function regional_visa()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('regional_visa.php',$data);
}

public function assessment_form()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('contact.php',$data);
}

public function consultation()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('consultation.php',$data);	
}
public function pre_assessment_assistance()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('pre_assessment_assistance.php',$data);	
}
public function documentation_assistance()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('documentation_assistance.php',$data);	
}
public function pre_landing_and_post_landing_services()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('pre_landing_and_post_landing_services.php',$data);	
}
public function language_coaching()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('language_coaching.php',$data);	
}
public function blog_data()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	//$this->fetch_data->get_blog_data();
	$this->load->view('blog_data.php',$data);	
}

public function blog()
{
	$data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	$this->load->view('blog.php',$data);	
}	
public function blog_detail()
{
    $data['get_countries']=$this->fetch_data->get_countries();
	$data['get_aboutdata']=$this->fetch_data->get_aboutus();
	$data['get_detail']=$this->fetch_data->get_blog();
	//$this->fetch_data->get_blog_data();
	$this->load->view('blog_detail.php',$data);	
}
}