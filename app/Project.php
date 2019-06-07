<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Project extends Model
    {
        protected $guarded = ['ProjectID'];

        protected $primaryKey = 'ProjectID';        

        public function companies()
        {
            return $this->belongsTo('App\Company', 'ProjectID');
        }
    
        public function tasks()
        {
            return $this->hasMany('App\Task', 'ProjectID');
        }
        
        public function project_detailes()
        {
            return $this->hasOne('App\ProjectDetail', 'ProjectDetailID');
        }    
    
        public $timestamps = false;
            
    }