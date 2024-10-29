<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Data Items</h1>
    <?php foreach ($data['items'] as $item): ?>
        <p><?php echo $item['name']; ?> <a href="/home/edit/<?php echo $item['id']; ?>">Edit</a> | <a href="/home/delete/<?php echo $item['id']; ?>">Delete</a></p>
    <?php endforeach; ?>
</body>
</html>
