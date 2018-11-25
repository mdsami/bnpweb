<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'division';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name' ];
    

    public function area()
    {
        return $this->hasMany('App\Area');
    }
    public function zone()
    {
        return $this->hasMany('App\zone');
    }
    public function district()
    {
        return $this->hasMany('App\District');
    }
    public function thana()
    {
        return $this->hasMany('App\Thana');
    }
    public function fari()
    {
        return $this->hasMany('App\Fari');
    }

}
