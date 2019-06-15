<?php 

  class User extends Dbh {

    protected function getAllUsers() {

      $sql = "SELECT * FROM users";
      $result = $this->connect()->query($sql);
      $numRows = $result->num_rows;

      if($numRows > 0) {
        while($row = $results->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }

    }

  }

?>