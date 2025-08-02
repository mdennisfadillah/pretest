<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['comment'];

    createComment($comment);
}

$comments = getComments();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretest</title>
</head>
<body>
    <h1>Comments</h1>
    <form method="POST" action="">
        <textarea name="comment" required></textarea>
        <button type="submit">Submit</button>
    </form>

    <h2>All Comments:</h2>
    <ul>
        <?php while ($row = mysqli_fetch_assoc($comments)): ?>
            <li>user "<?php echo htmlspecialchars($row['uid']); ?>": <?php echo htmlspecialchars($row['comment']); ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>