<?php 

 $check_box_name=$_POST['name'];  
                $returnCheckBox="";
                $returnCheckBox.="<button class='button test' id='{$check_box_name}'>{$check_box_name}</button><br><script>
                $(\"#{$check_box_name}\").on( \"click\", \".test\", function() {
    alert('merge');
})</script>";
     
    echo $returnCheckBox;
?>
                