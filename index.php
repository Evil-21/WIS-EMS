<?php session_start(); ?>

<?php include("config/db_conn.php"); ?>
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
    <form action="process/process_login.php" method="post">
    <section class="log-in">
        <div class="container">
            <div class="logo mt-5">
                <img src="./image/logo-wis.png" alt="">
            </div>
            <div class="log-in-window ">
                
                <div class="row">
                    <div class="col-12">
                        <div class="form__group field mt-4">
                            <input required="" id="employee_id" name="employee_id" placeholder="Name" class="form__field" type="text" autocomplete="off">
                            <label class="form__label" for="name">Emp Id</label>
                            <?php 
                                if(isset($_SESSION['errors']) && $_SESSION['errors']['employee_id']){
                                    foreach($_SESSION['errors']['employee_id'] as $msg){
                                        echo $msg.'<br>';
                                    }
                                }
                            ?>
                            <!-- <input required="" placeholder="Name" class="form__field" type="text">
                            <label class="form__label" for="name">Employee Id</label> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                   <div class="col-12">
                    <div class="form__group field mt-4">
                        <input required="" id="password" name="password" placeholder="Password" class="form__field" type="password" autocomplete="off">
                        <label class="form__label" for="password">Password</label>
                        <?php 
                                if(isset($_SESSION['errors']) && $_SESSION['errors']['password']){
                                    foreach($_SESSION['errors']['password'] as $msg){
                                        echo $msg.'<br>';
                                    }
                                }
                            ?>

                    </div>
                   </div>
                </div>

                <div class="log-in-btn mt-5">
                    <button name="submit">LOG IN</button>
                </div>
            </div>
        </div>
    </section>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>