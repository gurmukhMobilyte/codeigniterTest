<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if( $this->input->post() )
		{
			$this->load->helper('security');

			$this->form_validation->set_rules('name', 'Name', 'xss_clean|required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'xss_clean|required');
			$this->form_validation->set_rules('email', 'Email', 'xss_clean|required|valid_email');
			$this->form_validation->set_rules('favorite_color', 'Favorite Color', 'xss_clean|required');
			


			if( $this->form_validation->run() == TRUE )
			{

				if( $this->db->insert( 'form_data', $this->input->post() ) )
				{
					$response['success'] = "Data added successfully.";
				}
				else
				{
					$response['unknown'] = "Unknown Error: Unable to add.";
				}

			}			
			else
			{
				
				if ( strlen( validation_errors() ) > 0 )
				{
					$response['errors'] = validation_errors('<li>','</li>');
							
				}	
				
				
			}
			echo json_encode($response);
			die();
		}
		$this->load->view('form');
	}
}
