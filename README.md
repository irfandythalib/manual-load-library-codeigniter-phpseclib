# Manually load library codeigniter phpseclib

# PHPseclib Integration for CodeIgniter (Manual Way, Without Using Composer)

🚀 This code is created to load the PHPseclib library in CodeIgniter. It can also be utilized with other libraries.

## Motivation
Developed due to the lack of SSH or CMD access, preventing the installation of libraries using Composer, so we have to install the library manually. As a workaround, we manually download the library from GitHub.

In this case, we are using PHPSeclib version 2: [PHPSeclib 2.0](https://github.com/phpseclib/phpseclib/tree/2.0)

## Steps

1. **Download Library**
   - Download the library from the provided link.

2. **Create Folder**
   - Create a folder named `third_party` within the `application` folder.

3. **Organize Library**
   - Create a folder named `phpseclib` within `third_party` and move the downloaded files there. The folder structure should be "/application/third_party/phpseclib/"

4. **Call Library in Controller**
   - In your Controller, include all the necessary library files as they are interdependent.

    ```php
    require_once APPPATH . 'third_party/phpseclib/phpseclib/Net/SSH2.php';
    require_once APPPATH . 'third_party/phpseclib/phpseclib/Crypt/Base.php';
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
    ```

5. **Utilize PHPSeclib in Controller**
   - Call the PHPSeclib class you want to use. In this example, we are using SFTP.

    ```php
    $sftp = new \phpseclib\Net\SFTP('https://yoursftpdestination');
    if ($sftp->login('yourusername', 'yourpassword')) {
        echo "Success connect using SFTP";
    }
    ```

Feel free to adapt the code based on your requirements. Happy coding! 🎉
