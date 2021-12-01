<?php

namespace App\Controllers;

use App\Models\Post;


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

    public function addLike(){
        $postid = $this->request()->getValue("postid");
        if( $postid > 0){
            $post = Post::getOne($postid);
            $post->addLike();
        }
        $this->redirect("home");
    }

    public function upload(){



    }

    public function post(){

        return $this->html(
            []
        );

    }

    public function contact()
    {
        return $this->html(
            []
        );
    }
}