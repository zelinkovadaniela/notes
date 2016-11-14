<?php

class edit_controller
{

    public function run()
    {

        $post_note = array(
            'name' => '',
            'technology' => '',
            'note' => '',
        );

        //get the note info from $_POST
        if(isset($_POST['notes']) && isset($_GET['id'])) {
            $post_note = array_merge($post_note, $_POST['notes']);
            $get_note = $_GET['id'];
        }

        $query = "
    UPDATE `notes` 
    SET `name` = :name, `technology`= :technology, `note`=:note
    WHERE `id` = :id
    ";


        $substitutions= array(
            ':name' => $post_note['name'],
            ':technology' => $post_note['technology'],
            ':note' => $post_note['note'],
            ':id' => $get_note['id']
        );
        $results = db::execute($query, $substitutions);


        //display and handle the note information form
        $new_note_view = new view('editpage/edit_note');

        //insert the customer info into the view
        $new_note_view->notes = $post_note;


        presenter::present($new_note_view);
    }
}