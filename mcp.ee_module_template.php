<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ee_module_template_mcp
{
	private $base_url;
	private $data = array();

	public function __construct()
	{
		$this->base_url = BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=ee_module_template';

		// update breadcrumbs
		ee()->cp->set_breadcrumb($this->base_url.AMP.'method=index', ee()->lang->line('module_module_name'));

		// setup navigation
		ee()->cp->set_right_nav(array(
			'module_nav_home' => $this->base_url.AMP.'method=index',
			'module_nav_settings' => $this->base_url.AMP.'method=settings',
		));
	}

	public function index()
	{
		// Set page title
		ee()->cp->set_variable('cp_page_title', ee()->lang->line('module_page_title_index'));
		
		return ee()->load->view('index', $this->data, TRUE);
	}

	public function settings()
	{
		// Set page title
		ee()->cp->set_variable('cp_page_title', ee()->lang->line('module_page_title_settings'));
		
		return ee()->load->view('settings', $this->data, TRUE);
	}
}

/* End of File: mcp.ee_module_template.php */
