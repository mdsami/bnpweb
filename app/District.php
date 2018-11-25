<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'district';

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
    protected $fillable = ['name', 'address','division_id','area_id','zone_id'];

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

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }

}
