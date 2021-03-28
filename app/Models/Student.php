<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     *  untuk melakukan mass asigment, kita harus mengisi fillable dan guarded
     *  di dalam model, fillable berarti column" pada table database yg
     *  boleh di isi, sedangkan guarded ialah column" pada table yg
     *  tidak boleh di isi
     */

    // protected $guarded  = ['nama', 'nim', 'email', 'jurusan'];
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}