<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class subject extends Sximo  {
	
	protected $table = 'subject';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT subject.* FROM subject  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE subject.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
