<?php

namespace App\Controller;

use PDO;

class CategoryClass extends ConnectionClass {
    public function save($name, $description) {
        $sqlInsert = "insert into categories (name, description) value(:name, :description)";
        $query = $this->connection->prepare($sqlInsert);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->execute();

    }

    public function get() {
        $sqlInsert = "select * from categories";
        $query = $this->connection->prepare($sqlInsert);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($result);
    }
}

?>