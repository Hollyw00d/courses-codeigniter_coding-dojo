<?php
class Course extends CI_Model
{
    // Display all courses from the database
    public function get_all_courses()
    {
        return $this->db->query("SELECT * FROM course")->result_array();
    }

    // Add a single course to the database
    public function add_course($course)
    {
        return $this->db->query("INSERT INTO course (name, description, created_at, updated_at) VALUES (?,?,NOW(),NOW())", array($course['name'], $course['description']));

    }

    // Show a single course to delete from the database
    public function delete_course($course_id_num)
    {
        return $this->db->query("SELECT * FROM course WHERE id = {$course_id_num}")->row_array();

    }

    /*
    No "return" statement needed in function below as it ISN'T DISPLAYING DATA on a web page
    AND is only deleting a single database row
    */
    public function execute_delete_course($course_id_num)
    {
        $this->db->query("DELETE FROM course WHERE id = {$course_id_num}");
    }
}
?>