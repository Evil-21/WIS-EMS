<?php
session_start();
include("config/db_conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?" rel="stylesheet" />

    <link rel="stylesheet" href="./css/style.css" />

    <title>Wis Employee Management System</title>
</head>

<body>
    <!-- section work Details  -->
    <form action="process/process_worksheet.php" method="POST">
    <section class="work-detail">
        <div class="container">
            <h4 class="text-center mt-5 Emp-worksheet-heading"><?php echo (date("Y/m/d")); ?>'s Work Details</h4>
            <div class="work-details-sheet">
                
                <div class="row">
                    
                    <div class="col-6 custom-padding">Start Time
                        <input type="time" id="start_time" name="start_time" class="form-control top-space" required>
                    </div>
                    <div class="col-6 custom-padding">End Time
                        <input type="time" id="end_time" name="end_time" class="form-control top-space" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 custom-padding">Work Done
                        <textarea id="work_done" class="form-control top-space" name="work_done" rows="4" cols="50"></textarea>
                    </div>
                </div>
                <div class="work-from-radio-btn">
                    <div class="row">
                        <div class="col-6 custom-padding">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="location" id="location1" value="work_from_home">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Work From Home
                                </label>
                            </div>
                        </div>
                        <div class="col-6 custom-padding">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="location" id="location2" value="work_from_office">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Work From Office
                                </label>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="worksheet-submit">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </div>

        </div>
    </section>
    </form>
    <!-- section work Details Ends -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>


</html>