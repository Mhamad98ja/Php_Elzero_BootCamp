<?php
$filterIdNameArray=[];
$filterIdIndexArray=[];
foreach(filter_list() as $id){
    array_push($filterIdIndexArray,filter_id($id)) ;
    array_push($filterIdNameArray,$id);
}
echo "<pre>";
print_r(array_combine($filterIdIndexArray,$filterIdNameArray));
echo "</pre>";