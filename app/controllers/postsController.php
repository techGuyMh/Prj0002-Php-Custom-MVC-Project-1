<?php

use app\models\Post;
use mhFramework\core\Controller;

class postsController extends Controller {

    function index() {

        $posts = new Post();

        $d['posts'] = $posts->showAllPosts();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"])) {

            $post= new Post();

            if ($post->create($_POST["title"], $_POST["description"]))
            {
               header("Location: " . WEBROOT . "posts/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $post= new Post();

        $d["post"] = $post->showPost($id);

        if (isset($_POST["title"]))
        {
            if ($post->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "posts/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'app/models/Post.php');

        $post = new Post();
        if ($post->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
    }
}
?>