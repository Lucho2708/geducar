<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTagValidateAtribute ($value)
    {
        $tag = Tag::where('name_tag','=',$value)->first();

        if ($tag===null){
            $tag = New Tag();
            $tag->name_tag = $value;
            $tag->save();
            return $tag;
        }else{
            return $tag;
        }
    }
}
