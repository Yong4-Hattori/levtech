<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //データ取得に関する変更はDBとやり取りを行うModelクラス(Post.php)を編集する
    public function getPaginateByLimit(int $limit_count=5)
    {
        //updated_atで降順に並べた後、limitで件数制限をかける
       return $this->orderby('updated_at','DESC')->paginate($limit_count);
        //limit：引数の件数分だけレコードを取得するメソッド
        
    }
}
