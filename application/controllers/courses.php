<?php
class Courses extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler();
    }

    public function index()
    {

        $this->load->view('courses_form/form.php');

    }

    public function add()
    {

        // Load the form_validation library
        $this->load->library('form_validation');










    }

}
?>