<?php
include("../model/conexao.php");



mysqli_query($conexao, "UPDATE aluno SET nome='".$_POST["alunoNome"]."', cidade='".$_POST["alunoCidade"]."', sexo='".$_POST["alunoSexo"]."' WHERE codigo=".$_POST["alunoCodigo"] " ORDER BY"."'$varAlunoNome'"."ASC");

header("location:../index.php");
?>