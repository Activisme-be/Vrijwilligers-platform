<?php defined('BASEPATH') or show_error(404);

/**ssss
 * Class Disclaimer
 */
class Disclaimer extends CI_Controller
{
	/**
	 * Disclaimer constructor.
	 *
	 * @return void.
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade', 'session']);
        $this->load->helper(['url']);
    }

	/**
	 * Return the disclaimer page.
	 *
	 * @return mixed
	 */
    public function index()
    {
        return $this->blade->render('disclaimer');
    }
}
