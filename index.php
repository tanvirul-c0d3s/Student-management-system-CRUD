<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records of Students</h2>

    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <?php
        include 'connection.php';        

        $sql = "SELECT * FROM studentInfo JOIN class WHERE studentInfo.stu_class=class.class_id;";

        $result = mysqli_query($connection, $sql) or die("Query failed");
        
        if(mysqli_num_rows($result)>0){
        ?>
        <tbody>
           <?php
           while($row = mysqli_fetch_assoc($result)){
           ?>
            <tr>
                <td><?php echo $row["stu_id"]?></td>
                <td><?php echo $row["stu_name"]?></td>
                <td><?php echo $row["stu_address"]?></td>
                <td><?php echo $row["class_name"]?></td>
                <td><?php echo $row["stu_phone"]?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["stu_id"]?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["stu_id"]?>' onclick="return check()">Delete</a>
                </td>
            </tr>
            <?php
           }
            ?>
        </tbody>
        <?php
        }
        mysqli_close($connection);
        ?>
    </table>
    
</div>
</div>
<script>
    function check()
    {
        return confirm("Are you sure?");
    }
</script>
</body>
</html>