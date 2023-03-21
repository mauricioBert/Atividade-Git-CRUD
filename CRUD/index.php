<?php 
include("controllers/funcoes.php");
include("views/blades/header.php"); 
?>
<div class="container bg-white rounded-2 mt-5 pt-3 pb-3 ps-3 pe-3">
<a href="views/cadastro.php"><button type="button" class="btn btn-success">Cadastrar</button></a>
<hr>
<form action="index.php" method="post">
    <input class="form-control border border-secondary" type="text" name="buscar" size="30" placeholder="Buscar">
    
</form>
<hr>
<?php Dados();?>
</div>



<?php
include("views/blades/footer.php")
?>
