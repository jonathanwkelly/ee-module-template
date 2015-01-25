<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ee_module_template_upd
{
	public $version = '1.0';

	private $name = 'Ee_module_template';

	public function install()
	{
		ee()->db->insert(
			'modules', 
			array(
				'module_name' => $this->name,
				'module_version' => $this->version,
				'has_cp_backend' => 'y',
				'has_publish_fields' => 'n'
			)
		);

		return TRUE;
	}

	public function update($current = '')
	{
		return ($current != $this->version);
	}

	public function uninstall()
	{
		ee()->db->query(sprintf("DELETE FROM exp_modules WHERE module_name = '%s'", $this->name));
		
		return TRUE;
	}
}

/* End of File: upd.ee_module_template.php */
