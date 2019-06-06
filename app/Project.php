<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Project extends Model
    {
        protected $guarded = ['ProjectID'];

        protected $primaryKey = 'ProjectID';        

        public function companies()
        {
            return $this->belongsTo('App\Company');
        }
    
        public function tasks()
        {
            return $this->hasMany('App\Task');
        }
        
        public function project_detailes()
        {
            return $this->hasMany('App\ProjectDetail');
        }    
    
        public $timestamps = false;
            
    }