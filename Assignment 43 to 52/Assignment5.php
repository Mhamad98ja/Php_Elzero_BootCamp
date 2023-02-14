<?php
function check_status($a, $b, $c) {
    if(gettype($a)==="string" && gettype($b)==="integer" && gettype($c)==="boolean"){
            $case1="";
        if($c==true){
            $case1="Hello $a, Your Age Is $b, You Are Available For Hire<br>";
        }else{
            $case1="Hello $a, Your Age Is $b, You Are Not For Hire<br>";
        }
        return $case1;
    }
    if(gettype($a)==="integer"  && gettype($b)==="string" && gettype($c)==="boolean"){
        $case2="";
        if($c==true){
            $case2="Hello $b, Your Age Is $a, You Are Available For Hire<br>";
        }else{
            $case2="Hello $b, Your Age Is $a, You Are Not For Hire<br>";
        }
        return $case2;
    }
    if(gettype($a)==="boolean"  && gettype($b)==="integer" && gettype($c)==="string"){
        $case3="";
        if($a==true){
            $case3="Hello $c, Your Age Is $b, You Are Available For Hire<br>";
        }else{
            $case3="Hello $c, Your Age Is $b, You Are Not For Hire<br>";
        }
        return $case3;
    }
    if(gettype($a)==="boolean"  && gettype($b)==="string" && gettype($c)==="integer"){
        $case4="";
        if($a==true){
            $case4="Hello $b, Your Age Is $c, You Are Available For Hire<br>";
        }else{
            $case4="Hello $b, Your Age Is $c, You Are Not For Hire<br>";
        }
        return $case4;
    }
}
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"