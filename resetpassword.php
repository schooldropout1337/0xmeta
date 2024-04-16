<?php

if ($_POST["password"] == $_POST["password_confirmation"]) {
    if ($_POST["userid"] == int($_SESSION["userid"])) {
        $user = $_POST["userid"];
        reset_password($user, $_POST["password"]);
    }
}

?>
