<div class="main_content">
    <?php foreach($database as $album) { ?>
    <div class="song_box">
        <img src=<?php echo $album["poster"]; ?> alt="">
        <h2><?php echo $album["title"]; ?></h2>
        <p><?php echo $album["author"]; ?></p>
        <p><?php echo $album["year"]; ?></p>
    </div>
    <?php } ?>
</div>