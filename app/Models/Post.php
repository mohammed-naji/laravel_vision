<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'body'];// للسماح بهذه الحقول الدخول لقاعدة البيانات
    protected $guarded = []; // لمنع حقل معين من الدخول لقاعدة البيانات واذا تركت فارغة معناها السماح لجميع الحقول بالدخول
}
