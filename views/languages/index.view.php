<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <?php foreach($vars['languages'] as $language) : ?>
        <div> <?= $language->language_name, ": ",  $language->language_level?> </div> 
    <?php endforeach ?>

</div>

<?php require 'views/partials/footer.view.php' ?>