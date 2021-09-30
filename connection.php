<?php
    // Report all PHP errors (see changelog)
    error_reporting(E_ALL);
	$conn = mysqli_connect("localhost","root","OnScregvgt5^7uht5fy6!!","swoopdesk");

    mysqli_query("SET NAMES 'utf8'");
	mysqli_query('SET CHARACTER SET utf8');
	mysqli_set_charset('utf8', $conn);
	
	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$root_url = "https://onscreens.com/storage/uploads/";
	
	
	DEFINE("BASE_URL", "/");
	
	class  common_class{
		
		public function  fetch_price($price){
			
			if($price){
				$price =  json_decode($price,true);
				return array("type"=>$price['type'],"symbol"=>$price['symbol'],"price"=>$price['price']);
			}else{
				return NULL;
			}
			
		}
		
		
		public function fetch_images($images){
			$images_check = json_decode($images,true);
			if(is_array ($images_check)){
				$image_implode = implode(',',$images_check);
				$images = reset($images_check);
								
			}else{
				$images = $images;
				$image_implode = $images;
			}
			
			return array("image"=>$images,"image_implode"=>$image_implode);
		}

		public function encryptor($action, $string) {
				$output = false;

				$encrypt_method = "AES-256-CBC";
				//pls set your unique hashing key
				$secret_key = 'water';
				$secret_iv = 'water9690';
				$key = hash('sha256', $secret_key);
				$iv = substr(hash('sha256', $secret_iv), 0, 16);

				switch($action){
				case 'encode':
				{
					$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
					$output = rtrim(base64_encode($output),"=");
				}
					break;

				case 'decode':
				{
					$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
				}
					break;
				}
				return $output;
			}			
				
		}
	
	$object = new common_class();
?>
