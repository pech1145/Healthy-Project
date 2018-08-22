<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ท่าทางการออกกำลังกาย</title>
    <link href="album.css" rel="stylesheet">
</head>

<body>
<?php

    include ("connect.php");
    include ("header.php");
?>

<header>
    <div class="navbar  box-shadow" style="background-color: #3c763d;">
        <div class="container d-flex justify-content-between">
            <a href="home.php#suggestion" class="navbar-brand d-flex align-items-center" style="color:#fff">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                    <circle cx="12" cy="13" r="4"></circle>
                </svg>
                <strong>รีวิวการออกกำลังกาย</strong>
            </a>
            <a href="insert.php" class="btn btn-sm btn-outline-secondary"style="background-color: white"> Insert</a>
        </div>
    </div>
</header>

<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                $result = mysqli_query($conn,"SELECT * FROM typesport");
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             src="img/a.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['text']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="edit.php?view=<?php echo $row['id']?>" class="btn btn-sm btn-outline-secondary" style="text-decoration: none;"> View</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>


        </div>
    </div>

</main>

<?php
 include ("footer.php");
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<script src="../../../../assets/js/vendor/holder.min.js"></script>
</body>
</html>
