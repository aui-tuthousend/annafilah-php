<?php
function getProgram($Con){
    $q = "SELECT * FROM programs";

    $Programs =mysqli_query($Con, $q);

    return $Programs;
}

function viewProgram($Con, $id){
    $q = "SELECT * FROM programs WHERE id = $id";

    $Program =mysqli_query($Con, $q);

    return $Program;
}