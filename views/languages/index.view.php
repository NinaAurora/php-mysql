<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h1> languages </h1>
<hr>

    <?php foreach($vars['languages'] as $language) : ?>
        <div> <?= $language->language_name, ": ",  $language->language_level?> </div> 
    <?php endforeach ?>

</div>

<?php require 'views/partials/footer.view.php' ?>