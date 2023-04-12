<?php

$nome = $_REQUEST["nome"];
$email = filter_input(INPUT_POST, "email");

echo $nome. "<br>" .$email;