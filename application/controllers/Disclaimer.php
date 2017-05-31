<?php defined('BASEPATH') or show_error(404);

class Disclaimer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade', 'session']);
        $this->load->helper(['url']);
    }

    public function index()
    {
        return $this->blade->render('disclaimer');
    }
}
