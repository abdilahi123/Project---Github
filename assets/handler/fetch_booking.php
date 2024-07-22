<?php

require_once('connection.php');

// Fetch users with role 2
$query = "SELECT name, booking_id, nursery_id, date, status,phone, payment_status FROM user WHERE role = 2";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Start the table and header
    echo '
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Booking ID</th>
                <th>Nursery ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>' . htmlspecialchars($row['name']) . '</td>
            <td>' . htmlspecialchars($row['booking_id']) . '</td>
            <td>' . htmlspecialchars($row['nursery_id']) . '</td>
            <td>' . htmlspecialchars($row['date']) . '</td>
            <td>' . htmlspecialchars($row['status']) . '</td>
            <td>' . htmlspecialchars($row['payment_status']) . '</td>
            <td><a href="#" class="btn">Edit</a> <a href="#" class="btn bg-danger btn-danger">Delete</a></td>
        </tr>';
    }

    // End the table
    echo '
        </tbody>
    </table>';
} else {
    echo "No booking found.";
}

$conn->close();
