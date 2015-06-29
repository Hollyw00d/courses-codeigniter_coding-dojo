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

        // Set form validation rules
        $this->form_validation->set_rules('name', '<strong><em>name</em></strong>', 'required|xss_clean|trim|min_length[15]|max_length[100]');
        $this->form_validation->set_rules('description', '<strong><em>description</em></strong>', 'required|xss_clean|trim|min_length[15]|max_length[160]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('courses_form/form.php');
        }
        else
        {
            // Success message
            $message = '<p><strong>You have successfully added a class and description to the database!</strong></p>';
            $this->session->set_userdata('success_message', $message);

            // Pass success message array to view
            $this->load->view('courses_form/form.php');
        }

    }

}
?>