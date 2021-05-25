<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h1> User info </h1>
<hr>

    <?php foreach($vars['users'] as $user) : ?>
        <div><?= $user->user_portrait ?></div>
        <div>Name: <?= $user->first_name, " ",  $user->last_name?> </div>
        <div>DOB: <?= $user->user_dob ?></div>
        <div>Location: <?= $user->user_location?></div>
        <div>Likes: <?= $user->user_likes?></div>
        <div>Dislikes: <?= $user->user_dislikes?></div>
        <hr><br>
    <?php endforeach ?>
    
   
       
    

    <!-- <?php foreach($vars['users'] as $user) : ?>
        <div><?= $user->first_name ?></div><div><?= $vars['foods']?></div>
        
    <?php endforeach ?> -->

</div>

<?php require 'views/partials/footer.view.php' ?>