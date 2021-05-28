<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <h1> Skills </h1>
    <hr>

    <div class="row justify-content-content">
        <div class="col-6">

            <?php foreach($vars['skills'] as $skill) : ?>
            <div> <?= $skill["skill_name"] ?> </div>
            <?php endforeach ?>

        </div>
        <div class="col-6 text-center">

            <?php foreach($vars['skills'] as $skill) : ?>
            <div class="stars"> <?= $skill["rating"] ?> </div>
            <?php endforeach ?>

        </div>
    </div>

</div>


<?php require 'views/partials/footer.view.php' ?>