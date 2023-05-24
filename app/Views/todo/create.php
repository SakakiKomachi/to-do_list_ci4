<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Todo</title>
</head>
<body>
    <h1>Create Todo</h1>

    <form action="<?= site_url('todo/store'); ?>" method="post">
        <input type="text" name="task" placeholder="Enter task">
        <button type="submit">Add</button>
    </form>
</body>
</html>
