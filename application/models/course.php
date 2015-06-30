<?php
class Course extends CI_Model
{
    // Display all courses
    public function get_all_courses()
    {
        return $this->db->query("SELECT * FROM course")->result_array();
    }

    public function add_course($course)
    {

        $insert_query = "INSERT INTO course (name, description, created_at, updated_at) VALUES (?,?,NOW(),NOW())";

        $insert_values = array($course['name'], $course['description']);

        return $this->db->query($insert_query, $insert_values);
    }

    public function delete_course($course_id_num)
    {
        return $this->db->query("SELECT * FROM course WHERE id = {$course_id_num}")->row_array();

    }

    public function execute_delete_course($course_id_num)
    {
        $this->db->query("DELETE FROM course WHERE id = {$course_id_num}");
    }
}
?>