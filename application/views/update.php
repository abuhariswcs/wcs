<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

</head>
<body>
<?php foreach($post as $row): ?>
<?php echo $row->title ?>
<?php endforeach; ?>

<?php echo form_open('Welcome/update', 'class="form-horizontal"'); ?>
<div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Title</label>
    <div class="col-lg-8">
        <?php echo form_input(['name'=>'title','placeholder'=>'title','class'=>'form-control']); ?>
    </div>
</div>
<div class="form-group">
    <label for="textArea" class="col-lg-2 control-label">Description</label>
    <div class="col-lg-8">
        <?php echo form_textarea(['name'=>'description','placeholder'=>'description','value'=>'$post->description','class'=>'form-control overflow','id'=>'summernote']); ?>
    </div>
    <script>$(document).ready(function() {
            $('#summernote').summernote();
        });</script>
</div>

<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <?php echo anchor('Welcome', 'Back', ['class'=>'btn btn-default']); ?>
        <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    </div>
</div>
<?php echo form_close(); ?>
</body>
</html>