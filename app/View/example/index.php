<!-- -->

<h1><?= $header ?></h1>
<p><?= $msg ?></p>

<!-- Example of different link variants -->
<ul>
    <li><a href="<?= $this->createLink('example/parameters/Hello/User/!') ?>">Parameters</a></li>
    <li><a href="<?= $this->getLink('form') ?>">Form</a></li>
    <li><a href="<?= $this->getLink('git') ?>">GitHub</a></li>
</ul>