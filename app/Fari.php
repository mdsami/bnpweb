<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fari extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fari';

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
    protected $fillable = ['name',  'phone','oc', 'address','long','lat','division_id','area_id','zone_id','district_id','thana_id'];

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

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function thana()
    {
        return $this->belongsTo('App\Thana');
    }
}
