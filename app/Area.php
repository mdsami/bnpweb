<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'area';

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
    protected $fillable = ['name', 'address','division_id'];

    public function zone()
    {
        return $this->hasMany('App\Zone');
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
    public function division()
    {
        return $this->belongsTo('App\Division');
    }
}
