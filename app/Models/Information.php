<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Information extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','label','content'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model){
            if ($model->isDirty('image') && ($model->getOriginal('image') !== 
            null)) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
    }

}
