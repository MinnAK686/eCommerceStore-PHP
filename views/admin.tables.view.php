<!-- Partial Header -->
<?php require "views/partials/admin/header.php" ?>

    <!-- Navbar Component -->
    <?php require "views/components/admin/navbar.php" ?>

    <!-- Sidebar Component -->
    <?php require "views/components/admin/sidebar.php" ?>
        
        <div class="main-panel">

            <!-- Main Content -->
            <div class="content-wrapper pt-3 pb-5">
                <h1 class="text-muted">Tables</h1>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Tickets</h4>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th> Assignee </th>
                                    <th> Subject </th>
                                    <th> Status </th>
                                    <th> Last Update </th>
                                    <th> Tracking ID </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <img src="<?= BASE_URL ?>/views/assets/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                                    </td>
                                    <td> Fund is not recieved </td>
                                    <td>
                                    <label class="badge badge-gradient-success">DONE</label>
                                    </td>
                                    <td> Dec 5, 2017 </td>
                                    <td> WD-12345 </td>
                                </tr>
                                <tr>
                                    <td>
                                    <img src="<?= BASE_URL ?>/views/assets/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                                    </td>
                                    <td> High loading time </td>
                                    <td>
                                    <label class="badge badge-gradient-warning">PROGRESS</label>
                                    </td>
                                    <td> Dec 12, 2017 </td>
                                    <td> WD-12346 </td>
                                </tr>
                                <tr>
                                    <td>
                                    <img src="<?= BASE_URL ?>/views/assets/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                                    </td>
                                    <td> Website down for one week </td>
                                    <td>
                                    <label class="badge badge-gradient-info">ON HOLD</label>
                                    </td>
                                    <td> Dec 16, 2017 </td>
                                    <td> WD-12347 </td>
                                </tr>
                                <tr>
                                    <td>
                                    <img src="<?= BASE_URL ?>/views/assets/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                                    </td>
                                    <td> Loosing control on server </td>
                                    <td>
                                    <label class="badge badge-gradient-danger">REJECTED</label>
                                    </td>
                                    <td> Dec 3, 2017 </td>
                                    <td> WD-12348 </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Copyright footer component -->
            <?php require "views/components/admin/copyright.footer.php" ?>
        </div>
    

<?php require "views/partials/admin/footer.php" ?>