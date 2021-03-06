<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
        /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'zone';

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
    protected $fillable = ['name', 'address','division_id','area_id'];

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

    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
