<?php

require_once('modeles/login_admin.php');
?>
<div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
    <div class="carousel-container">
        <div class="carousel-content animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-md-6" style="margin: 0 auto; ">
                    <fieldset>
                        <legend>ESPACE ADMINISTRATEUR</legend>


                        <form method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Submit</button>
                        </form>
                        <p style="text-align: center;color:red; font-weight:bolder">
                            <?php echo @$error; ?>
                        </p>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>