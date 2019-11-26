<?php

require_once("../curd/php/component.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOKS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--Custom style sheet-->
<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<div class="container text-center">
<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Books</h1>
<div class="d-flex justify-content-center">
<form action="" method="post" class="w-50">
<div class="pt-2">
<?php inputElement("<i class='fas fa-id-badge'></i>","ID", "book_id",""); ?>

</div>
<div class="pt-2">
<?php inputElement("<i class='fas fa-book'></i>","Book Name", "book_name","");?>
</div>
<div class="row pt-2" >
<div class="col">
<?php inputElement("<i class='fas fa-people-carry'></i>","Publisher", "book_publisher","");?>
</div>
<div class="col">
<?php inputElement("<i class='fas fa-dollar-sign'></i>","Price", "book_price","");?>
</div>

</div>
<div class="d-flex-my">
                <div class="d-flex1">
                <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'");?>
                </div>
                <div class="d-flex2">
                <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'");?>
                </div>
                <div class="d-flex3">

                <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'");?>
                </div>

                <div class="d-flex4">

                <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Delete'");?>
                </div>


                </div>

</form>
</div>
<!--Bootstrap table-->
            <div class="d-flex table-data">


             <table class="table table-striped table-dark">

             
                <thead class="thead-dark">
                  <tr>
                   <th>ID</th>
                   <th>Book Name</th>
                   <th>Publisher</th>
                   <th>Price</th>
                   <th>Edit</th>
                  </tr>
                </thead>
                <tbody id="tbody">
                    <tr>
                        <td>1</td>
                        <td>Book name</td>   
                        <td>Daily Tution</td>   
                        <td>44.99</td>
                        <td><i class="fas fa-edit btnedit"></i></td>   
   
   
                    </tr>    
                </tbody>
             </table>       


            </div>


</div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>