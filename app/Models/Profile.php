<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// 每个模型都需要继承 Eloquent Model
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // 当然也可以显性设置表名
    protected $table = 'profiles';

    use HasFactory;
}
