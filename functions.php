<?php

function check_login($con)
{
    if (isset($_SESSION['User_ID'])) {
        $ID = $_SESSION['User_ID'];
        $query = "select * from users where User_ID = '$ID' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $User_data = mysqli_fetch_assoc($result);
            return $User_data;
        }
        header("Location: register.php");
        die;
    }
}

function random_num($length)
{
    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);
    for ($index = 0; $index < $len; $index++) {
        $text .= rand(0, 9);
    }
    return $text;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */