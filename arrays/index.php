<?php

class Post

{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)

    {
        $this->title = $title;

        $this->author = $author;

        $this->published = $published;

    }


}

$posts = [

    new Post ('My First Post', 'LW', true),
    new Post ('My Second Post','LW', true),
    new Post ('My Third Post','PW', true),
    new Post ('My Fourth Post','JW', false)
];

// $unpublishedPosts = array_filter($posts, function ($post){
//     return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function ($post){
//     return  $post->published;
// });

// $modified = array_map(function ($post) {
//     return (array) $post;
// }, $posts);

// foreach ($posts as $post) {
//     $post->published = true;
// }

// $titles = array_column($posts, 'title');


$authors = array_column($posts, 'author', 'title');
var_dump($authors);