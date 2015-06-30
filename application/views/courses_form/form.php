<?php $this->load->view('courses_form/includes/header.php'); ?>

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
    ?>

    <form action="<?php echo base_url() . 'courses/add'; ?>" id="add-course" method="post">
        <p><label for="name"><span>Name: </span></label><input type="text" name="name" value="<?php echo set_value('name') ?>"/></p>

        <p><label for="description"><span>Description: </span></label><textarea name="description"><?php echo set_value('description'); ?></textarea></p>

        <p><input type="submit" name="add_class" value="Add Class"></p>
    </form>

    <h2>Courses</h2>

    <table id="courses">
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach(array_reverse($courses) as $row)
                {
                    echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['description'] . '</td>';
                        echo '<td>' . $row['created_at'] . '</td>';
                        echo '<td>
                                <form action="' . base_url() . 'courses/destroy/' . $row['id'] .  '" method="post">
                                    <input type="hidden" name="delete" value="' . $row['id'] . '" />
                                    <input type="submit" value="Delete Record" />
                                </form>
                        </td>';
                    echo '</tr>';
                }
                ?>
        </tbody>
    </table>

    <p>&nbsp;</p>
    <p><strong><a href="<?php echo base_url(); ?>reset">Destroy Session</a></strong></p>

<?php $this->load->view('courses_form/includes/footer.php'); ?>