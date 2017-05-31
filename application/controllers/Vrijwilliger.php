<?php defined('BASEPATH') or exit('No direct script access allowed'); 

class Vrijwilliger extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    
        $this->load->library(['session', 'blade', 'form_validation']);
        $this->load->helper(['url']);  
    }

    public function store() 
    {
        $this->form_validation->set_rules('name', 'Naam', 'trim|required');
        $this->form_validation->set_rules('email', 'E-mail adres', 'trim|required|is_unique[vrijwilligers.email]'); 

        if ($this->form_validation->run() === false) { // Form validation fails
            $this->session->set_flashdata('strong_msg', 'Foutje!');
            $this->session->set_flashdata('message',    'Wij konden je aanvraag niet verwerken. Ga terug naar het formulier indien nodig.');
            $this->session->set_flashdata('class',      'alert-danger');
            $this->session->set_flashdata('icon',       'now-ui-icons objects_support-17');

            return $this->blade->render('index');
        }

        //> No validation errors move on with our logic. 
        $input['name']              = $this->input->post('name', true);
        $input['email']             = $this->input->post('email', true); 
        $input['city_id']           = 2585; // Hard coded in the database. 
        $input['extra_information'] = $this->input->post('information', true);


        if (Volunteers::create($input)) {
            $this->session->set_flashdata('strong_msg', 'Bedankt!');
            $this->session->set_flashdata('message',    'Voor je intresse, we nemen spoedig contact met je op!'); 
            $this->session->set_flashdata('class',      'alert-success'); 
            $this->session->set_flashdata('icon',       'now-ui-icons ui-2_like');
        } 

        return redirect(site_url()); 
    }
}