<h1><?= $header ?></h1>

<p>getParameters() => Parameters as indexed array</p>

<ul>
    <?php foreach ($params1 as $key => $value) : ?>
        <li>[<?= $key ?>] => <?= $value ?></li>
    <?php endforeach ?>
</ul>

<p>getParameters(1) => Parameters as assiociative array <br>
    If the number of parameters is odd, the last parameter will be removed.
</p>

<ul>
    <?php foreach ($params2 as $key => $value) : ?>
        <li>[<?= $key ?>] => <?= $value ?></li>
    <?php endforeach ?>
</ul>

<p>Change the parameters in the URL and see what happens. Try it!</p>