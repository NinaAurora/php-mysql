<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <?php foreach($vars['users'] as $user) : ?>
        <div>Name: <?= $user->first_name, " ",  $user->last_name?> </div>
        <div>DOB: <?= $user->user_dob ?></div>
        <div>Location: <?= $user->user_location?></div>
        <div>Likes: <?= $user->user_likes?></div>
        <div>Dislikes: <?= $user->user_dislikes?></div>
    <?php endforeach ?>
    
   
       
    

    <!-- <?php foreach($vars['users'] as $user) : ?>
        <div><?= $user->first_name ?></div><div><?= $vars['foods']?></div>
        
    <?php endforeach ?> -->

</div>

<?php require 'views/partials/footer.view.php' ?>