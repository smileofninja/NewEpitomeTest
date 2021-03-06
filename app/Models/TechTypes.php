<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechTypes extends Model
{
    //
    protected $table = 'tech_types';
    public $timestamps = true;
    protected $fillable = ['name'];

    public static function getAll() {
    	return self::all();
    }

    public static function get($id) {
    	return self::find($id);
    }

    public static function add($record) {
        return self::create($record);
    }

    public static function edit($id, $record) {
        $row = self::find($id);
        $row->name = $record['name'];
        return $row->save();
    }

    public static function del($id) {
        $row = self::find($id);
        return $row->delete();
    }

    public static function deleteAll() {
        return self::truncate();
    }
}
