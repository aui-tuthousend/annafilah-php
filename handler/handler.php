<?php

//prograaamm
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

//artikeeeelll

function getArtikel($con)
{
    $q = "SELECT * FROM articles";

    $articles =mysqli_query($con, $q);

    return $articles;
}

function viewArtikel($Con, $id){
    $q = "SELECT * FROM articles WHERE id = $id";

    $article =mysqli_query($Con, $q);

    return $article;
}

function getPost($con)
{
    $q = "SELECT * FROM posts";

    $posts =mysqli_query($con, $q);

    return $posts;
}

function viewPost($Con, $id){
    $q = "SELECT * FROM posts WHERE id = $id";

    $post =mysqli_query($Con, $q);

    return $post;
}