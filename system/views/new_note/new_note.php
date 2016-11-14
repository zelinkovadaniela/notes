<div class="new_note">
    <form action="" method="post" >

        <label for="name">name:</label><br/>
        <input type="text" name="notes[name]" value="<?php echo htmlspecialchars($notes['name']); ?>" id="notes_name" />
        <br>
        <label for="technology">technology: </label><br/>
        <input type="text" name="notes[technology]" value="<?php echo htmlspecialchars($notes['technology']); ?>" id="technology" />
        <br>
        <label for="note">note: </label><br/>
        <textarea type="text" name="notes[note]" id="note"><?php echo htmlspecialchars($notes['note']); ?></textarea>
        <br>
        <input type="submit" value="Submit" name="submit_user_info" />

    </form>
</div>