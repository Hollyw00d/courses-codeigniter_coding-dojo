<?php $this->load->view('courses_form/includes/header.php'); ?>

    <h1>Courses - Coding Dojo CodeIgniter Assignment</h1>

    <h2>Are you sure you want to delete the following course?</h2>

    <table id="courses" class="delete-table">
        <thead>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Description</th>
            <th>Date Added</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach($this->delete_course as $row)
            {
                echo '<tr>';
                    echo '<td>' . $row->id . '</td>';
                    echo '<td>' . $row->name . '</td>';
                    echo '<td>' . $row->description . '</td>';
                    echo '<td>' . $row->created_at . '</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td colspan="2" class="no-border">'
                            . '<form action="'. base_url() . 'reset" method="post">
                                <input type="hidden" name="reset" />
                                <input type="submit" value="No" />
                            </form>'
                    . '</td>';
                echo '<td colspan="2" class="no-border">'
                    . '<form action="'. base_url() . 'destroy/' . $row->id . '" method="post">
                                <input type="hidden" name="delete" value="delete" />
                                <input type="submit" value="Yes, I want to delete this course!" />
                            </form>'
                    . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

<?php $this->load->view('courses_form/includes/footer.php'); ?>