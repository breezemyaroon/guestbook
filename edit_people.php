<?php
require("connect_db.php");

$id=$_GET["id"];
$sql = "SELECT * FROM survey WHERE id=$id";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>
<form action="save_edit_people.php" method="post">
    First Name:<input type="text" name="f_name" value="<?php print($row["f_name"]); ?>"><br>
    Last Name:<input type="text" name="l_name" value="<?php print($row["l_name"]); ?>"><br>
    Age:<input type="text" name="age" value="<?php print($row["age"]); ?>"><br>
    Sex:<select name="sex">
            <option value="M" <?php if($row["sex"]=="M") print("selected");?>>Male</option>
            <option value="F" <?php if($row["sex"]=="F") print("selected");?>>Female</option>
        </select><br>
    Marry Status:<select name="marry_status">
            <option value="S" <?php if($row["marry_status"]=="S") print("selected");?>>Single</option>
            <option value="M" <?php if($row["marry_status"]=="M") print("selected");?>>Married</option>
        </select><br>
    <input type="submit" value="edit">
</form>
<?php
}
?>