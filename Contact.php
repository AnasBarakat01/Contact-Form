<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = ['name', 'email', 'subject', 'message','phone', 'purpose'];



    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "anas.barakat.1434@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }

}
