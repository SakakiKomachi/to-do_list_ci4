<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>

    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?= $todo['task']; ?>
                <a href="<?= site_url('todo/complete/'.$todo['id']); ?>">Complete</a>
                <a href="<?= site_url('todo/delete/'.$todo['id']); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="<?= site_url('create'); ?>">Add Todo</a>
</body>
</html>
