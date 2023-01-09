<!DOCTYPE html>
<html>

<body>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $married = $_POST["married"];

    $prefix = "";
    if ($gender == "male"){
        if ($age >= 15){
            $prefix = "นาย";
        }else{
            $prefix = "เด็กชาย";
        }
    }else{
        if ($married == "married"){
            $prefix = "นาง";
        }else{
            if ($age < 15){
                $prefix = "เด็กหญิง";
            }else{
                $prefix = "นางสาว";
            }
        }
    }
    echo "Name: ".$prefix." ".$name;
    ?>
</body>

</html>