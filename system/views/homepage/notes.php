<div id="notes">

    <ul>
        <?php foreach($notes as $note): ?>
            <h1><li class="name"><?php echo $note['name']; ?></li></h1>
            <li class="technology"><?php echo $note['technology']; ?></li>
            <li class="note"><?php echo $note['note']; ?></li>
            <!--link that deletes the note with the 'id'-->
            <a href="<?php echo url::to('edit'); ?>&id=<?php echo $note['id'];?>">edit this note</a>
            <a href="<?php echo url::to('delete'); ?>&id=<?php echo $note['id'];?>">delete this note</a>
        <?php endforeach; ?>
    </ul>


</div>
