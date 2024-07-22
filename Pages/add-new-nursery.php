<?php include '../assets/components/header.php'; ?>
<?php include '../assets/components/sidebar.php'; ?>




<body class="bg-gradient-primary">
    <div class="container">
        <form class="user" action="../assets/handler/add_nursery.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nursery name" name="nursery_name" placeholder="NURSERY NAME" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="contact information" name="contact_information" placeholder="CONTACT INFORMATION" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="img" name="nursery_img" placeholder="NURSERY IMAGE" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="ADDRESS" required>
                    </div>
                </div>

            </div>
            </div>
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">SUBMIT</button>
    </form>
    </div>

    <?php include '../assets/components/footer.php'; ?>
    <?php include '../assets/components/chooseStaff.php'?>
