<p><?= $msg ?></p>

<form action="<?= $this->getUrl() . 'index' ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <button type="submit">Senden</button>
</form>