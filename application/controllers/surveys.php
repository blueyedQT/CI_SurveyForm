<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index() {
		$this->load->view('surveys');
	}

  public function process_form() {
    if($this->session->userdata('count') == null) {
      $this->session->set_userdata('count',1);
      $result = $this->session->userdata('count');
      $post['count'] = $result;
    
    } else { 
      $temp = $this->session->userdata('count');
      $temp += 1;
      $this->session->set_userdata('count', $temp);
      $result = $this->session->userdata('count');
      $post['count'] = $result;
    }

    $post['name'] = $this->input->post('name');
    $post['location'] = $this->input->post("location");
    $post['language'] = $this->input->post("language");
    $post['comment'] = $this->input->post("comment");

    $this->load->view('result.php', $post);
  }
}
?>