<?php

namespace app\models;

use mhFramework\core\Model;
use mhFramework\databases\mysqlConnection;

use \PDO;

class Post extends Model {

    public function create($title, $description)
    {
        $sql = "INSERT INTO posts (title, description, created_at, updated_at) VALUES (:title, :description, :created_at, :updated_at)";

        // mysqlConnection::dbConx()->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $req = mysqlConnection::dbConx()->prepare($sql);

        return $req->execute([
            'title' => $title,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function showPost($id)
    {
        $sql = "SELECT * FROM posts WHERE id =" . $id;
        $req = mysqlConnection::dbConx()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllPosts()
    {
        $sql = "SELECT * FROM posts";
        $req = mysqlConnection::dbConx()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    public function edit($id, $title, $description)
    {
        $sql = "UPDATE posts SET title = :title, description = :description , updated_at = :updated_at WHERE id = :id";

        $req = mysqlConnection::dbConx()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM posts WHERE id = ?';
        $req = mysqlConnection::dbConx()->prepare($sql);
        return $req->execute([$id]);
    }
}
?>