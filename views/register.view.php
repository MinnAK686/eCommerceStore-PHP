<?php require "views/partials/clients/header.php" ?>

<div class="authcontainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-7 col-lg-5">
                <div class="card px-3 py-3">
                    <h1 class="text-center text-muted mt-1 mb-4">Register</h1>
                    <div>
                        <form action="register" method="POST">
                            <p class="text-danger"><?php if(!empty($errors)) echo $errors ?></p>
                            <div class="form-group mb-3">
                                <label for="registerName">Fullname</label>
                                <input name="fullname" 
                                       type="text"
                                       class="form-control" id="registerName" aria-describedby="emailHelp"
                                       value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>"
                                >
                                <small id="fullnameHelp" class="form-text text-danger mb-3">
                                    <?php  if(!empty($nameError)) echo $nameError ?>
                                </small>
                            </div>
                            <div class="form-group mb-0">
                                <label for="registerEmail">Email address</label>
                                <input name="email" 
                                       type="email"
                                       class="form-control" id="registerEmail" aria-describedby="emailHelp"
                                       value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"
                                >
                                <small id="emailHelp" class="form-text text-danger mb-3">
                                    <?php if(!empty($emailErr)) echo $emailErr ?>
                                </small>
                            </div>
                            <div class="form-group mb-0">
                                <label for="registerPassword">Password</label>
                                <input name="password"
                                       type="password" 
                                       class="form-control" id="registerPassword"
                                       value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"
                                >
                                <small id="passwordHelp" class="form-text text-danger mb-3">
                                    <?php if(!empty($passwordErr)) echo $passwordErr ?>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-2">
                                <b class="text-white">Register</b>
                            </button>
                        </form>
                    </div>
                    <p class="mt-3">
                        Already have an account?
                        <a href="login" class="text-primary font-weight-bold ml-1">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "views/partials/clients/footer.php" ?>