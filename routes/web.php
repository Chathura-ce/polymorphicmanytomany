<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    $post = Post::create(['name' => 'my first post']);

    $tag1 = Tag::find(1);


    $post->tags()->save($tag1);

    $video = Video::create(['name' => 'video.mkv']);


    $tag2 = Tag::find(2);

    $video->tags()->save($tag2);
});


Route::get('/read',function (){
   $post = Post::findOrFail(1);
    foreach ($post->tags as $tag) {
        echo $tag;
   }
});


Route::get('/update',function (){
    /*$post = Post::findOrFail(1);
    foreach ($post->tags as $tag) {
       return $tag->whereName('php')->update(['name'=>'updated name']);
    }*/

    $post = Post::findOrFail(1);

    $tag = Tag::find(3);

//    $post->tags()->save($tag);

//    $post->tags()->sync([2]);

});
