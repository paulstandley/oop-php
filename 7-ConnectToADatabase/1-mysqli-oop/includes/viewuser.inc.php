<?php 
  class ViewUser extends User {

    public function showAllUsers() {

      $datas = $this->getAllUsers();
      var_dump($datas);
      foreach($datas as $data) {
        echo $data['uid']."<br>";
        echo $data['pwd']."<br>";
      }

    }

  }
?>