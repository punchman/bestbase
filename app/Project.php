<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Project extends Model
    {
        protected $guarded = ['id'];

        protected $primaryKey = 'id';        

        public function companies()
        {
            return $this->belongsTo('App\Company');
        }
    
        public function tasks()
        {
            return $this->hasMany('App\Task', 'project_id', 'id');
        }
        
        public function project_details()
        {
            return $this->hasMany('App\ProjectDetail');
        }    
    
        // public $timestamps = false;
            
    }