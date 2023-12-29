<?php require_once  'views/partials/header.view.php'; ?>

<div class="container w3-row w3-mobile w3-display-container w3-padding-top-48">

    <div class="w3-third w3-left  w3-mobile">
        <h2 class="text-center w3-margin-bottom">Welcome Back!</h2>


        <img style="width:100%;" src="https://gumlet.assettype.com/thebridgechronicle%2F2021-01%2F3d9d6209-15ba-4213-8f75-c424a27003b0%2FBack_to_School_Illustration.jpg?format=auto" />

    </div>
    <div class="w3-display-container  w3-mobile w3-rest"></div>

    <div class="w3-third w3-right  w3-mobile">
        <section>
            <form method="post" action="<?= htmlspecialchars('login'); ?>">
                <h4 style>Login to your account</h4>
                <?php if (!empty($loginState)) : ?>

                    <div class="alert alert-danger"> <?= $loginState ?> </div>
                <?php endif; ?>
                <br />
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>

                    <input class="form-control" required name="email" value="<?= $emailAddress; ?>" autocomplete="email" />
                </div>
                <br />
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>

                    <input class="form-control" required name="password" type="password" value="<?= $password ?>" autocomplete="password" />
                </div>

                <br />
                <div>
                    <button id="login-submit" type="submit" class="w3-button w-100 w3-round w3-deep-orange w3-no-border w3-hover-blue btn-lg btn-primary">
                        Login</button>
                </div>
                <br />

                <div>
                    <p style="font-weight:500">
                        Don't have an account? <a href="register.php" />Register
                        now!</a>
                    </p>
                </div>
            </form>
        </section>
    </div>
</div>

<?php require_once  'views/partials/footer.view.php' ?>