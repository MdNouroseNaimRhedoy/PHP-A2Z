<?php
//we can share post and comments 
class Post{
    // use traits
    use Sharable,Likable;

}
class Comments{
    //use traits
    use Sharable, Likable;
}
//create traits
trait Sharable{
    public function share(){
        printf("share to social media");
    }
}

trait Likable{
    public function like(){
        // logic of like
    }
}

$post = new Post();
//share method contains in traits but use it in post class
$post->share();

$comment = new Comments();
$comment->share();