<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
           <div class="panel panel-default">
                <h3 class="text-center">Date:<?php $cur_date=date('d-m-y'); echo $cur_date; ?></h3>
               <h3 class="text-center"><a href="index.php">Student Management System</a></h3>
           </div>
            <a class="pull-left" href="lib/add.php"><button class="btn btn-default " type="button" name="add">Add Student</button></a>
            <a class="pull-right" href="index.php"><button class="btn btn-default pull-right " name="back" type="button">Back</button></a>
    
       </div>
       
       
       
       <div class="container">
        <form method="post" class="table table-striped">
            <div class="form-group">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Zip</td>
                </tr>
            </div>
        </form>
        </div>
    </div>
</body>
</html>