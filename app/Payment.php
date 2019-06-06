<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Payment extends Model
    {
        protected $guarded = ['PaymentID'];

        protected $primaryKey = 'PaymentID';

        public function companies()
        {
            return $this->belongsTo('App\Company');
        }

        public $timestamps = false;
    }