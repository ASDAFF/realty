<?php
namespace App;
//namespace Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Bargain extends Model
{
    public static function getAll()
    {
        $bargains = Bargain::all();
        return $bargains;
    }
}