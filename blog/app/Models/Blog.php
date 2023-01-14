<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['user_id','title','slug','description'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userName($id){
        return User::where('id', $id)->select('name')->first();
    }
}
