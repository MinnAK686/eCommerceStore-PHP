<?php require "views/partials/clients/header.php" ?>

<div class="authcontainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-7 col-lg-5">
                <div class="card px-3 py-3">
                    <h1 class="text-center text-muted mt-1 mb-4">Login</h1>
                    <div>
                        <form action="login" method="POST">
                            <p class="text-danger"><?php if(!empty($errors)) echo $errors ?></p>
                            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                            <div class="form-group mb-0">
                                <label for="registerEmail">Email address</label>
                                <input name="email" 
                                       type="text" 
                                       class="form-control" id="registerEmail" aria-describedby="emailHelp"
                                       value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>"      
                                >
                                <small id="emailHelp" class="form-text text-danger">
                                    <?php if(isset($emailErr)) echo $emailErr ?>
                                </small>
                            </div>
                            <div class="form-group mb-0">
                                <label for="registerPassword">Password</label>
                                <input name="password" 
                                       type="password" 
                                       class="form-control" id="registerPassword"
                                       value="<?php if(isset($_POST["password"])) echo $_POST["password"] ?>"       
                                >
                                <small id="passwordHelp" class="form-text text-danger">
                                    <?php if(isset($passwordErr)) echo $passwordErr ?>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4">
                                <b class="text-white">Login</b>
                            </button>
                        </form>
                    </div>
                    <p class="mt-3">
                        Don't have an account yet?
                        <a href="register" class="text-primary font-weight-bold ml-1">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "views/partials/clients/footer.php" ?>