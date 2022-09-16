<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Genre extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Deposit_model');
        $this->load->library('form_validation');
    }

    public function deposit_expired()
    {
        $this->db->where('expired_at <=', date('Y-m-d H:i:s'));
		$deposits = $this->db->get('deposit')->result();

		foreach ($deposits as $data) {
			$deposit = $this->db->update($data->deposit_id, [
				'status' => 'expired',
				'note' => 'Deposit Kadaluarsa'
			]);
		}
    }

   

}

/* End of file Genre.php */
/* Location: ./application/controllers/Genre.php */
/* Please DO NOT modify this information : */
