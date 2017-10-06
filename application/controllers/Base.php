<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	protected $error = array();
	protected $info = array();

	public function __construct()
	{
                parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('upload','session'));
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
		$config['encrypt_name'] = TRUE; //Encrypt the filename and not use the user uploaded one
		$upload_path =  $config['upload_path'];
		$this->upload->initialize($config);
		if ($this->check_upload_process('the_file')) //pass the name of the text field
		{
			$encrypted_filename = $this->info['success_data']['file_name'];
			$no_extension = $this->info['success_data']['raw_name'];//filename without the extension
			$this->read_image($encrypted_filename,$no_extension);
			$this->read_image_text($no_extension,$upload_path);
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
	private function read_image($filename,$no_extension)
	{
		if (!$this->input->is_cli_request())
		{
			system('tesseract /tmp/'.$filename.' /tmp/'.$no_extension.' -l eng'); //read the image using English
		}
	}

	private function read_image_text($no_extension,$upload_path)
	{
		$image_text = $no_extension.'.txt';
		$absolute_path = $upload_path.'/'.$image_text;
		$file_contents = file_get_contents($absolute_path);
		var_dump($file_contents);
	}

	private function check_upload_process($the_file)
	{
		if ( ! $this->upload->do_upload($the_file))
                {
                        $this->error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $this->info = array('success_data' => $this->upload->data());
                        return true;
                }
	}
}//end of class
