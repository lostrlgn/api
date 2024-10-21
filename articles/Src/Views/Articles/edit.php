<h1>Редактировани статьи</h1>
<?php if(!empty($error)): ?>
    <div style="background-color: red"><?= $error?></div>
    <?php endif; ?>
<form action="/articles/<?= $article->getId() ?>/edit" method="POST">
    <label for="name">Название статьи</label><br>
    <input type="text" name="name" id="name" value="<?= $_POST['name'] ?? $article->getName() ?>" size="50"><br>
    <br>
    <label for="text">Текст статьи</label><br>
    <textarea name="text" id="text" rows="10" cols="80"><?= $_POST['text'] ?? $article->getText() ?></textarea><br>
    <br>
    <input type="submit" value="Обновить">
</form>                 