<?php

class new_note_controller
{

    public function run()
    {

        var_dump($_POST);
        $post_note = array(
            'name' => '',
            'technology' => '',
            'note' => ''
        );

        //get the note info from $_POST
        if(isset($_POST['notes'])) {
            $post_note = array_merge($post_note, $_POST['notes']);
        }

        $query = "
    INSERT INTO `notes` (`name`, `technology`, `note`)
    VALUES (:name, :technology, :note)
    ";


        $substitutions= array(
            ':name' => $post_note['name'],
            ':technology' => $post_note['technology'],
            ':note' => $post_note['note']
        );
        $results = db::execute($query, $substitutions);


        //display and handle the note information form
        $new_note_view = new view('new_note/new_note');

        //insert the customer info into the view
        $new_note_view->notes = $post_note;



        presenter::present($new_note_view);
    }


}