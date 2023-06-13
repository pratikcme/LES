<?php

class Vendors_model extends My_model
{

	public function getVendors($vendor_id = '')
	{
		if ($vendor_id != '') {
			$data['where'] = ['id' => $vendor_id];
		}

		$data['table'] = ADMIN;
		$data['select'] = ['*'];
		$data['order'] = 'id desc';
		return $this->selectRecords($data);
	}


	public function add($postData)
	{
		// dd($postData);
		$folder_name = $postData['name']; //shopname
		$folder_name = preg_replace('/\s+/', '', $folder_name);
		$con = true;
		if (isset($postData['database']) && $postData['database'] == '1') {
			// $con = $this->load->database('db1', TRUE);
			// $path = FCPATH."/public/images/".$folder_name;
			$uploadpath = FCPATH . 'public/client_logo/';
			$rootDirectory = 'repositories/Production/';
		} elseif (isset($postData['database']) && $postData['database'] == '0') {
			// $con = $this->load->database('db2', TRUE);
			// $path = FCPATH."public/images/".$folder_name;
			$uploadpath = FCPATH . 'public/client_logo/';
			$rootDirectory = 'repositories/stagging/';
			// $rootDirectory = 'public_html/les-theme/';
		} elseif (isset($postData['database']) && $postData['database'] == '2') {
			$con = true;

			$uploadpath = FCPATH . 'public/client_logo/';
			$rootDirectory = '/public_html/les_development/';
		} else {
			$con = true;
			// $path = base_url()."public/images/".$folder_name;
			$uploadpath = FCPATH . 'public/client_logo/';
			$rootDirectory = '';
		}
		if (!$con) {
			echo 'not connected';
			die();
		}
		$path = FCPATH . 'public/images/' . $folder_name;
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}
		$folder_array = ['banner_promotion', 'banner_promotion_thumb', 'category', 'category_thumb', 'delivery_profile', 'product', 'product_image', 'product_image_thumb', 'product_thumb', 'vendor_logo_image', 'vendor_shop', 'web_banners', 'web_banners_thumb'];

		foreach ($folder_array as $key => $value) {
			$new_path = $path . '/' . $value;
			if (!file_exists($new_path)) {
				mkdir($new_path, 0777, true);
			}
		}
		// echo '1' ;die;
		$image = '';
		if (isset($_FILES) && $_FILES['image']['error'] == 0) {
			$file = upload_single_image($_FILES, 'web_logo', $uploadpath);
			$image = $file['data']['file_name'];
		}

		$server_name = $postData['domain_name'];
		if ($postData['domain_type'] == '1') { // 1 for subDomain
			$subDomain = $postData['domain_name'];
			$rootDomain = "launchestore.com";
			$server_name = $server_name . ".launchestore.com";
			$branchEmail = 'branch1@' . $postData['domain_name'] . '.com';
		} else {
			$rootDomain = $postData['domain_name'];
			$subDomain = $postData['domain_name'];
			$branchEmail = 'branch1@' . $postData['domain_name'];
		}
		$domain_name = "https://" . $server_name . '/';
		// $domaiName = $this->create_domain($subDomain,$rootDomain,$rootDirectory);
		// dd($domaiName);
		// $server_name = str_replace("http://","",$server_name);
		// $server_name = str_replace("https://","",$server_name);
		$array = array(
			'webLogo' => $image,
			'server_name' => $server_name,
			'type' => $postData['store_type'],
			'password' => md5($postData['password']),
			'login_type' => $postData['login_type'],
			'name' => $postData['ownername'],
			'img_folder' => $folder_name,
			'approved_branch' => '1',
			'webTitle' => $postData['name'],
			'type' => '1',
			'android_version' => '1.0.0',
			'ios_version' => '1.0.0',
			'android_isforce' => '0',
			'ios_isforce' => '0',
			'status' => '1',
			'phone_no' => $postData['mobile_number'],
			'email' => strtolower($postData['email']),
			'dt_added' => strtotime(date('Y-m-d H:i:s')),
			'dt_updated' => strtotime(date('Y-m-d H:i:s')),
			'locality' => $postData['locality'],
			'language_support' => $postData['language_support'],
			'theme_name' =>  $postData['theme_name'],
		);

