<?php require 'header.php' ?>
<div class="container">
<h1>Criar novo registro</h1>
<form method="POST">
    <div class="form-group">
        <label for="">Nome:</label>
        <input type="text" name="name" class="form-control" placeholder="Insira seu nome... ">
    </div>
    <div class="form-group">
        <label for="">Sobrenome:</label>
        <input type="text" name="surname" class="form-control" placeholder="Insira seu sobrenome... ">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="btnCreate" value="Gravar registro" />
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>

</form>
</div>
<?php require 'footer.php' ?>