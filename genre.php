<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="./css/style.css">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Category</title>
</head>

<body>
  <!-- Nav bar-->
  <?php
  include "header.php";
  ?>

  <br>

  <!--  Content-->
  <div class="container">
    <!-- carousel-->
    <!-- Book cards -->
    <div class="row">
      <div class="col" width="50" height="50">
        <div class="card gener-preview" style="width: 16rem;">
          <img class="card-img-top" src="images/book.jpg" alt="Card image cap" width="150" height="200">
          <div class="card-body">
            <h5 class="card-title"><b>Books</b></h5>
            <p class="card-text" width="150" height="200">
              A library is a collection of materials, books or media that are accessible for use and not just for display purposes.
            </p>
            <a href="bookuser.php" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
          </div>
        </div>
      </div>
      <div class="col" width="50" height="50">
        <div class="card gener-preview" style="width: 16rem;">
          <img class="card-img-top" src="images/article.jpg" alt="Card image cap" width="150" height="200"">
                    <div class=" card-body">
          <h5 class="card-title"><b>Articles</b></h5>
          <p class="card-text" width="150" height="200">
            Article reading site include Arts, Business, Crime, History, Politics, Science, Sports, Tech, and World.
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card gener-preview" style="width: 16rem;">
        <img class="card-img-top" src="images/research_paper.jpg" alt="Card image cap" width="150" height="200">
        <div class="card-body">
          <h5 class="card-title"><b>Research Papers</b></h5>
          <p class="card-text">
            Completing a research paper successfully means accomplishing the specific tasks set out for you.
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card gener-preview" style="width: 16rem;">
        <img class="card-img-top" src="images/passpapers.jpg" alt="Card image cap" width="150" height="200">
        <div class="card-body">
          <h5 class="card-title"><b>Pass Papers</b></h5>
          <p class="card-text">
            Past papers Administered effectively, past papers are the best way to experience of an examination.
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Line 02( not responsived for other devices)-->
  <div class="row">
    <div class="col" width="50" height="50">
      <div class="card gener-preview" style="width: 16rem;">
        <img class="card-img-top" src="images/ex.jpg" alt="Card image cap" width="150" height="200">
        <div class="card-body">
          <h5 class="card-title"><b>Other</b></h5>
          <p class="card-text">

          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card gener-preview" style="width: 16rem;">
        <img class="card-img-top" src="images/ex.jpg" alt="Card image cap" width="150" height="200">
        <div class="card-body">
          <h5 class="card-title"><b>Other</b></h5>
          <p class="card-text">

          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card gener-preview" style="width: 16rem;">
        <img class="card-img-top" src="images/ex.jpg" alt="Card image cap" width="150" height="200">
        <div class="card-body">
          <h5 class="card-title"><b>Other</b></h5>
          <p class="card-text">
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card gener-preview" style="width: 16rem;">
        <img class="card-img-top" src="images/ex.jpg" alt="Card image cap" width="150" height="200">
        <div class="card-body">
          <h5 class="card-title"><b>Other</b></h5>
          <p class="card-text">
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  </div>

  <!-- Footer-->
  <?php
  include "footer.php";
  ?>
</body>

</html>