		$lastInsertedVendor_id = $this->insertData(ADMIN, $array);
		// $lastInsertedVendor_id = '1';
		$branch = [
			'vendor_id' 		=> $lastInsertedVendor_id,
			'image' 			=> $image,
			'domain_name'		=> $domain_name,
			'store_type'		=> $postData['store_type'],
			'location' 			=> $postData['location'],
			'latitude' 			=> $postData['latitude'],
			'longitude' 		=> $postData['longitude'],
			'name' 				=> $postData['name'],
			'owner_name' 		=> $postData['ownername'],
			'address' 			=> $postData['location'],
			'email' 			=> $branchEmail,
			'password' 			=> md5(123456789), // default password for branch 
			'phone_no' 			=> $postData['mobile_number'],
			'status' 			=> '1',
			'subscription_plan' => '1200',
			'active_date'   	=> date('Y-m-d H:i:s'),
			'inactive_date' 	=> date('Y-m-d H:i:s'),
			'dt_added' 	 		=> date('Y-m-d H:i:s'),
			'dt_updated' 		=> date('Y-m-d H:i:s'),
		];
		// dd($branch);
		$lastInsertedBranch_id = $this->insertData(TABLE_BRANCH, $branch);
		$time_slot = [
			'vendor_id'  => $lastInsertedVendor_id,
			'start_time' => '10:00 AM',
			'end_time' 	 => '08:30 PM',
			'status' 	 => '1',
			'order_limit' => '0',
			'dt_added'   => strtotime(date('Y-m-d H:i:s')),
			'dt_updated' => strtotime(date('Y-m-d H:i:s')),
		];
		$this->insertData(TABLE_TIME_SLOT, $time_slot);

		$delivery_charge = array(
			'vendor_id'   => $lastInsertedVendor_id,
			'start_range' => '0',
			'end_range'   => '50',
			'price' 	  => '40',
			'dt_updated'  => date('Y-m-d H:i:s'),
			'dt_added'    => date('Y-m-d H:i:s')
		);
		$this->insertData('delivery_charge', $delivery_charge);

		$package = array(
			'vendor_id'  => $lastInsertedVendor_id,
			'package'    =>  'TestPackage',
			'dt_created' =>  date('Y-m-d H:i:s'),
			'dt_updated' =>  date('Y-m-d H:i:s'),
		);
		$lastPackageId = $this->insertData('package', $package);

		$weight = array(
			'vendor_id'   => $lastInsertedVendor_id,
			'name' => 'kg',
			'status' => '1',
			'dt_updated'  => strtotime(date('Y-m-d H:i:s')),
			'dt_added'    => strtotime(date('Y-m-d H:i:s'))
		);
		$lastWeightId = $this->insertData('weight', $weight);

