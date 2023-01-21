<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("../includes/connect.php");
include('../includes/header.php');
try {
    $bytes = random_bytes(3);
} catch (Exception $e) {
}
$generatedToken = bin2hex($bytes);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>home</title>
        <link rel="stylesheet" href="../styles/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>
    </head>
<body>
<h1 class="text-center">Student Schedule Planner</h1>
<div class="container">
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary mt-2 mb-2" href="home.php" role="button">Return</a>
    </div>

    <form target="frame" name="student-schedule-form" id="student-schedule-form" action="confirm.php" method="post">
        <div class="d-flex justify-content-center">
            <div class="row pl-0 pr-0">
                <label for="generated-token" class="col col-form-label text-end">Student Token: </label>
                <div class="col">
                    <input id="generated-token"
                           aria-valuetext="Student Token:"
                           name="generated-token"
                           class="form-control-plaintext mb-3"
                           type="text"
                           value="<?php echo $generatedToken?>"
                    >
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 pe-5">
                <table id="date_table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">Fall Quarter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Class One: </th>
                            <td class="fall-first-class">
                                <label for="fall-first-class" style="display: none;"></label>
                                <input type="text" id="fall-first-class" class="form-control" name="fall-first-class">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Class Two: </th>
                            <td class="fall-second-class">
                                <label for="fall-second-class" style="display: none;"></label>
                                <input type="text" id="fall-second-class" class="form-control" name="fall-second-class">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Class Three: </th>
                            <td class="fall-third-class">
                                <label for="fall-third-class" style="display: none;"></label>
                                <input type="text" id="fall-third-class" class="form-control" name="fall-third-class">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="fall-notes" style="display: none;"></label>
                                <textarea id="fall-notes"
                                          class="form-control"
                                          name="fall-notes"
                                          rows="4"
                                          placeholder="notes..."
                                          style="width: 100%;"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4 ps-5 pb-5">
                <table id="editableTable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th colspan="2" class="text-center">Winter Quarter</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Class One: </th>
                        <td class="fall-first-class">
                            <label for="winter-first-class" style="display: none;"></label>
                            <input type="text" id="winter-first-class" class="form-control" name="winter-first-class">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Class Two: </th>
                        <td class="fall-first-class">
                            <label for="winter-first-class" style="display: none;"></label>
                            <input type="text" id="winter-first-class" class="form-control" name="winter-first-class">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Class Three: </th>
                        <td class="fall-first-class">
                            <label for="winter-first-class" style="display: none;"></label>
                            <input type="text" id="winter-first-class" class="form-control" name="winter-first-class">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="winter-notes" style="display: none;"></label>
                            <textarea id="winter-notes"
                                      class="form-control"
                                      name="winter-notes"
                                      rows="4"
                                      placeholder="notes..."
                                      style="width: 100%;"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-4 pe-5">
                <table id="editableTable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th colspan="2" class="text-center">Spring Quarter</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Class One: </th>
                        <td class="spring-first-class">
                            <label for="spring-first-class" style="display: none;"></label>
                            <input type="text" id="spring-first-class" class="form-control" name="spring-first-class">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Class Two: </th>
                        <td class="spring-second-class">
                            <label for="spring-second-class" style="display: none;"></label>
                            <input type="text" id="spring-second-class" class="form-control" name="spring-second-class">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Class Three: </th>
                        <td class="spring-third-class">
                            <label for="spring-third-class" style="display: none;"></label>
                            <input type="text" id="spring-third-class" class="form-control" name="spring-third-class">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="spring-notes" style="display: none;"></label>
                            <textarea id="spring-notes"
                                      class="form-control"
                                      name="spring-notes"
                                      rows="4"
                                      placeholder="notes..."
                                      style="width: 100%;"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4 ps-5">
                <table id="editableTable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th colspan="2" class="text-center">Summer Quarter</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Class One: </th>
                        <td class="summer-first-class">
                            <label for="summer-first-class" style="display: none;"></label>
                            <input type="text" id="spring-first-class" class="form-control" name="summer-first-class">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Class Two: </th>
                        <td class="summer-second-class">
                            <label for="summer-second-class" style="display: none;"></label>
                            <input type="text" id="summer-second-class" class="form-control" name="summer-second-class">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Class Three: </th>
                        <td class="summer-third-class">
                            <label for="summer-third-class" style="display: none;"></label>
                            <input type="text" id="summer-third-class" class="form-control" name="summer-third-class">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="summer-notes" style="display: none;"></label>
                            <textarea id="summer-notes"
                                      class="form-control"
                                      name="summer-notes"
                                      rows="4"
                                      placeholder="notes..."
                                      style="width: 100%;"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mb-5">
                <button id="form-submit" type='submit' name='submit' class="btn btn-primary" value="submit">Save</button>
            </div>
    </form>
</div>
<?php
include('../includes/footer.php');
?>