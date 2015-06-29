<?php
class Course extends CI_Model
{
    // Display all courses
    public function get_all_courses()
    {
        $query_all = $this->db->query("SELECT * FROM course");
        return $query_all->result();
    }

    function add_course($course)
    {

        $insert_query = "INSERT INTO course (name, description, created_at, updated_at) VALUES (?,?,NOW(),NOW())";

        $insert_values = array($course['name'], $course['description']);

        return $this->db->query($insert_query, $insert_values);
    }

    



}
?>