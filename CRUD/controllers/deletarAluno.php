<?php
include("../model/conexao.php");


mysqli_query($conexao,"DELETE FROM aluno WHERE codigo = ".$_GET["ida"]);

header("location:../index.php");

?>