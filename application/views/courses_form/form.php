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

    // Show form validation errors if they exist
    echo '<div class="error">' . validation_errors() . '</div>';

    // Show the success message if it exists
    echo '<div class="success">' . $this->session->userdata('success_message') . '</div>';
    // Unset success message session if needed
    $this->session->unset_userdata('success_message');

    // Start CodeIgniter Form
    echo form_open(base_url() . 'courses/add', 'id="add-course"');

        // Array to pass into form_input() below
        $name = array(
            'name' => 'name',
            'value' => set_value('name')
        );
        echo '<p>' . form_label('<span>Name: </span>', 'name') . form_input($name) . '</p>';

        // Array to pass into form_textarea() below
        $description = array(
            'name' => 'description',
            'value' => set_value('description')
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

    <table>
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
                foreach($this->courses as $row)
                {
                    echo '<td>' . $row->name . '</td>';
                    echo '<td>' . $row->description . '</td>';
                    echo '<td>' . $row->created_at . '</td>';
                    echo '<td>
                            <form>
                                <input type="hidden" name="delete" value="' . $row->id . '" />
                                <input type="submit" value="Delete Record" />
                            </form>
                    </td>';
                }
                ?>
            </tr>
        </tbody>
    </table>

    <p>&nbsp;</p>
    <p><strong><a href="<?php echo base_url(); ?>reset">Destroy Session</a></strong></p>


</div>



</body>
</html>