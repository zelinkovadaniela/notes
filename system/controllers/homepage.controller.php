<?php

class homepage_controller
{

  public function run()
  {


      $notes_id = request::get('notes_id', null);
    // TOP PRODUCTS

    $notes_view = new view('homepage/notes');
    $query = "
    SELECT `notes`.*
    FROM `notes`
    WHERE `notes`.`id`
    ORDER BY `notes`.`name` ASC 
    ";



    $results = db::execute($query);


    $notes_view->notes = $results;
    

    $delete_note = new view('delte/deleted');
      $post_note = array(

          'id' => '',

      );
      if(isset($_POST['notes'])) {
          $post_note = array_merge($post_note, $_POST['notes']);
      }

      $query = "
    DELETE FROM `notes` 
    WHERE ((`id` = :notes_id))
    ";


      $substitutions= array(
          ':notes_id' => $post_note['id'],

      );
      $results = db::execute($query, $substitutions);

      presenter::present($notes_view);
  }

}



