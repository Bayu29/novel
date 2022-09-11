<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MidtransCallback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

	public function handle()
	{
		echo json_encode(['success'=> true]);
	}
}

