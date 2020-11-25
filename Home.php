<?php session_start(); $title = "HOME"; $basePath = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('./Head.php'); ?>
    <script src="./js/time.js"></script>   
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <a class="navbar-brand" href="#">QUEUEs</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="Home.php">HOME</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="manageQ.php">MANAGE QUEUE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MENU
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">APPETIZER</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">MAIN</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">DESSERT</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">DRINK</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">STATISTIC</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROFILE</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Profile.php">MANAGE</a>
                    <a class="dropdown-item" href="#">SETTING</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Logout.php">LOGOUT</a>
                </div>
            </ul>
        </div>  
    </nav>


    <div class="container-fluid">
        <h3 style="margin-top: 5rem;text-align: center;" id="time"></h3>
    </div>

    
    <!-- <div class = "container">
        <div class = "row">
            <div class = "col-md-3">
            
                <div class = "qnow">
                    <h3>QUEUE NOW</h3>
                    <form method = "POST">
                        <input  text ="center" style="border-color:purple" type='text' name='qnow'>
                    </form> 
                </div>
            
            </div>
          
            <div class = "col-md-3">
           
                <div class = "qnext">
                    <h3>QUEUE NEXT</h3>
                    <form method = "POST">
                        <input  text ="center" style="border-color:purple" type='text' name='qnext'>
                    </form> 
                </div>
            
            </div>
           
            <div class = "col-md-1">
            <button type="submit" class="btn btn-warning" name="detail">DETAIL</button>     
            </div>
         
            <div class = "col-md-4">
                <div >
                    <form method = "POST">
                        <fieldset>
                            <legend>QUEUE NEXT</legend>
                                <table>
                                    <tr>
                                        <td>QUEUE</td>
                                        <td>QUANTITY CUSTOMER</td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                        </fieldset>
                    </form> 
                </div>
           
        </div>
    </div>
     -->

    
</body>
</html>