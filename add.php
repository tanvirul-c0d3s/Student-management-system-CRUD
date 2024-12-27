<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                include 'connection.php';  

                $sql = "SELECT * FROM class;";
                $result = mysqli_query($connection, $sql) or die("Query failed");

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row["class_id"]?>"><?php echo $row["class_name"]?></option>
                
                <?php
                    }
                }
                mysqli_close($connection);
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
