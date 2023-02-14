<?php
    function change_permission($file_name){
        if(is_file($file_name)){
        if(pathinfo($file_name)["extension"] === "txt"){
            chmod($file_name,0700);
            echo "Permissions Changed";
        }else{
            echo "File Extension Is Not Txt";
        }
        }else{
        echo " This Is Directory And Only Files Allowed";
        }
        }
    echo change_permission("Elzero")."<br>";
    echo change_permission("Work.docx")."<br>";
    echo change_permission("Result.txt")."<br>";