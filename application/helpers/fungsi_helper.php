<?php
date_default_timezone_set('Asia/Jayapura');

function check_already_login()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('userid');
	if ($user_session) {
		redirect('dashboard');
	}
}

function is_login()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('userid');
	if (!$user_session) {
		redirect('auth');
	}
}

function check_admin()
{
	$ci = &get_instance();
	$ci->load->library('fungsi');
	if ($ci->fungsi->user_login()->level_id != 1) {
		redirect('dashboard_user');
	}
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

function cekGenre($novel_id,$genre_id)
{
	
	$ci = &get_instance();
	$query = $ci->db->query("SELECT * FROM novel_genre where novel_id ='$novel_id' and genre_id ='$genre_id'");
	$jml = $query->num_rows();
	if($jml > 0){
		return "checked";
	}
}

function check_login_member()
{
	$ci = &get_instance();
	$user_session = $ci->session->userdata('user');

	if (!$user_session) {
		redirect('/web/login');
	}
	
}

function is_login_member(){
	$ci = &get_instance();
	$user_session = $ci->session->userdata('user');

	return $user_session;
}

function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
	return $randomString;
}

function genre_check($genre, $genre_id) 
{
	foreach ($genre as $i => $data_genre) {
		if ($data_genre == $genre_id) {
			return true;
		} else {
			return false;
		}
	}
}

function time_elapsed_string($datetime, $full = false) 
{
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;

	$string = array(
		'y' => 'year',
		'm' => 'month',
		'w' => 'week',
		'd' => 'day',
		'h' => 'hour',
		'i' => 'minute',
		's' => 'second',
	);
	foreach ($string as $k => &$v) {
		if ($diff->$k) {
			$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		} else {
			unset($string[$k]);
		}
	}

	if (!$full) $string = array_slice($string, 0, 1);
	return $string ? implode(', ', $string) . ' ago' : 'just now';
}
