<h1>Вход</h1>
<?php if(!empty($error)): ?>
    <div style="background-color: red"><?= $error?></div>
    <?php endif; ?>
<form action="/users/login" method="POST">

    <label>Email <input type="text" name="email" value="<?= $_POST['email'] ?? ''?>"></label>
    <br><br>         
    <label>Пароль <input type="password" name="password" value="<?= $_POST['password']?? '' ?>"></label>
    <br><br>
    <input type="submit" value="Войти">
</form>