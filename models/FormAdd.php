<?php
	namespace app\models;
	use Yii;
	use yii\base\Model;
	
	class FormAdd extends Model
	{
		public $name, $type, $massa, $value, $status, $from, $to, $operation;
		
		public function rules(){
			return [
				// username and password are both required
				[['type','massa','value', 'status', 'from', 'to', 'operation', 'name'], 'required', message => ''],
				// rememberMe must be a boolean value
				['type', 'default', message => ''],
				['name', 'default', message => ''],
				['value', 'default', message => ''],
				['massa', 'default', message => ''],
				['status', 'default', message => ''],
				['from', 'default', message => ''],
				['to', 'default', message => ''],
				['operation', 'default', message => ''],
				
			];
		}
		
	}
?>