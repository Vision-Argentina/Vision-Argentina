<?php
include 'db.php';
$result = $conn->query('SELECT * FROM news ORDER BY created_at DESC');
while ($row = $result->fetch_assoc()) {
    echo '<article>';
    echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
    echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
    echo '<time>' . htmlspecialchars($row['created_at']) . '</time>';
    echo '</article>';
}
?>

