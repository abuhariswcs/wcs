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
    <style>
        table {
            table-layout: fixed;
        }

        .overflow{
            height:20px;
            width: 200px;
            overflow: hidden;
        }
    </style>
</head>
<?php echo anchor('Welcome/create', 'Add Post', ['class'=>'btn btn-primary']); ?>

<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Date Posted</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($post as $row): ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->title; ?></td>
            <td><div class="overflow"><?php echo $row->description; ?></div></td>
            <td><?php echo $row->date; ?></td>
            <td>
                <?php echo anchor('Welcome/view', 'view', array('class' => 'label label-primary'));?>
                <a href="<?php echo site_url('Welcome/update/'.$row->id);?>">update</a>
                <a href="<?php echo site_url('Welcome/delete_row/'.$row->id);?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>