		$fire_base_keys = array(
			'vendor_id' => $lastInsertedVendor_id,
			'staff_firebase_key' => 'AAAAYmVu0RM:APA91bGMSKZnWRlSZrDilKghySf-ywPbiyRgT5C0Gnfa4-TQRI-Bz7-RiKL6FbL632rbX7mNIszlDnJ1dAogf4GFOBaSRAi5NcxnRlOdXbAxhDVoVOjXiqfICuHPCpnlGysK4_Ygitx9',
			'delivery_firebase_key' => 'AAAADd08Ixg:APA91bHiOyFrukeepGZmHSbLAX3F9UFf7XnAg8lejb3XUa_AkU31PJMb0QW3Ys1BSHs0LKHcXr6r85QjkQPWd7lEgtGBPBD2euCzhLwEDPgz01CE65lzDisNqbKV2-adX0xKBGfuKiRJ',
			'staff_bandle_id' => 'com.cme.launchestorestaff',
			'delivery_bandle_id' => 'com.cme.launchestoredelivery',
			'firebase_url' => 'https://launchestoredelivery-default-rtdb.firebaseio.com/',
			'firebase_token' => 'XylZHjphOd9Ezqor5zVGITOjvI5EOCkO6Hi6kwsT',
			'firebase_node' => 'LauncheStoreDelivery',
			'team_id' => 'H4G2PA6K4T',
			'key_id' => 'QUHR7V9B5Z',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		);
		$this->insertData('firebase', $fire_base_keys);
		$i = 4;
		$default = ['100', '10', 'Rs', '1200'];
		for ($i = 1; $i <= 4; $i++) {
			$set_default = array('vendor_id' => $lastInsertedVendor_id, 'value' => $default[$i - 1], 'request_id' => $i);
			$this->insertData('set_default', $set_default);
		}
		$this->testDataEntry($lastInsertedBranch_id, $lastWeightId, $lastPackageId);
		if ($rootDirectory != '') {
			if ($postData['domain_type'] == '1') {
				$domaiName = $this->create_subdomain($subDomain, $rootDomain, $rootDirectory);
			} else {
				$domaiName = $this->create_domain($subDomain, $rootDomain, $rootDirectory);
			}
			// $domaiName = 'https//:development.launchestore.com';
			$this->sendMail(strtolower($postData['email']), $domaiName, $postData['password'], $branchEmail);
		}
	}

	function create_domain($domainName, $rootDomain, $rootDirectory)
	{
		// Replace these variables with your own cPanel and domain information
		$cpanelUser = 'a1630btr';
		$cpanelPass = 'PuO+-UZ7+Mor';
		// $domainName = 'your-domain.com';
		$subDomain = ''; // Set this to null if creating an add-on domain
		$docRoot = $rootDirectory; // Set this to the document root for the domain
		$email = 'launchestore@gmail.com';
		$quota = 100; // Set this to the disk space quota for the domain in MB
		$bandwidth = 1000; // Set this to the bandwidth quota for the domain in MB

		// Set up the API request
		$buildRequest = "/json-api/cpanel?cpanel_jsonapi_user=$cpanelUser&cpanel_jsonapi_apiversion=2&cpanel_jsonapi_module=SubDomain&cpanel_jsonapi_func=addsubdomain&domain=$subDomain.$domainName&rootdomain=$domainName&dir=$docRoot&disallowdot=1&email=$email&quota=$quota&bwlimit=$bandwidth";
		// dd($buildRequest);

		$openSocket = fsockopen('localhost', 2082);
		if (!$openSocket) {
			echo "Unable to open socket to cPanel API.";
			exit;
		}


		$authString = $cpanelUser . ':' . $cpanelPass;
		$authPass = base64_encode($authString);
		$buildHeaders = "POST " . $buildRequest . "\r\n";
		$buildHeaders .= "HTTP/1.0\r\n";
		$buildHeaders .= "Host:localhost\r\n";
		$buildHeaders .= "Authorization: Basic " . $authPass . "\r\n";
		$buildHeaders .= "\r\n";
		fputs($openSocket, $buildHeaders);
		while (!feof($openSocket)) {
			fgets($openSocket, 128);
		}
		fclose($openSocket);
		$newDomain = false;
		if ($domainName != $rootDomain) {
			$newDomain = "https://" . $domainName . "." . $rootDomain . "/";
		} else {
			$newDomain = "https://" . $domainName . "/";
		}
		return $newDomain;
		echo "Subdomain $subDomain.$domainName has been created!";
	}

	// function create_domain_($domainName,$rootDomain,$rootDirectory) {
	// 	$cpanelUser = 'a1630btr';
	// 	$cpanelPassword = 'PuO+-UZ7+Mor';
	// // Set up the API request
	// 	$apiUrl = 'https://' . $rootDomain . ':2082/json-api/cpanel?cpanel_jsonapi_user=' . $cpanelUser . '&cpanel_jsonapi_apiversion=2';
	// 	$apiAuth = ['Authorization: Basic ' . base64_encode($cpanelUser . ':' . $cpanelPassword)];
	// 	$apiData = [
	// 		'cpanel_jsonapi_module' => 'AddonDomain',
	// 		'cpanel_jsonapi_func' => 'addaddondomain',
	// 		'newdomain' => $domainName,
	// 		'dir' => $rootDirectory
	// 	];

	// // Make the API request
	// 	$ch = curl_init();
	// 	curl_setopt($ch, CURLOPT_URL, $apiUrl);
	// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $apiAuth);
	// 	curl_setopt($ch, CURLOPT_POST, 1);
	// 	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($apiData));
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// 	$response = curl_exec($ch);

	// 	curl_close($ch);

	// // Process the API response
	// 	$result = json_decode($response, true);
	// 	dd($result);
	// 	if ($result['status'] == 1) {
	//     // Domain creation successful
	// 		$newDomain = "https://" . $domainName;
	// 		return $newDomain;
	// 	} else {
	//     // Domain creation failed
	// 		return false;
	// 	}
	// }

	public function testDataEntry($branch_id, $weight_id, $package_id)
	{
		$data['table'] = TABLE_CATEGORY;
		$category = [
			'branch_id' => $branch_id,
			'name' 		=> "testCategory",
			'image'		=> "defualt.jpg",
			'status'	=> '1',
			'dt_added'  => strtotime(DATE_TIME),
			'dt_updated'  => strtotime(DATE_TIME),
		];
		$data['insert'] = $category;
		$lastCategory_id = $this->insertRecord($data);
		unset($data);
		$subCategory = [
			'branch_id' => $branch_id,
			'category_id' => $lastCategory_id,
			'name' 		=> "testSubCategory",
			'status'	=> '1',
			'dt_added'  => strtotime(DATE_TIME),
			'dt_updated'  => strtotime(DATE_TIME),
		];
		$data['insert'] = $subCategory;
		$data['table'] = TABLE_SUBCATEGORY;
		$lastSubCategory = $this->insertRecord($data);
		unset($data);
		$brand = [
			'branch_id' => $branch_id,
			'category_id' => $lastCategory_id,
			'name' 		=> "testSubCategory",
			'status'	=> '1',
			'dt_added'  => strtotime(DATE_TIME),
			'dt_updated'  => strtotime(DATE_TIME),
		];
		$data['insert'] = $brand;
		$data['table'] = TABLE_BRAND;
		$lastBrand_id = $this->insertRecord($data);
		unset($data);
		$product = [
			'branch_id' => $branch_id,
			'category_id' => $lastCategory_id,
			'subcategory_id' => $lastSubCategory,
			'brand_id' => $lastBrand_id,
			'name' 	=> "testProduct",
			'about' 	=> "about",
			'content' 	=> "content",
			'gst' 		=> 0,
			'status'	=> '1',
			'dt_added'  => strtotime(DATE_TIME),
			'dt_updated'  => strtotime(DATE_TIME),
		];

		$data['insert'] = $product;
		$data['table'] = TABLE_PRODUCT;
		$lastProduct_id = $this->insertRecord($data);
		unset($data);
		$product_weight = [
			'branch_id' => $branch_id,
			'product_id' => $lastProduct_id,
			'weight_id' => $weight_id,
			'package' => $package_id,
			'weight_no' => '1',
			'purchase_price' => '200',
			'price' => '100',
			'quantity' => 10,
			'max_order_qty' => 2,
			'discount_per' => 0,
			'discount_price' => 0,
			'without_gst_price' => 100,

			'status'	=> '1',
			'dt_added'  => strtotime(DATE_TIME),
			'dt_updated'  => strtotime(DATE_TIME),
		];
		$data['insert'] = $product_weight;
		$data['table'] = TABLE_PRODUCT_WEIGHT;
		$lastProductWeightId = $this->insertRecord($data);
		unset($data);
		$product_weight_image = [
			'branch_id' => $branch_id,
			'product_id' => $lastProduct_id,
			'product_variant_id' => $lastProductWeightId,
			'image' 		=> 'default.png',
			'status'	=> '1',
			'dt_added'  => strtotime(DATE_TIME),
			'dt_updated'  => strtotime(DATE_TIME),
			'image_order' => 0
		];
		$data['insert'] = $product_weight_image;
		$data['table'] = TABLE_PRODUCT_IMAGE;
		$this->insertRecord($data);
		unset($data);
		return true;
	}

	function sendMail($email, $domaim_name = '', $vendor_password, $branchEmail)
	{

		$data['to'] = $email;
		$data['subject'] = "Welcome To Launchestore";
		$message = "<b>Congratulation we successfully registered Your domain : " . $domaim_name . " </b><br>";
		$message .= "<p>We will take 15 to 30 minute to setup your site on launchestore</p>";
		$message .= "<p>Admin login url : " . $domaim_name . "admin" . "</p>";
		$message .= "<p>Vendor username/email : " . $email . "</p>";
		$message .= "<p>Your default password for vendor login : " . $vendor_password . "</p>";
		$message .= "<p>Branch username/email : " . $branchEmail . "</p>";
		$message .= "<p>Your default password for Branch login : 123456789 </p>";;
		$data['message'] = $message;
		return sendMailSMTP($data, 'launchEstore');
	}
	public function insertData($table, $inserData)
	{
		$data['table'] = $table;
		$data['insert'] = $inserData;
		return $this->insertRecord($data);
	}


	function create_subdomain($subDomain, $rootDomain, $rootDirectory)
	{
		// exit('its sub domain');
		if ($rootDirectory == '') {
			return true;
		}

		$cPanelUser = 'a1630btr';
		$cPanelPass = 'PuO+-UZ7+Mor';
		// if($domain_type == '1'){
		$buildRequest = "/frontend/paper_lantern/subdomain/doadddomain.html?domain=" . $subDomain . "&rootdomain=" . $rootDomain . "&dir=" . $rootDirectory;
		// }
		// else{
		// 	$buildRequest = "/frontend/paper_lantern/addon/doadddomain.html";
		// 	// domain=" . $subDomain . "&subdomain=" . $rootDomain."&dir=".$rootDirectory;
		// }
		// dd($buildRequest);
		$openSocket = fsockopen($rootDomain, 2082);
		if (!$openSocket) {
			echo  "Socket error";
			exit();
		} else {
			echo  "connected";
		}

		$authString = $cPanelUser . ":" . $cPanelPass;
		$authPass = base64_encode($authString);
		$buildHeaders = "GET " . $buildRequest . "\r\n";
		$buildHeaders .= "HTTP/1.0\r\n";
		$buildHeaders .= "Host:localhost\r\n";
		$buildHeaders .= "Authorization: Basic " . $authPass . "\r\n";
		$buildHeaders .= "\r\n";
		fputs($openSocket, $buildHeaders);
		while (!feof($openSocket)) {
			fgets($openSocket, 128);
		}
		fclose($openSocket);
		if ($subDomain != $rootDomain) {
			$newDomain = "https://" . $subDomain . "." . $rootDomain . "/";
		} else {
			$newDomain = "https://" . $subDomain . "/";
		}
		return $newDomain;
		return true;
		// return "Created subdomain $newDomain";

	}


	public function change_status($vendor_id)
	{
		$id = $this->utility->safe_b64decode($vendor_id);
		$data['table'] = ADMIN;
		$data['select'] = ['*'];
		$data['where'] = ['id' => $id];
		$record = $this->selectRecords($data);
		// dd($record);
		$status = '';
		if (!empty($record)) {
			if ($record[0]->status == '1') {
				$status = '0';
			} else {
				$status = '1';
			}
		}
		unset($data);
		$data['table'] = ADMIN;
		$data['where'] = ['id' => $id];
		$data['update'] = ['status' => $status];
		return $this->updateRecords($data);
	}

	public function updateVendors($vendor_id, $postData)
	{
		$updateArray = [
			'email'			 		 =>	$postData['email'],
			'approved_branch'		 =>	$postData['approved'],
			'store_type'	 		 => $postData['store_type'],
			'login_type'	 		 =>	$postData['login_type'], // 0 => login with email ; 1=> login with mobile
			'webTitle'		 		 =>	$postData['webTitle'],
			'android_version'		 =>	$postData['android_version'],
			'ios_version'	 		 =>	$postData['ios_version'],
			'android_isforce'		 =>	$postData['android_isforce'],
			'ios_isforce'	 		 =>	$postData['ios_isforce'],
			'display_price_with_gst' =>	$postData['display_price_with_gst'],
			'locality'				 => $postData['locality'],
			'language_support' 		 => $postData['language_support'],
			'dt_updated'			 => strtotime(DATE_TIME),
			'theme_name' => $postData['theme_name']
		];
		$data['table'] = ADMIN;
		$data['update'] = $updateArray;
		$data['where'] = ['id' => $vendor_id];
		return $this->updateRecords($data);
		lq();
	}

	// Dk added
	public function updateVersionLogs($vendor_id, $postData)
	{
		$data['insert'] =  [
			'which_vendor'           => $vendor_id,
			'android_version'		 =>	$postData['android_version'],
			'ios_version'	 		 =>	$postData['ios_version'],
			'android_isforce'		 =>	$postData['android_isforce'],
			'ios_isforce'	 		 =>	$postData['ios_isforce'],
			'dt_added' => DATE_TIME,
			'dt_updated' => DATE_TIME,
		];
		$data['table'] = TABLE_UPDATE_VERSION_LOGS;
		$this->insertRecord($data);
	}
	// 

	public function checkDomainExist($postData)
	{
		$DomainName = trim($postData['domain_name']);
		$domain_type = $postData['domain_type'];
		$con = true;
		if (isset($postData['domain_type']) && $postData['domain_type'] == 1) {
			$domain_name = $DomainName . '.launchestore.com';
		} else {
			$domain_name = $DomainName;
		}
		if (isset($postData['database']) && $postData['database'] == '1') {
			// $con = $this->load->database('db1', TRUE);
			$con->select('*');
			$con->where(['server_name' => $domain_name]);
			$query = $con->get('vendor');
			$return = $query->result();
		} elseif (isset($postData['database']) && $postData['database'] == '0') {
			// $con = $this->load->database('db2', TRUE);
			$con = $this->load->database('default', TRUE);
			$con->select('*');
			$con->where(['server_name' => $domain_name]);
			$query = $con->get('vendor');
			$return = $query->result();
			return  count($return);
		} elseif (isset($postData['database']) && $postData['database'] == '2') {
			// $con = true;
			$con = $this->load->database('default', TRUE);
			$con->select('*');
			$con->where(['server_name' => $domain_name]);
			$query = $con->get('vendor');
			$return = $query->result();
		} else {
			// $con = true;
			$con = $this->load->database('default', TRUE);
			$con->select('*');
			$con->where(['server_name' => $domain_name]);
			$query = $con->get('vendor');
			$return = $query->result();
		}
		// lq();
		if (!$con) {
			echo 'not connected';
			die();
		}

		return  count($return);
	}

	public function checkEmailExist($postData)
	{
		$con = true;
		if (isset($postData['database']) && $postData['database'] == '1') {
			// $con = $this->load->database('db1', TRUE);
			$con->select('*');
			$con->where(['email' => $postData['email']]);
			$query = $con->get('vendor');
			$return = $query->result();
		} elseif (isset($postData['database']) && $postData['database'] == '0') {
			// $con = $this->load->database('db2', TRUE);
			$con = $this->load->database('default', TRUE);
			$con->select('*');
			$con->where(['email' => $postData['email']]);
			$query = $con->get('vendor');
			$return = $query->result();
			return  count($return);
		} elseif (isset($postData['database']) && $postData['database'] == '2') {
			// $con = true;
			$con = $this->load->database('default', TRUE);
			$con->select('*');
			$con->where(['email' => $postData['email']]);
			$query = $con->get('vendor');
			$return = $query->result();
		} else {
			// $con = true;
			$con = $this->load->database('default', TRUE);
			$con->select('*');
			$con->where(['email' => $postData['email']]);
			$query = $con->get('vendor');
			$return = $query->result();
		}
		if (!$con) {
			echo 'not connected';
			die();
		}
		return  count($return);
		$data['table'] = ADMIN;
		$data['select'] = ['*'];
		$data['where'] = ['email' => $postData['email']];
		return $this->countRecords($data);
	}

	public function appVersionUpdate($postData)
	{
		$postData = [
			'android_version' =>	$postData['android_version'],
			'ios_version' =>	$postData['ios_version'],
			'android_isforce' =>	$postData['android_isforce'],
			'ios_isforce' =>	$postData['ios_isforce']
		];

		$data['table'] = ADMIN;
		$data['update'] = $postData;
		return $this->updateRecords($data);
		lq();
	}
}
