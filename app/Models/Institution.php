<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class institution extends Sximo  {
	
	protected $table = 'institute';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT institute.* FROM institute  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE institute.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
