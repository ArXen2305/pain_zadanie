<?php 
    session_start();

    require_once("header.php");

    if ((isset($_SESSION['logedin'])) && ($_SESSION['logedin']==true))
	{
		header('Location: admin.php');
		exit();
	}
?>

<body>
    <?php require_once("db.php");?>

    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                <form action="" class="box">
                    <div class="field">
                        <a href="register_form.php" class="button column my-6 is-offset-one-quarter is-half is-info is-rounded is-size-3"><h1>Register</h1></a>
                    </div>
                    <div class="field">
                        <a href="login_form.php" class="button column my-6 is-offset-one-quarter is-half is-success is-rounded is-size-3"><h1>Login</h1></a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>

    <?php 

    if (isset($_GET['show']))
        show_all();
    ?>

</body>
</html>