<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Company extends Model
    {
        protected $guarded = ['CompanyID'];

        protected $primaryKey = 'CompanyID';

        public function projects()
        {
            return $this->hasMany('App\Project', 'CompanyID');
        }
    
        public function payments()
        {
            return $this->hasMany('App\Payment', 'CompanyID');
        }    
    
        public $timestamps = false;        
    }