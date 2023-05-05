<?php
require_once('../../../private/initialize.php');
// Handle form values sent by new.php

if(is_post_request()) {
  $page = [];
  $page['menu_name']= $_POST['menu_name']??'';
  $page['position']= $_POST['position']??'';
  $page['visible']= $_POST['visible']??'';

  $result = insert_page($page);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/staff/pages/show.php?id='. $new_id));
}


?>
