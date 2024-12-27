<?php include 'header.php'; ?>

<?php $id=$_GET['id'];

include 'connection.php';

$sql="SELECT * FROM studentinfo WHERE stu_id = $id;";
$resultStu = mysqli_query($connection, $sql) or die("Query failed");
$rowStu = mysqli_fetch_assoc($resultStu);

?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $rowStu["stu_id"]?>"/>
          <input type="text" name="sname" value="<?php echo $rowStu["stu_name"]?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $rowStu["stu_address"]?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                $sql = "SELECT * FROM class;";
                $result = mysqli_query($connection, $sql) or die("Query failed");
                $s = "";

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        if ($rowStu['stu_class'] == $row['class_id'])
                                    $s = "Selected";
                                else
                                    $s = "";
                ?>
                <option value="<?php echo $row["class_id"]?>" <?php echo $s;?>><?php echo $row["class_name"]?></option>
                
                <?php
                    }
                }
                mysqli_close($connection);
                ?>
            </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $rowStu["stu_phone"]?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
</body>
</html>
