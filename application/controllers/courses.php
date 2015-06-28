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
        // Load the URL helper
        $this->load->helper('url');

        // Load the form helper
        $this->load->helper('form');
        // Load the form_validation library
        $this->load->library('form_validation');

        // Build the form in this controller

        // Add opening form tag
        $course_form['form']['attributes'] = array('id' => 'add-course');

        // Add name input
        $course_form['form']['name']['label'] = array('text' => 'Name:', 'for' => 'name');

        // Add description textarea
        $course_form['form']['description']['label'] = array('text' => 'Description:', 'for' => 'description');

        $this->load->view('courses_form/form.php', $course_form);
    }

    public function add()
    {









    }

}
?>