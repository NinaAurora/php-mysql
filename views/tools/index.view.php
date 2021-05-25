<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <?php foreach($vars['tools'] as $tool) : ?>
        <div> <?= $tool->tool_name?> </div> 
    <?php endforeach ?>

</div>

<?php require 'views/partials/footer.view.php' ?>