<?php
namespace App\Views;

class CustomerView {
    public function render($data) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Created</th></tr>";
        while ($row = $data->fetch(\PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['created']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
 