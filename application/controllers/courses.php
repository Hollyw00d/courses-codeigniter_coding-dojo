<?php
class Courses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('Course');

        // Call the get_all_course model method
        $this->courses = $this->Course->get_all_courses();
    }

    public function index()
    {
        $this->load->view('courses_form/form.php', array('courses' => $this->courses));
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
            $this->load->view('courses_form/form.php', array('courses' => $this->courses));
        }
        else
        {
            // Run the model method below to insert course
            $this->Course->add_course($this->input->post());

            // Success message
            $message = '<p><strong>You have successfully added a class and description to the database!</strong></p>';
            $this->session->set_userdata('success_message', $message);

            redirect(base_url());
        }

    }

    public function destroy($course_id)
    {
        $delete_course = $this->Course->delete_course($course_id);


        $delete_course_array = array(
            'delete_course' => $delete_course
        );

        $this->load->view('courses_form/deleteconfirm', $delete_course_array);
    }

    public function deleterecord($course_id)
    {
        $this->Course->execute_delete_course($course_id);
        redirect(base_url());
    }
}
?>