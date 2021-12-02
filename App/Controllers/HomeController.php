<?php

namespace App\Controllers;

use App\Models\Post;
use App\Config\Configuration;


/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {
        $posts = Post::getAll();

        return $this->html(
            [
                'posts' => $posts
            ]);
    }

    public function addLike()
    {
        $postid = $this->request()->getValue("postid");
        if( $postid > 0){
            $post = Post::getOne($postid);
            $post->addLike();
        }
        $this->redirect("home");
    }

    public function upload()
    {
        if (isset($_FILES['file'])) {
            if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
                $name = date('Y-m-d-H-i-s_') . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], Configuration::UPLOAD_DIR . "$name");
                $title = $_POST['title'];
                $subtitle = $_POST['subtitle'];
                $content = $_POST['content'];
                $newPost = new Post();
                $newPost->setTitle($title);
                $newPost->setSubtitle($subtitle);
                $newPost->setImage($name);
                $newPost->setContent($content);
                $newPost->save();
            }
        }
        $this->redirect("home");

    }

    public function delete()
    {
        $postid = $this->request()->getValue("postid");
        if( $postid > 0){
            $post = Post::getOne($postid);
            $name = $post->getImage();
            unlink(Configuration::UPLOAD_DIR."$name");
            $post->delete();
        }
        $this->redirect("home");

    }

    public function post()
    {

        return $this->html(
            []
        );

    }
    public function manage()
    {
        $posts = Post::getAll();

        return $this->html(
            [
                'posts' => $posts
            ]);
    }

    public function contact()
    {
        return $this->html(
            []
        );
    }
}