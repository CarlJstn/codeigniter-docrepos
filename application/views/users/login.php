<?php echo form_open('users/login'); ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
<style type="text/css">
  body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(238, 238, 238), rgb(171, 171, 171));
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
   /* text-align: center;*/
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

</style>

<title>Bulsu | Sign In</title>

<body>
 <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>assets/images/bulsu.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
                <input type="password" name="password" class="form-control" placeholder="Password" id="myInput" required>
                <input type="checkbox" onclick="myFunction()">Show Password
                <hr>
                <button type="submit" style="width: 100%; cursor: pointer;" class="btn btn-danger">Login</button>
                <br><br>
                <button type="button" style="width: 100%; cursor: pointer;" class="btn btn-secondary" onclick="location.href='<?php echo $this->session->userdata('url'); ?>';">Go Back</button>

                <?php if($this->session->flashdata('login_failed')): ?>
                  <?php echo'<br><br><p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('login_success')): ?>
                  <?php echo'<br><br><p class="alert alert-success">'.$this->session->flashdata('login_success').'</p>'; ?>
                <?php endif; ?>
                <?php if($this->session->flashdata('account_blocked')): ?>
                  <?php echo'<br><br><p class="alert alert-danger">'.$this->session->flashdata('account_blocked').'</p>'; ?>
                <?php endif; ?>

            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

  
</body>

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

</html>



<?php echo form_close(); ?>
