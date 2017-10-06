<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	protected $error = array();

	public function __construct()
	{
                parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('upload');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function upload_file()
	{
		/* My Settings */
		$config['upload_path'] = '/tmp';
		$config['allowed_types'] = 'tiff|jpg|png';
		$config['max_size'] = 2040;
		$this->upload->initialize($config);
		if ($this->check_upload_process('the_file')) //pass the name of the text field
		{
			echo 'Nai re!';
		} else {
			echo 'provlima!';
			var_dump($this->error);
		}
	}

public function test()
{
if( !$this->input->is_cli_request() ) {
       echo (system("tesseract /tmp/img1.jpg /tmp/test13 -l eng"));
    }

}
	private function check_upload_process($the_file)
	{
		if ( ! $this->upload->do_upload($the_file))
                {
                        $this->error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        return true;
                }
	}
}//end of class
