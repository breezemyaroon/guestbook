<?php
require("connect_db.php");

$sql = "SELECT id, f_name, l_name, age, sex, marry_status FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["sex"]=="M"){
        if($row["age"]>=15){
            echo "นาย".$row["f_name"]." ".$row["l_name"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
        }
        else{
            echo "ด.ช.".$row["f_name"]." ".$row["l_name"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
        }
    }else{
        if($row["age"]>=15){
            if($row["marry_status"]=="M"){
                echo "นาง".$row["f_name"]." ".$row["l_name"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
            }else{
                echo "น.ส.".$row["f_name"]." ".$row["l_name"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
            }
           
        }
        else{
            echo "ด.ญ.".$row["f_name"]." ".$row["l_name"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
        }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>
