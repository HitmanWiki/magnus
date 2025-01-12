<?php
class fetch_data extends CI_Model {

    public function __construct() {
        $this->load->database();
		
    }

public function get_aboutus() {
	
		$this->db->select('*');
		$this->db->from('tbl_aboutus');
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $fetch; 
	
}

public function get_service() {
		$this->db->select('*');
		$this->db->from('tb_services');
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $result->result_array(); 
}


public function get_service_data($serviceSlug) {
		$this->db->select('*');
		$this->db->from('tb_services');
		$this->db->where('serviceSlug',$serviceSlug);
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $fetch; 
}

public function get_countries()
{
		$this->db->from('tbl_country');
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $result->result_array(); 
}


public function get_country_data($countrySlug) {
		$this->db->select('tb_immigration_data.*,tbl_country.*');
		$this->db->from('tb_immigration_data');
		$this->db->join('tbl_country','tb_immigration_data.countryID=tbl_country.countryID','left');
		$this->db->where('tbl_country.web_cslug',$countrySlug);
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $fetch; 
}

public function get_testimonial()
{
		$this->db->from('tb_testimonial');
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $result->result_array(); 
}

public function get_slider()
{
		$this->db->from('tbl_slider');
		$result = $this->db->get();
		$fetch= $result->row_array();
		return $result->result_array(); 
}
public function get_blog()
{
	$this->db->from('tbl_blog_category');
	$result = $this->db->get();
	$fetch= $result->row_array();
	return $result->result_array(); 
}

public function get_stories()
{
    $this->db->from('tbl_stories');
	$result = $this->db->get();
	$fetch= $result->row_array();
	return $result->result_array();     
}

}
