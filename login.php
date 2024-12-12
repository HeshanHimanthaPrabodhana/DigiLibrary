<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body
    class="body-bac"
    style="
      background: url('assets/img/book-library-with-open-textbook.jpg') center /
        cover no-repeat;
    "
  >
    <div class="container title">
      <h1 class="h1-login">Library System Login</h1>
      <div class="row">
        <section>
          <div class="section-bg-overlay">
            <div class="form-box">
              <div class="form-value">
                  <form action="loginprocess.php" method="POST">
                  <div class="inputbox">
                      <input type="text" name="username" required="" /><label for>Username</label>
                  </div>
                  <div class="inputbox">
                      <input type="password" name="password" required="" /><label for
                      >Password</label
                    >
                  </div>
                  <div class="forget">
                      <label for=""
                      ><input type="checkbox"/>Remember me<a href="#"></a
                    ></label>
                  </div>
                      
                   <?php
                   if(isset($_GET['error'])){
                       if($_GET['error']==1){
                           ?>
                      <label style="color: red ">You must enter username and password</label>
                      <?php
                       }
                   }
                   ?>
                      
                      <button style="background-color:orange">Login</button>
                  <div class="register">
                      <p><a href="forgotPassword.php">Forget Password? </a></p>
                  </div>
                  
                   <div class="register">
                       <p><a href="registration.php">You haven't accout yet? </a></p>
                  </div>
                </form>
                  <?php
                if (isset($_GET['success'])) {

                    if ($_GET['success'] == 1) {
                        ?>
                        
                        <script>
                                swal("Successfully!","Change the Password", "success");
                        </script>
                        <?php
                    }
                }
                ?>
              </div>
            </div>
          </div>
        </section>
        <script
          type="module"
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
          nomodule
          src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
