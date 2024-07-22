<?php

require_once('connection.php');

// Fetch users with role 2
$query = "SELECT full_name, date, street_name, phone, email FROM user WHERE role = 2";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Start the table and header
    echo '
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Street Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>' .  $row['full_name'] . '</td>
            <td>' . htmlspecialchars($row['date']) . '</td>
            <td>' . htmlspecialchars($row['street_name']) . '</td>
            <td>' . htmlspecialchars($row['phone']) . '</td>
            <td>' . htmlspecialchars($row['email']) . '</td>
            <td><a href="#" class="btn">Edit</a> <a href="#" class="btn bg-danger btn-danger">Delete</a></td>
        </tr>';
    }

    // End the table
    echo '
        </tbody>
    </table>';
} else {
    echo "No users found.";
}

$conn->close();

