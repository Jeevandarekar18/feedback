<?php
include "db.php";

$result = $conn->query("SELECT * FROM feedback");

echo "<h2>Submitted Feedback</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['message']."</td>
          </tr>";
}

echo "</table>";
?>
