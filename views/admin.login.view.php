<?php require "views/partials/admin/header.php" ?>

<div style="width: 100vw;height:100vh;display:grid;place-items:center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-7 col-lg-5">
                <div class="card border p-3">
                    <h1 class="text-center text-muted mt-1 mb-4">AdmLogin</h1>
                    <div>
                        <form action="admin/login" method="POST">
                            <p class="text-danger">
                                <?php if(isset($errors)) echo $errors ?>
                            </p>
                            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                            <div class="form-group ">
                                <label for="loginEmail">Email address</label>
                                <input name="email" 
                                       type="text" 
                                       class="form-control" id="loginEmail" aria-describedby="emailHelp"
                                       value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>"      
                                >
                                <small id="emailHelp" class="form-text text-danger">
                                    <?php if(isset($emailErr)) echo $emailErr ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input name="password" 
                                       type="password" 
                                       class="form-control" id="loginPassword" aria-describedby="emailHelp"
                                       value="<?php if(isset($_POST["password"])) echo $_POST["password"] ?>"      
                                >
                                <small id="emailHelp" class="form-text text-danger">
                                    <?php if(isset($passwordErr)) echo $passwordErr ?>
                                </small>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info mt-4">
                                    <b class="text-white">Login</b>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "views/partials/admin/footer.php" ?>