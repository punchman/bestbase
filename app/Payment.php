<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Payment extends Model
    {
        protected $guarded = ['id'];

        protected $primaryKey = 'id';

        public function companies()
        {
            return $this->belongsTo('App\Company', 'company_id', 'id');
        }

        // public $timestamps = false;
    }