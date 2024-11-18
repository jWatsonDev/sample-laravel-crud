<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    # accept everything except what you specify in the array
    protected $guarded = [];
}
