<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class upozilla extends Sximo  {
	
	protected $table = 'upazilas';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT upazilas.* FROM upazilas  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE upazilas.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
