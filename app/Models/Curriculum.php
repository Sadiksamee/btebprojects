<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class curriculum extends Sximo  {
	
	protected $table = 'tbl_curriculum';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tbl_curriculum.* FROM tbl_curriculum  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tbl_curriculum.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
