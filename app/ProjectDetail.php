<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class ProjectDetail extends Model
    {
        protected $guarded = ['ProjectDetailID'];

        protected $primaryKey = 'ProjectDetailID';
        
        public function projects()
        {
            return $this->belongsTo('App\Project', 'ProjectDetailID');
        }
    
        public $timestamps = false;        
    }