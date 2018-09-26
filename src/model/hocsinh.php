<?php

namespace Laraveldaily\Timezones;

use Illuminate\Database\Eloquent\Model;

class hocsinh extends Model
{
    protected $table = "hocsinhs";

    protected $fillable = ['hoten','toan','ly','hoa'];

    public $timestamps = false;
}
