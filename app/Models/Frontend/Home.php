<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['heading1', 'heading2','description','image'];
    // public function getTitleAttribute($value) { return ucwords(strtolower($value)) ; }
    // public function getDescriptionAttribute($value) { return ucfirst(strtolower($value));} 
    // public static function boot()
    // {
        // parent::boot();
        // self::created(function ($model) {
            // $user_id = auth()->user()->getAuthIdentifier();
            // if (isset($user_id))) {
                // $data['user_id'] = $user_id;
                // $data['home_id'] = $model->id;
                // DB::table('home_users')->insert($data));
 }
