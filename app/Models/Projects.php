<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Log;

class Projects extends Model
{
    //
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = ['name', 'desc','duration','clients', 'outsourced', 'short_name'];

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
        foreach ($record as $key => $value) {
            $row->$key = $value; 
        }
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
