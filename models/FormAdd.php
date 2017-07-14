<?php
	namespace app\models;
	use Yii;
	use yii\base\Model;
	
	class FormAdd extends Model
	{
		public $name, $type, $massa, $value, $status, $from, $to, $operation, $type_img_name, $name_img_name;
		
		public function rules(){
			return [
				// username and password are both required
				//[['type','massa','value', 'status', 'from', 'to', 'operation', 'name'], 'required', message => ''],
				[['massa','value', 'status', 'from', 'to', 'operation'], 'required', message => ''],
				// rememberMe must be a boolean value
				['type', 'default', message => ''],
				['type_img_name', 'default', message => ''],
				['name_img_name', 'default', message => ''],
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