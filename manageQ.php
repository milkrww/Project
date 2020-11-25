
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManageQueue</title>

    <?php
        include_once('connection.php');
        $sql = "SELECT * FROM q;";
        $result = mysqli_query($conn,$sql);
    ?>
   
    <script>
        function checksearch(){
        var chsearch = document.getElementById("chsearch").value;
            if(isNaN(chsearch)){
                alert("กรุณากรอกคิว");
                return false;
            }
        }
    </script>

</head>
<body>
    <h1><center>ManageQueue</center> </h1>

    <form name= "searchq" action="" method="post" align = "center">
        ค้นหาคิว : <input type="search" name="searchqueue" id="chsearch" onblur="checksearch()">
                 <input type="submit" name=submitqueue value="searchforqueue" >
    </form>
                
    <br>
    
    <form action="" method="post">
        <?php if(isset($_POST['submitqueue'])){
            $searchqueue = $_POST['searchqueue'];
            $rssql = "SELECT * FROM q WHERE queue = '$searchqueue' ";
            $rs = mysqli_query($conn,$rssql); ?>
                
            <table align = "center" valign = "bottom" border = "1" width = "50%">
                <tr>
                    <th>คิว</th>
                    <th>ชื่อ</th>
                    <th>time</th>
                    <th>จำนวนลูกค้า</th>
                    <th>สถานะ</th>
                    <th>edit</th>
                    <th>cancel</th>
                </tr> 
                <?php while($rowsearch = mysqli_fetch_array($rs)){ ?>
                    <tr>
                        <td><?php echo $rowsearch['queue']; ?> </td>    
                        <td><?php echo $rowsearch['customer_ID']; ?></td>
                        <td><?php echo $rowsearch['queue_date']; ?></td>
                        <td><?php echo $rowsearch['customer_quantity']; ?></td>
                        <td><?php echo $rowsearch['status']; ?></td>
                        <td  align = center>แก้ไข</td>
                        <td  align = center>ยกเลิก</td>
                    </tr>
                <?php  }  ?>
            </table>
        <?php   }?>

    </form>

    <br>

    <form name ="tableq"  action="" method="post">
        <table align = "center" valign = "bottom" border = "1" width = "50%" >
            <tr>
                <th>คิว</th>
                <th>ชื่อ</th>
                <th>time</th>
                <th>จำนวนลูกค้า</th>
                <th>สถานะ</th>
                <th>edit</th>
                <th>cancel</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['queue']; ?> </td>
                    <td><?php echo $row['customer_ID']; ?></td>
                    <td><?php echo $row['queue_date']; ?></td>
                    <td><?php echo $row['customer_quantity']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td align = center>แก้ไข</td>
                    <td align = center>ยกเลิก</td>
                </tr>
            <?php } ?>
        </table>
    </form>


</body>
</html>