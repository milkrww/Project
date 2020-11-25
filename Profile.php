<?php
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>PROFILE</title>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
    <center><h1>PROFILE</h1></center>
    <?php
        include_once('connection.php');
        $sql = "SELECT * FROM restaurant";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

        echo "<div class = 'container'>";
            echo "<div class = 'row justify-content-center'>";
                echo "<div class = 'col-md-6 '>";
                    echo "<div class='card border-2 shadow'>";
                        echo "<div class='card-body'>";
                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>RESTAURANT NAME</b></label>";  
                                    echo "</div>"; 
                                    
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['restaurantname']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";
                            
                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>FULL NAME</b></label>";  
                                    echo "</div>"; 
                                    
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['fullname']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";

                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>ADDRESS</b></label>";  
                                    echo "</div>"; 
                                
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['address']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";

                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>PHONE NUMBER</b></label>";  
                                    echo "</div>"; 
                                
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['phonenumber']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";

                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>E-MAIL</b></label>";  
                                    echo "</div>"; 
                                
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['email']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";

                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>USERNAME</b></label>";  
                                    echo "</div>"; 
                                
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['username']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";

                            echo "<div class = 'from-group'>";
                                echo "<div class='row'>";
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label><b>PASSWORD</b></label>";  
                                    echo "</div>"; 
                            
                                    echo "<div class = 'col-md-6 '>";
                                        echo "<label>" .$row['password']. "</label>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            echo "<hr>";

                             echo "<center><button type='submit' class='btn btn-lg btn-dark' name='edit'>EDIT</button></center>";

                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
            
            //echo "id:".$row["Customer_id"]." - Name: ".$row["Customer_Name"]." ".$row["Customer_Lastname"]."<br>";
        
       }
        } else {
            echo "<tr><td colspan='6'><center>ไม่มีข้อมูล</center></td></tr>";
        } 
        echo "</table>";
$conn->close();
    ?>
    
    </body>
</html>