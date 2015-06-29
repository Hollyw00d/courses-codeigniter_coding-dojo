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
        $query = "INSERT INTO courses (name, description, created_at, updated_at) VALUES (?,?,?,?)";
        $values = array($course['name'], $course['description'], NOW(), NOW());
        return $this->db->query($query, $values);
    }



}
?>