<?php

$people[] = "mike";
$people[] = "luke";
$people[] = "joe";
$people[] = "paul";
$people[] = "logan";
$people[] = "james";
$people[] = "arnald";
$people[] = "rock";
$people[] = "rocksy";

$q = $_REQUEST['q'];

$suggestions = "";

if($q !== "")
{
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestions ===""){
                $suggestions = $person;
            }else{
                $suggestions .= ", $person";
            }
        }
    }

}

echo $suggestions===""? "no suggestions": $suggestions;

?>