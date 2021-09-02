<?php

namespace App\Helpers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class BlogHelper
{

    public static function getCategoryId($parentId)
    {

        $obj = DB::table('categories')->select(['name'])->where('id', $parentId)->first();
        return isset($obj->name) ? $obj->name : '';
    }

public static function getArticleSlug($id)
    {

        $obj = DB::table('articles')->select('slug')->where('id', $id)->first();
print_r($obj);exit;
        return isset($obj->slug) ? $obj->slug : '';
    }

public static function getArticleName($id){
$obj = DB::table('articles')->select('name')->where('id', $id)->first();
        return isset($obj->name) ? $obj->name : '';
}

public static function getChildComments($parent_id){
    return  DB::table('comments')->where('parent_id', $parent_id)->get();

}

public static function  count_comments($id=0)
{

 $count =  DB::table('comments')->where(['parent_id'=>0,'article_id'=>13])->count();

return $count;
}
 }