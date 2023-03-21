
<?php include("blades/header.php") ?>
<?php include("../model/conexao.php") ?>
    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>
    <div class="container border rounded mt-5 bg-white">
        <form action="../controllers/atualizarAluno.php" method="post">
            <div class="row mt-3">
                <div class="col">
                    <label class="form-label">Nome</label>
                    <input class="form-control border border-secondary" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
                    
                    <input class="form-control" type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
                </div>
                <div class="col">
                    <label class="form-label">Cidade</label>
                    <input class="form-control border border-secondary" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
                </div>
                
            </div>
                <input class="form-check-input border border-secondary" type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>>
                <label class="radio-inline">Masculino</label>
                <br>
                <input class="form-check-input border border-secondary" type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>>
                <label class="radio-inline">Feminino</label>
                <br>
                <input class="mt-2 mb-2 btn btn-success " type="submit" value="Atualizar">
        </form>
    </div>
    <?php } ?>

    <?php include("blades/footer.php") ?>