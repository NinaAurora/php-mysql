<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h1> education </h1>
<hr>

    <?php foreach($vars['educations'] as $education) : ?>
        <div><?= $education->education_name, " ",  $education->start_year, "-", $education->end_year?></div>   
    <?php endforeach ?>

</div>

<?php require 'views/partials/footer.view.php' ?>