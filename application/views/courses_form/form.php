<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses - Coding Dojo CodeIgniter Assignment</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Courses - Coding Dojo CodeIgniter Assignment</h1>

    <h2>Add a New Course</h2>

    <?php
    // Load the form helper
    $this->load->helper('form');
    // Load the form_validation library
    $this->load->library('form_validation');

    // Start CodeIgniter Form
    echo form_open(base_url() . 'courses/add', 'id="add-course"');

        // Array to pass into form_input() below
        $name = array(
            'name' => 'name'
        );
        echo '<p>' . form_label('<span>Name: </span>', 'name') . form_input($name) . '</p>';

        // Array to pass into form_textarea() below
        $description = array(
            'name' => 'description'
        );
        echo '<p>' . form_label('<span>Description: </span>', 'description') . form_textarea($description) . '</p>';

        // Array to pass into form_submit() below
        $add_class = array(
            'name' => 'add_class',
            'value' => 'Add Class'
        );
        echo '<p>' . form_submit($add_class) . '</p>';

    echo form_close() ;
    // End CodeIgniter Form
    ?>

    <h2>Courses</h2>


</div>



</body>
</html>