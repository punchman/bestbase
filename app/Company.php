<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Company extends Model
    {
        protected $guarded = ['id'];

        protected $primaryKey = 'id';

        public function projects()
        {
            return $this->hasMany('App\Project');
        }

        public function payments()
        {
            return $this->hasMany('App\Payment');
        }

        protected $fillable = ['company_name', 'address1', 'address2', 'city', 'state', 'country'];

        // public $timestamps = false;
    }