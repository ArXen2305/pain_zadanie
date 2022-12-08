<?php require_once("header.php"); ?>

<body>
    
<section class="hero is-primary is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form method="post" action="login.php" class="box">
            <div class="field">
                <input class="login input" type="text" name="log" placeholder="Login">
            </div>
            <div class="field">
                <input class="password input" type="password" name="pass1" placeholder="Password">
            </div>
            <div class="field">
                <button class="button is-success" name="sub" id="sub">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>