<?php

class delete_controller
{

    public function run()
    {

        var_dump($_GET);

        $get_note = array(

            'id' => '',

        );
        //if we have the id in the get it will put the note with this id into variable $get_note
        if(isset($_GET['id'])) {
            $get_note['id'] = $_GET['id'];

        //query to delete from the table notes with id that we get from the get
        $query = "
    DELETE FROM `notes` 
    WHERE ((`id` = :notes_id))
    ";


        $substitutions= array(
            ':notes_id' => $get_note['id'],

        );
        $results = db::execute($query, $substitutions);
        }

        //display and handle the note information form
        $deleted = new view('delete/deleted');


        $deleted->get_note = $get_note;


        presenter::present($deleted);
    }


}