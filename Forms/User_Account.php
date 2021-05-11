<!DOCTYPE html>
<html lang="en">

    <head>

        <title>User Accounts</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
        <link type="text/css" href="css/fontawesome.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-table.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
        
        <script type="text/javascript">
 
         var $loginusers = $('#loginusers');
              $loginusers.bootstrapTable({
               url: 'test1.php',
               search: true,
               pagination: true,
               buttonsClass: 'primary',
               showFooter: true,
               minimumCountColumns: 2,
               columns: [{
                   field: 'num',
                   title: '#',
                   sortable: true,
               },{
                   field: 'first',
                   title: 'FirstName',
                   sortable: true,
               },{
                   field: 'last',
                   title: 'LastName',
                   sortable: true,
                   
               },  ],
         
           });
         
        </script>
       
    </head>
    


    <body>
    
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="../index.php">IMPERIUM REX</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    
                    
                </ul>
            </div>
        </nav>

                        <div class="container">
                             <div class="col-md-12">
                                 <div class="panel panel-success">
                                     <div class="panel-heading "> 
                                         <span class=""> User List<br>
                                     </div>
                                     
                                     <div class="panel-body">
                                        <div class="row">
                                             <div class="col-md-12">
                                             
                                                 <table id="loginusers"
                                                    data-show-columns="true"
                                                    data-height="460">
                                                 </table>
                                             </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

        <div class="container features">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                        
                </div> 

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="User_Add.php" class="btn btn-warning">Register User</a>
                    <a href="User_Modify.php" class="btn btn-warning">Modify User</a>
                </div>

            </div>
        </div>
        
        <?php
            include('footer.php');
        ?>

        <script src="jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="main.js"></script>
    

    </body>
    

</html>

