<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);  
    }
    
    public function show (Post $post)
    {
        return view('posts/show')->with(['post'=>$post]);
    }
}
?>

<!--blade内で使う変数'posts'を生成。
//'posts'の中身にgetを使い、インスタンス化した$postを代入。-->
<!--blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。-->
<!--show関数の'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス-->
<!--Public function index(Post $post)によって、$postをPostクラス型として定義しています
まとめると、$postはPostクラスのインスタンス-->