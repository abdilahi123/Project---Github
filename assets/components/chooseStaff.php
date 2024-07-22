<?php
require_once('../assets/handler/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dropdown</title>
</head>

<body>
    <div class="col-md-6">
        <div class="form-group">
            <select id="staff" name="staff_id" class="form-control">
                <option value="">----Select Staff----</option>
                <?php
                // Fetch staff data
                $query = "SELECT staff_id, name FROM staff";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    $options = '';
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['staff_id'] . '">' . $row['name'] . '</option>';
                    }
                } else {
                    $options = '<option value="">No staff available</option>';
                }
                $conn->close();
                ?>
            </select>
        </div>
    </div>

    <style>
        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .form-control-user {
            border-radius: 10rem;
            padding: 1.5rem 1rem;
        }
    </style>
</body>

</html>