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

    <?php // Start CodeIgniter Form ?>
    <?php echo form_open(base_url() . 'courses/add', $form['attributes']) ; ?>

        <p><span><?php echo form_label($form['name']['label']['text'], $form['name']['label']['for']);?></span><?php echo form_input('name');?></p>

        <p><span><?php echo form_label($form['description']['label']['text'], $form['description']['label']['for']);?></span><?php echo form_textarea('description'); ?></p>

    <p><?php echo form_submit('submit', 'Add Course') ?></p>


    <?php echo form_close() ; ?>
    <?php // End CodeIgniter Form ?>

    <h2>Courses</h2>


</div>



</body>
</html>