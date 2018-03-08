<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    protected $table = 'phonebooks';
    
    protected $fillable = ['name', 'phone', 'email'];

    public function saveDetails($data){
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->save();
        return 1;
    }

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
