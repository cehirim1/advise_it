<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require("../includes/connect.php");
//include('../includes/header.php');
try {
    $bytes = random_bytes(3);
} catch (Exception $e) {
}
$generatedToken = bin2hex($bytes);
?>
<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/pizza-styles.css">

    <title>Student Schedule Planner</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/pizza_slice.png">

</head>
<body>

<!-- div container for return to home button-->
<div class="container">
    <a href="home.php" class="btn btn-primary px-5 mt-5 mb-4 shadow-sm">
        <span class="glyphicon glyphicon-arrow-left"></span> Home</a>
</div>

<!--div container for form-->
<div id="main" class="container pt-4 shadow-lg pb-3 bg-gray">
    <!--action - where our data will go-->
    <!--how our data will get there-->


    <!--form-->
    <form id="schedule" action="" method="get">

        <!--fieldset-->
        <fieldset class="form-group border border-dark rounded px-5 py-5">

            <!--legend-->
            <legend class="col-sm-4">Student Schedule Planner</legend>

            <!--div for student token-->
            <div class="d-flex justify-content-center">
                <div class="row">
                    <label for="generated-token" class="col col-form-label mx-5">Student Token: </label>
                    <div class="col-sm-6">
                        <input id="generated-token"
                               aria-valuetext="Student Token:"
                               name="generated-token"
                               class="form-control-plaintext mb-3 font-weight-bold border border-secondary text-center ml-2 text-danger"
                               type="text"
                               value="<?php echo $generatedToken?>"
                                   >
                    </div>
                </div>
            </div>


            <!--div for new row for fall qtr & winter qrt-->
            <div class="form-row py-4">

                <!--div for fall qtr-->
                <div class="form-group col-md-6 px-4">
                    <label for="fall" class="px-3 py-2 col-12 bg-dark text-white">FALL QUARTER</label>
                    <label class="col-12 border px-2 py-2 border-top-0">
                        <input type="text" class="form-control" placeholder="Class One"><br>
                        <input type="text" class="form-control" placeholder="Class Two"><br>
                        <input type="text" class="form-control" placeholder="Class Three"><br>
                        <textarea placeholder="Notes..." class="form-control" rows="4" id="fall" name="comment"></textarea>

                    </label>
                </div>

                <!--div for winter qtr-->
                <div class="form-group col-md-6 px-4">
                    <label for="winter" class="px-2 py-2 col-12 text-white bg-dark">WINTER QUARTER</label>
                    <label class="col-12 border px-2 py-2 border-top-0">
                        <input type="text" class="form-control" placeholder="Class One"><br>
                        <input type="text" class="form-control" placeholder="Class Two"><br>
                        <input type="text" class="form-control" placeholder="Class Three"><br>
                        <textarea placeholder="Notes..." class="form-control" rows="4" id="winter" name="comment"></textarea>

                    </label>
                </div>
            </div>

            <!--div for new row for spring qtr & summer qrt-->
            <div class="form-row">

                <!--div for summer qtr-->
                <div class="form-group col-md-6 px-4">
                    <label for="spring" class="px-2 py-2 col-12 text-white bg-dark">SPRING QUARTER</label>
                    <label class="col-12 border px-2 py-2 border-top-0">
                        <input type="text" class="form-control" placeholder="Class One"><br>
                        <input type="text" class="form-control" placeholder="Class Two"><br>
                        <input type="text" class="form-control" placeholder="Class Three"><br>
                        <textarea placeholder="Notes..." class="form-control" rows="4" id="spring" name="comment"></textarea>

                    </label>
                </div>

                <!--div for summer qtr-->
                <div class="form-group col-md-6 px-4">
                    <label for="summer" class="px-2 py-2 col-12 text-white  bg-dark">SUMMER QUARTER</label>
                    <label class="col-12 border px-2 py-2 border-top-0">
                        <input type="text" class="form-control" placeholder="Class One"><br>
                        <input type="text" class="form-control" placeholder="Class Two"><br>
                        <input type="text" class="form-control" placeholder="Class Three"><br>
                        <textarea placeholder="Notes..." class="form-control" rows="4" id="summer" name="comment"></textarea>

                    </label>
                </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 mt-4">Save Plan</button>
            </div>
        </fieldset>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="script/pizza-script.js"></script>
</body>
</html>
