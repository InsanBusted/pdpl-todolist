<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    protected $table='todos';
    protected $primary_key='id';

    protected $fillable = ["user_id", "name","work","dueDate"]; 

    public function user()
{
    return $this->belongsTo(User::class);
}

}
