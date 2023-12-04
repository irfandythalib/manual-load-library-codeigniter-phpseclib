<?php

class Sftp_test extends CI_Controller {

    function __construct()
    {
        parent::__construct();

    }

	function index() {
		require_once APPPATH . 'third_party/phpseclib/phpseclib/Net/SSH2.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Base.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/RC4.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Rijndael.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Twofish.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Blowfish.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/DES.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/TripleDES.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Random.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Hash.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/RC2.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/AES.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Math/BigInteger.php';
        require_once APPPATH . 'third_party/phpseclib/phpseclib/Net/SFTP.php';

        $sftp = new \phpseclib\Net\SFTP('https://yoursftpdestination');
		if ($sftp->login('yourusername', 'yourpassword')) {
			echo "Success connect using SFTP";
		}
	}
}
?>
