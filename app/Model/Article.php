<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Article 
{
    public static function get_all() {
       return DB::table('article')->get();

    }

    public static function find_by_id($id) {
        return DB::table('article')->where('id', $id)->first();

    }

    public static function save($data) {
        unset($data['_token']);
        $data['slug'] = strtolower(str_replace(' ', '-', $data['title']));
        $data['created_at'] = $data['updated_at'] = now();
        return  DB::table('article')->insert($data);

    }

    public static function update($id, $data) {
       return DB::table('article')
            ->where('id', $id)
            ->update([
                'title' => $data['title'],
                'content' => $data['content'],
                'slug' => strtolower(str_replace(' ', '-', $data['title'])),
                'tags' => $data['tags'],
                'created_by' => $data['created_by'],
                'updated_at' => now()
            ]);

    }

    public static function delete($id) {
       return DB::table('article')->delete($id);

       
    }
}
