<?php require 'header.php' ?>
<div class="container">
<h1>Atualizar registro</h1>
<?php foreach($update as $user): ?>
    <form method="POST">
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="name" class="form-control" value="<?php echo $user['name'] ?>" />
        </div>
        <div class="form-group">
            <label for="">Sobrenome:</label>
            <input type="text" name="surname" class="form-control" value="<?php echo $user['surname'] ?>" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="btnUpdate" value="Atualizar registro" />
            <a href="index.php" class="btn btn-warning">Voltar</a>
        </div>
    </form>
<?php endforeach; ?>
</div>
<?php require 'footer.php' ?>