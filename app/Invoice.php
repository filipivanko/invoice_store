<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * @mixin \Eloquent
 */
class Invoice extends Model
{
    protected $table = 'invoices';
    protected $guarded = [];

    public function customer(){

        return $this->belongsTo(Customer::class);
    }

}
