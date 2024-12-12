<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Package Buy Form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/Elegant-Registration-Form.css" />
    <link
      rel="stylesheet"
      href="assets/css/Ludens-Users---2-Simple-Registration-Section.css"
    />
  </head>

  <body>
    <section class="clean-hero">
      <div
        style="
          height: 100%;
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        "
      >
        <div
          class="d-flex justify-content-center align-items-center"
          style="
            height: inherit;
            min-height: initial;
            position: absolute;
            left: 0;
            width: 100%;
            background: linear-gradient(
              5deg,
              rgb(0, 103, 224),
              rgb(0, 163, 255)
            );
          "
        >
          <div
            class="container bg-white"
            style="
              padding-top: 40px;
              padding-bottom: 40px;
              margin-right: 12px;
              margin-left: 12px;
              padding-left: 6px;
              padding-right: 6px;
            "
          >
            <div class="row">
              <div
                class="col-10 col-sm-10 col-md-10 offset-1 offset-sm-1 offset-md-1 text-start align-content-md-center"
              >
                <form   action="member_submit.php" method="post" >
                  <h2
                    class="text-center"
                    style="margin-bottom: 20px; color: #38414b"
                  >
                    <strong>Register</strong>
                  </h2>
                  <div class="form-group mb-3">
                    <label
                      class="form-label"
                      style="margin-bottom: 10px; color: #505e6c"
                      ><strong>Name</strong></label
                    ><input
                      class="form-control"
                      type="text"
                      name="name"
                      style="margin-bottom: 20px"
                      placeholder="Joe Ravikumar"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      class="form-label"
                      style="
                        margin-bottom: 10px;
                        margin-top: 10px;
                        color: #505e6c;
                      "
                      ><strong>Contact No</strong></label
                    ><input
                      class="form-control"
                      type="text"
                      name="contact_no"
                      style="margin-bottom: 20px"
                      placeholder="0777775234"
                    />
                  </div>
                  <script>
                    // Submit button made with javascript
                    function changePassword() {
                      var password = document.querySelector("#password").value;
                      var confirmPassword =
                        document.querySelector("#confirmPassword").value;

                      if (password.length >= 8) {
                        if (password === confirmPassword) {
                          var btn = $("#submitButton").removeAttr("disabled");
                          document.querySelector(
                            "#passwordsError"
                          ).style.display = "none";
                          console.log("enabling");
                        } else {
                          var btn = $("#submitButton").attr("disabled", "true");
                          document.querySelector(
                            "#passwordsError"
                          ).style.display = "block";
                          document.querySelector("#errorMessage").innerHTML =
                            "The passwords do not match";
                          console.log("disabling");
                        }
                      } else {
                        var btn = $("#submitButton").attr("disabled", "true");
                        document.querySelector(
                          "#passwordsError"
                        ).style.display = "block";
                        document.querySelector("#errorMessage").innerHTML =
                          "The new password must be at least 8 characters long";
                        console.log("disabling");
                      }
                    }
                  </script>

                  <div class="form-group mb-3">
                    <label
                      class="form-label"
                      style="
                        margin-bottom: 10px;
                        margin-top: 10px;
                        color: #505e6c;
                      "
                      ><strong>Index No</strong></label
                    ><input
                      class="form-control"
                      type="text"
                      name="index_no"
                      id="password"
                      placeholder="CST/20/047"
                      style="margin-bottom: 20px" 
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      class="form-label"
                      style="
                        margin-bottom: 10px;
                        margin-top: 10px;
                        color: #505e6c;
                      "
                      ><strong>Upload the payment slip</strong></label
                    >
                  </div>
                  <div
                    id="passwordsError"
                    class="form-group mb-3"
                    style="display: none; margin-bottom: 18px"
                  >
                    <span
                      id="errorMessage"
                      class="text-danger"
                      style="font-size: 15px"
                      >Text</span
                    >
                  </div>
                  <input class="form-control" type="file" name="payment_slip_url" />
                  <div class="row">
                    <div class="col-md-6" style="margin-top: 20px">
                      <a
                        class="btn btn-secondary d-block d-lg-flex justify-content-lg-center w-100"
                        role="button"
                        href="#"
                        >Cancel</a
                      >
                    </div>
                    <div class="col-md-6" style="margin-top: 20px">
                      <button
                        class="btn btn-primary d-block d-lg-flex justify-content-lg-center w-100"
                        id="submitButton"
                        type="submit"
                      >
                        register
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>



 

