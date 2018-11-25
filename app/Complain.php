<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'complain';

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
    protected $fillable = ['phone', 'complain','thana_id','fari_id'];

    public function thana()
    {
        return $this->belongsTo('App\Thana');
    }
    public function fari()
    {
        return $this->belongsTo('App\Fari');
    }

}
