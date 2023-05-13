<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use App\Models\Status;
use App\Models\Type;

class Track extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tracking',
        'code',
        'time',
        'type',
        'remark',
    ];

    public function status()
    {
        //to get description
        return $this->belongsTo(Status::class, 'code' , 'status_code');
    }

    public function typeData()
    {
        return $this->belongsTo(Type::class, 'type', 'code');
    }



}
