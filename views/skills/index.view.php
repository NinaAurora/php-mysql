<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <?php foreach($vars['skills'] as $skill) : ?>
        <div> <?= $skill->skill_name, ": ",  $skill->skill_rating?> </div> 
    <?php endforeach ?>

</div>

<?php require 'views/partials/footer.view.php' ?>