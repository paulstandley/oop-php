<?php 

  class User extends Dbh {

    public function getAllUsers() {
      $stmt = $this->connect()->query("SELECT * FROM users");
      while ($row = $stmt->fetch()) {
        echo $row['uid']."<br>";
      }
    }

    public function getUsersWithCountCheck() {
      $id = 1;
      $uid = "pielo2";
      $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id=? AND uid=?");
      $stmt->execute([$id, $uid]);
      if ($stmt->rowCount()) {
        while ($row = $stmt->fetch()) {
          $uid = $row['uid'];
        }
        return $uid;
      }
    }

  }

?>