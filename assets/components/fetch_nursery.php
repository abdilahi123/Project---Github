<?php
require_once('../assets/handler/connection.php');

// Fetch nursery data
$query = "SELECT * FROM nursery";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-4">
            <div class="card shadow text-center" id="nursery">
                <img src="../assets/img/nasary/' . htmlspecialchars($row['img']) . '.jpg" alt="abdy">
                <div class="card-body">
                    <h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-6"><h5>Address: </h5></div>
                            <div class="col-6">' . htmlspecialchars($row['address']) . '</div>
                            <div class="col-6"><h5>Contact Information: </h5></div>
                            <div class="col-6">' . htmlspecialchars($row['contact_information']) . '</div>
                        </div>
                    </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#' . htmlspecialchars($row['name']) . 'Modal">BOOK</a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <form class="user" action="../assets/handler/viewbooking.php" method="POST">
            <div class="modal fade" id="' . htmlspecialchars($row['name']) . 'Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">BOOK ' . htmlspecialchars($row['name']) . '</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="name" name="fullName" value="' . htmlspecialchars($_SESSION['name']) . '" placeholder="NAME" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="phone" name="phoneNumber" placeholder="PHONE" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" id="nursery_id" value="' . htmlspecialchars($row['nursery_id']) . '" name="nursery_id" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control form-control-user" id="user_id" value="' . htmlspecialchars($_SESSION['id']) . '" name="user_id" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="register" class="btn btn-primary">BOOK HERE</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>';
    }
} else {
    echo "No nurseries found.";
}

$conn->close();
?>
