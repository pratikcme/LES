<?php defined('BASEPATH') or exit('No direct script access allowed');

class Products extends User_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->controller = $this->myvalues->productFrontEnd['controller'];
		// $this->url = SITE_URL . 'frontend/'. $this->controller;
		$this->load->model($this->myvalues->productFrontEnd['model'], 'this_model');
		$this->load->library('pagination');
		$this->load->model('common_model');

		// if(!isset($_SESSION['branch_id'])){
		// 	$this->utility->setFlashMessage('danger','Please select branch');
		// 	redirect(base_url());
		// }
		$this->session->unset_userdata('isSelfPickup');
	}

	public function index()
	{

		if (isset($_GET['cat_id']) && $_GET['cat_id'] != '') {
			$data['getBycatID'] = $_GET['cat_id'];
		}

		$data['page'] = $_SESSION['template_name'] . '/product';
		$data['js'] = array('product.js?v=' . js_version, 'add_to_cart.js?v=' . js_version);
		$data['category'] = $this->this_model->selectCategory();
		// print_r($data['category']);die;
		$this->load->model('frontend/home_model', 'home_model');
		$data['latestProduct'] = $this->home_model->selectNewArrivel();

		$category_ids = [];
		$available_subcat = [];
		foreach ($data['category'] as $key => $value) {
			$sub = $this->this_model->selectSubCategory($value->id);
			if (!empty($sub)) {
				$data['category'][$key]->subcategory = $sub;
			} else {
				unset($data['category'][$key]);
			}
			// echo '1';die;
			array_push($category_ids, $value->id);
			$subCategory = $value->subcategory;
			// echo '<pre>';
			// print_r($subCategory);die;
			$i = 0;
			foreach ($subCategory as $k => $val) {

				$count = $this->this_model->countProduct('', $val->id);
				if ($count == 0) {
					$i++;
					unset($value->subcategory[$k]);
				} else {
					$array['id'] = $val->id;
					$array['name'] = $val->name;
					array_push($available_subcat, $array);
					$value->subcategory[$k]->totalProductOfSubcat = $count;
				}
				if (count($subCategory) == $i) {
					unset($data['category'][$key]);
				}
			}
		}

		$data['product'] =  $this->this_model->selectProduct();
		$data['brand'] = $this->this_model->selectBrand();
		$data['subCategory'] = $this->this_model->getAllSubCategory();
		$data['available_subcat'] = $available_subcat;
		// echo '<pre>';
		// print_r($data['subCategory']);die;


		foreach ($data['brand'] as $key => $value) {
			$p = $this->this_model->countProduct($value->id);
			if ($p) {
				$data['brand'][$key]->totalProduct = $p;
			} else {
				unset($data['brand'][$key]);
			}
		}

		for ($i = 0; $i < 6; $i++) {
			$data['countPriceWise'][$i] = $this->this_model->countProductPriceWise($i);
		}
		for ($i = 0; $i < 8; $i++) {
			$data['countDiscoutWise'][$i] = $this->this_model->countProductDiscountWise($i);
		}

		$data['getCategoryHighrstProduct'] = $this->this_model->getCategoryHighrstProduct();
		// echo '<pre>';
		// print_r($data['getCategoryHighrstProduct']);die;
		$this->loadView($this->user_layout, $data);
	}



	public function subcategory()
	{
		$product = $this->this_model->productOfSubcategory($this->input->post());
		echo $product;
	}

	public function searchBrand()
	{
		// print_r($this->input->post());die;	
		if ($this->input->post()) {
			$res = $this->this_model->searchBrand($this->input->post());
			$barnd_list = '';
			foreach ($res as $key => $value) {
				$p = $this->this_model->countProduct($value->id);
				if ($p) {
					$res[$key]->totalProduct = $p;
				} else {
					unset($res[$key]);
					continue;
				}
				$barnd_list .= '<li><input type="checkbox" class="brand" name="brand" value="' . $value->id . '" ><label>' . $value->name . '<span>' . $value->totalProduct . '</span></label><br></li>';
			}

			echo json_encode(['brand_list' => $barnd_list]);
		}
	}

	public function productDetails($id = '')
	{
		$this->load->model('api_v3/common_model', 'co_model');
		$isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('vendor_id'));

		if (!isset($_SESSION['branch_id'])) {
			$productID = $this->uri->segment(3);
			$varientID = $this->uri->segment(4);
			$data['product_weight_id'] = $varientID;

			$productDetails = $this->this_model->getBranchVendorID($productID, $varientID);
			if (!empty($productDetails) && $productDetails[0]->status == '1') {
				$branch = array(
					'branch_id' => $productDetails[0]->id,
					'branch_name' => $productDetails[0]->name,
					'vendor_id' => $productDetails[0]->vendor_id
				);
				$this->session->set_userdata($branch);
				if (strpos($_SERVER['HTTP_REFERER'], 'account') !== false) {
					redirect($_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
				}
			} else {
				echo "<div style='display: flex;width: 100%;height: 100vh;align-items: center;justify-content: center;flex-flow: column;background: linear-gradient(144deg,#ffe8e8 , #ffadad);'>
					<h2 style='font-size: 40px;text-transform: capitalize;'>Sorry this product is Discontinue</h2>
					<a href='" . base_url() . "'><button style='background: #000;border: 0;padding: 15px;color: #fff;border-radius: 5px;font-size: 20px;text-transform: capitalize;'>Continue Shopping</button></a>
					<div>";
				die;
			}
		}

		$default_product_image = $this->common_model->default_product_image();
		$data['default_product_image'] = $default_product_image;
		$product_id = $this->utility->safe_b64decode($id);
		$var_id = $this->uri->segment('4');
		$data['page'] = $_SESSION['template_name'] . '/single_product';
		$data['js'] = array('addProduct.js', 'add_to_cart.js');
		// $data['init'] = array('ADDPRODUCT.init()');
		$data['productDetail'] = $this->this_model->ProductDetails($product_id);
		$data['isAvailable'] = '1';
		if (empty($data['productDetail'])) {
			$data['isAvailable'] = '0';
		}
		$varient_id = $this->utility->safe_b64decode($this->uri->segment(4));

		$this->load->model('frontend/home_model', 'home_model');
		$data['productDetail'][0]->rating = $this->home_model->selectStarRatting($product_id, $varient_id);
		// dd($data['productDetail']);
		$varient_ids = explode(',', $data['productDetail'][0]->product_variant_id);
		$w_name = explode(',', $data['productDetail'][0]->wight_name);
		$w_no = explode(',', $data['productDetail'][0]->wight_no);
		$discount = explode(',', $data['productDetail'][0]->discount_per);
		// $product_image = explode(',',$data['productDetail'][0]->product_variant_image);
		$var = [];
		$weight_no = [];
		$weight_name = [];
		$discount_per = [];
		$varient_image = [];
		$image = [];

		foreach ($varient_ids as $key => $value) {
			array_push($var, $value);
			array_push($weight_no, $w_no[$key]);
			array_push($weight_name, $w_name[$key]);
			array_push($discount_per, $discount[$key]);

			$product_image = $this->this_model->selectImages($value); //this can fetch all image from product_id
		}
		$product_image = $this->this_model->selectImages($varient_ids[0]);

		$p_image = (!empty($product_image)) ? $product_image[0]->image : '';
		if ($p_image == '' || !file_exists(' public/images/' . $this->folder . 'product_image/' . $p_image)) {
			// $p_image = 'defualt.png';
			$p_image = $default_product_image;
		}
		// print_r($p_image);die;
		array_push($image, $p_image);
		$data['varient'] =  $varient_ids;
		$data['weight_no'] =  $weight_no;
		$data['weight_name'] =  $weight_name;
		$data['discount_per'] =  $discount_per;
		$data['image'] = $image;
		$data['product_id'] = $id;

		$data['isVarientExist'] = $this->this_model->checkOrderItemExist($product_id, $varient_id);

		$product_review = $this->this_model->getProductReview($product_id, $varient_id);
		$countParticularUserReview = $this->this_model->countParticularUserReview($product_id, $varient_id);
		$data['countParticularUserReview'] = $countParticularUserReview;

		$data['product_review'] = $product_review;
		$category_name = $this->this_model->getNameCateBrand(TABLE_CATEGORY, $data['productDetail'][0]->category_id);
		$brand_name = $this->this_model->getNameCateBrand(TABLE_BRAND, $data['productDetail'][0]->brand_id);
		$data['productDetail'][0]->category_name = $category_name;
		$related_product = $this->this_model->getRelatedProduct($data['productDetail'][0]->category_id, $data['varient']);
		// lq();
		$this->load->model('frontend/home_model');
		foreach ($related_product as $key => $value) {
			if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
				$value->discount_price = $value->without_gst_price;
			}

			if (!empty($value->product_image) || $value->product_image != '') {
				$image = $value->product_image;
				if (!file_exists('public/images/' . $this->folder . 'product_image/' . $image)) {
					// $image = 'defualt.png';	
					$image = $default_product_image;
				} else {
					$image = $value->product_image;
				}
			} else {
				$image = $default_product_image;
			}
			$value->image = str_replace(' ', '%20', $image);

			// $v_image = $this->this_model->getVarientImage($value->pw_id);
			// $related_product[$key]->product_image = $v_image[0]->image;
			$varientQuantity = $this->home_model->checkVarientQuantity($value->id);
			$related_product[$key]->varientQuantity = ($varientQuantity == '0') ? "0" : $varientQuantity[0]->quantity;
			$value->ratting = $this->home_model->selectStarRatting($value->id, $value->pw_id);
		}
		$data['productDetail'][0]->brand_name = $brand_name;
		$data['related_product'] = $related_product;

		$var_id = $this->utility->safe_b64decode($var_id);
		$data['varientDetails'] = $this->this_model->getVarientDetails($var_id);

		foreach ($data['varientDetails'] as $key => $value) {
			if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
				$value->discount_price = $value->without_gst_price;
			}
		}
		$data['product_image'] = $this->this_model->getProductImage($var_id);
		foreach ($data['product_image'] as $key => $value) {
			if (!file_exists('./public/images/' . $this->folder . 'product_image/' . $value->image) || $value->image == '') {
				// $value->image = 'defualt.png';
				$value->image = $default_product_image;
			}
		}

		$quantity = 1;
		if ($this->session->userdata('user_id') == '' && isset($_SESSION['My_cart'])) {

			foreach ($_SESSION['My_cart'] as $key => $value) {
				if ($value['product_weight_id'] == $var_id) {
					$quantity = $value['quantity'];
				}
			}
		} else {
			$quantity = $this->this_model->getPoroductVarientQuantity($product_id, $var_id);
		}

		$data['cartQuantityForVarient'] = $quantity;

		$item_weight_id = [];
		$data['wish_pid'] = [];
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
			$data['wish_pid'] = $this->this_model->getUsersWishlist();
			$res = $this->this_model->UsersCartData();
			foreach ($res as $key => $value) {
				array_push($item_weight_id, $value->product_weight_id);
			}
		} else {
			if (isset($_SESSION["My_cart"])) {
				$item_weight_id = array_column($_SESSION["My_cart"], "product_weight_id");
			}
		}
		$data['item_weight_id'] = $item_weight_id;
		$data['BranchDetails'] = $this->this_model->getBranchDtails();
		$data['product_weight_id'] = $this->uri->segment(4);

		$this->loadView($this->user_layout, $data);
	}

	public function getDataProductWeight()
	{

		$this->load->model('api_v3/common_model', 'co_model');
		$isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('vendor_id'));

		if ($this->input->post()) {
			$result = $this->this_model->getDataProductWeight($this->input->post());
			$image = $this->this_model->getVarientImage($result[0]->id);
		}

		// for check save cart quantity of user
		$product_id = $result[0]->product_id;

		$verient_id = $this->utility->safe_b64decode($this->input->post('product_varient_id'));
		$quantity = 0;

		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
			$quantity = $this->this_model->getPoroductVarientQuantity($product_id, $verient_id);
		} else {

			foreach ($_SESSION['My_cart'] as $key => $value) {
				if ($value['product_id'] == $product_id  && $value['product_weight_id'] == $verient_id) {
					$quantity = $value['quantity'];
				}
			}
		}
		$wish_pid = $this->this_model->getUsersWishlist(); // wishlist product varient id


		$class = '';
		$theme2class = '';
		if (in_array($result[0]->id, $wish_pid)) {
			$class = 'fas .fa-heart';
			$theme2class = 'fa-solid';
		}
		$div_nav = '';
		$div_for = '';
		$upbasket_thumb = '';
		$upbasket_zoom_image = '';
		foreach ($image as $key => $value) {
			$value->image = preg_replace('/\s+/', '%20', $value->image);
			// print_r($value->image);die;
			if ($value->image == '' || !file_exists('public/images/' . $this->folder . 'product_image/' . $value->image)) {
				// $p_image = 'defualt.png';
				if (strpos($value->image, '%20') === true || $value->image == '') {
					$value->image = $this->common_model->default_product_image();
				} else {
					$value->image = $this->common_model->default_product_image();
				}
			}

			$div_nav .= '<div class="thumnail">';
			$div_nav .=  '<img src=' . base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image . '>';
			$div_nav .= '</div>';

			$div_for .= '<div class="main-img-wrapper">';
			$div_for .=  '<img class="slide-img demo-trigger" src=' . base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image . ' data-zoom=' . base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image . '>';
			$div_for .= '</div>';

			$upbasket_thumb .= '<div class="swiper-slide">
								<img src="' . base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image . '">
								</div>';
			$upbasket_zoom_image .= '<div class="swiper-slide">
					<a href="#"><img data-enlargable class="drift-demo-trigger" src="' . base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image . '"
					data-zoom="' . base_url() . 'public/images/' . $this->folder . 'product_image/' . $value->image . '" /></a>
		  			</div>';
		}
		// $data['image'] = $image;
		// print_r($data['image']);die;
		// $image_div = $this->load->view('frontend/zoom_image',$data,true);
		if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
			$result[0]->discount_price =  $result[0]->without_gst_price;
		}
		$isVarientExist = $this->this_model->checkOrderItemExist($result[0]->product_id, $result[0]->id);
		$data['product_review'] = $this->this_model->getProductReview($result[0]->product_id, $result[0]->id);

		$userSection = $this->load->view($_SESSION['template_name'] . '/ajaxView/product_review_section', $data, true);
		$shoppyUserSection = $this->load->view($_SESSION['template_name'] . '/ajaxView/product_review_section', $data, true);
		$countParticularUserReview = $this->this_model->countParticularUserReview($result[0]->product_id, $result[0]->id);
		$avgr = 0;
		$count = 0;
		foreach ($data['product_review'] as $key => $value) {
			$count = $count + $value->ratting;
			$avgr = $count / count($data['product_review']);
		}
		$starHtml = '';
		$upbasket_starHtml = '';
		$beauty_starHtml = '';
		$shoppy_starHtml = '';
		$ratting = $data['product_review'][0]->ratting;


		for ($j = 1; $j <= $ratting; $j++) {
			$starHtml .= '<i class="fas fa-star"></i>';
			// $upbasket_starHtml .= '<i class="fa-solid fa-star"></i>';
			$upbasket_starHtml .= '<span class="star"></span>';
			$beauty_starHtml .= '<span class="star"></span>';
			$shoppy_starHtml .= '<span class="star"></span>';
		}
		for ($i = 1; $i <= 5 - $ratting; $i++) {
			$starHtml .= '<i class="fas fa-star blank-ratting"></i>';
			// $upbasket_starHtml .= '<i class="fa-solid fa-star"></i>';
			$upbasket_starHtml .= '<span class="star star-active"></span>';
			$beauty_starHtml .= '<span class="star star-active"></span>';
			$shoppy_starHtml .= '<span class="star star-active"></span>';
		}

		$response = [
			'product_weight_id' => $result[0]->id,
			'product_price' => number_format((float)$result[0]->price, 2, '.', ''),
			'weight_no' => $result[0]->weight_no,
			'product_weight_id' => $result[0]->id,
			'discount_price' => number_format((float)$result[0]->discount_price, 2, '.', ''),
			'discount_per' => $result[0]->discount_per,
			'varient_quantity' => $result[0]->quantity,
			'limited_stock' => $result[0]->limited_stock,
			'image_div' => $div_nav,
			'image_div_for' => $div_for,
			'isInWishList' => $class,
			'isInWishListUpbasket' => $theme2class,
			'cartProductQuantity' => $quantity,
			'product_variant_id' => $this->utility->safe_b64encode($result[0]->id),
			'product_id' => $this->utility->safe_b64encode($result[0]->product_id),
			'reviewSection' => $userSection,
			'shoppyUserSection' => $shoppyUserSection,
			'isVarientExist' => (empty($isVarientExist)) ? 0 : count($isVarientExist),
			'countParticularUserReview' => $countParticularUserReview,
			'productReviewCount' => count($data['product_review']),
			'avgRatting' => round($avgr),
			'varientWishStarRatting' => $starHtml,
			'upbasket_starHtml' => '<div class="rating stars3_5" >' . $upbasket_starHtml . '</div><div><span>(' . round($avgr) . ')</span></div>',
			// $upbasket_starHtml . '  ' . round($avgr),
			'beauty_starHtml' => '<div class="rating stars3_5" >' . $beauty_starHtml . '</div><div><span>(' . round($avgr) . ')</span></div>',
			'upbasket_thumb' => $upbasket_thumb,
			'shoppy_starHtml' => '<div class="rating stars3_5" >' . $shoppy_starHtml . '</div><div><span>(' . round($avgr) . ')</span></div>',
			'upbasket_zoom_image' => $upbasket_zoom_image,


		];
		echo json_encode($response);
	}


	public function cart_item()
	{
		// dd($_SESSION['My_cart']);
		$this->load->model('api_v3/common_model', 'co_model');
		$isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('vendor_id'));
		$my_cart = $this->this_model->getMyCart();

		if (empty($_SESSION['My_cart']) && empty($my_cart)) {
			redirect(base_url() . 'home');
		}

		$data['page'] = $_SESSION['template_name'] . '/cart_item';
		$data['js'] = array('cart.js?v=' . js_version);
		$data['calc_shiping'] = 'NotInRange'; //default shipping in NotInRange when user nou login its equal to 0
		if ($this->session->userdata('user_id') != '') {
			$this->load->model('common_model');
			$default_product_image = $this->common_model->default_product_image();

			$data['my_cart'] = $this->this_model->getMyCart($this->session->userdata('user_id'));

			foreach ($data['my_cart'] as $key => $value) {
				if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
					$value->discount_price = $value->without_gst_price;
				}

				$product_image = $this->this_model->GetUsersProductInCart($value->product_weight_id);
				$data['my_cart'][$key]->product_name = $product_image[0]->name;
				$data['my_cart'][$key]->image = $product_image[0]->image;

				if (empty($value->image) || !file_exists('./public/images/' . $this->folder . 'product_image/' . $value->image)) {
					// $value->image = 'defualt.png';
					$value->image = $default_product_image;
				}
			}
			// echo "<pre>";
			// print_r($data['my_cart']);die;
			$result = $this->this_model->getUserAddressLatLong();

			if (count($result) > 0) {
				$userLat = $result[0]->latitude;
				$userLong = $result[0]->longitude;
			} else {
				$userLat = 0;
				$userLong = 0;
			}

			$cart_price = 0.00;
			foreach ($data['my_cart'] as $row) :
				$cart_price += $row->price * $row->quantity;
			endforeach;
			// dd($cart_price);
			// die;
			$data['calc_shiping'] = $this->this_model->getDeliveryCharge($userLat, $userLong, $_SESSION['vendor_id'], $cart_price);
			if (!empty($data['calc_shiping']) && $data['calc_shiping'] != 'NotInRange') {
				$data['calc_shiping'] = number_format((float)$data['calc_shiping'], 2, '.', '');
			}
		}

		$data['wish_pid'] = [];
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
			$this->load->model('frontend/product_model');
			$data['wish_pid'] = $this->product_model->getUsersWishlist();
		}
		$this->loadView($this->user_layout, $data);
	}


	public function remove_cart()
	{
		if ($this->input->post()) {
			$prod_id = $this->input->post('product_id');
			// $weight_id = $this->input->post('weight_id');
			$product_weight_id = $this->input->post('product_weight_id');
			if ($this->session->userdata('user_id') != '') {
				$this->this_model->removeMyCartItem($this->input->post());
				$success = 'true';
			} else {
				// dd($_SESSION['My_cart']);
				foreach ($_SESSION['My_cart'] as $key => $value) {
					if ($value['product_id'] == $prod_id && $value['product_weight_id'] == $product_weight_id) {
						unset($_SESSION['My_cart'][$key]);
						$success = 'true';
					}
				}
			}
			// new test

			$result = $this->this_model->getUserAddressLatLong();

			if (count($result) > 0) {
				$userLat = $result[0]->latitude;
				$userLong = $result[0]->longitude;
			} else {
				$userLat = 0;
				$userLong = 0;
			}

			$new_deliveryCharge = $this->this_model->getDeliveryCharge($userLat, $userLong, $_SESSION['vendor_id'], getMycartSubtotal());
			// lq();
			if (!empty($new_deliveryCharge) && $new_deliveryCharge != 'NotInRange') {
				$new_deliveryCharge = number_format((float)$new_deliveryCharge, 2, '.', '');
			}

			// dd($new_deliveryCharge);
			// die;

			// end here
			$count = cartItemCount();
			if ($count == 0) {
				$this->session->unset_userdata('My_cart');
			}
			$response = [
				'result' => $success,
				'count' => cartItemCount(),
				'final_total' => getMycartSubtotal(),
				'updated_list' => NavbarDropdown(),
				'cartTotal' => getMycartSubtotal(),
				'totalSaving' => totalSaving(),
				'delivery_charge' => $new_deliveryCharge
			];
			echo json_encode($response);
		}
	}


	public function setWishlist()
	{
		if ($this->session->userdata('user_id') == '') {
			$this->utility->setFlashMessage('danger', '
					Please login for wishlisting a product');
			$status = '0';
			echo json_encode(['status' => $status]);
			exit;
		}
		if ($this->input->post()) {
			$product_weight_id = $this->input->post('product_weight_id');
			$result = $this->this_model->checkProductExist($this->input->post());
			$pr = $this->this_model->DefaultProductAddInCart($product_weight_id);
			$array_wish =  array(
				'product_weight_id' => $pr[0]->pw_id,
				'user_id' => $this->session->userdata('user_id'),
				'vendor_id' => $this->session->userdata('vendor_id'),
				'branch_id' => $this->session->userdata('branch_id'),
				'created_by' => $this->session->userdata('user_id'),
				'updated_by' => $this->session->userdata('user_id'),
				'dt_created' => DATE_TIME,
				'dt_updated' => DATE_TIME
			);
			// dd($array_wish);
			if (empty($result)) {
				$is_inserted = $this->this_model->insertProductToWishlist($array_wish);
				if ($is_inserted) {
					$status = 'inserted';
				} else {
					$status = 'NotInserted';
				}
			} else {
				$is_inserted = $this->this_model->removeProductToWishlist($result[0]->id);
				if ($is_inserted) {
					$status = 'deleted';
				} else {
					$status = 'NotDeleted';
				}
			}
			echo json_encode(['status' => $status]);
		}
	}

	// public function setSelfPick()
	// {
	// 	if ($this->input->post()) {
	// 		$val = $this->input->post('isSelfPickup');
	// 		$_SESSION['isSelfPickup'] = $val;
	// 		echo '1';
	// 	}
	// }

	public function getCategoryName()
	{
		if ($this->input->post()) {
			$id = $this->input->post('cat_id');
			$name = $this->this_model->getCategoryName($id);
			echo json_encode(['name' => $name]);
		}
	}

	public function backend_script()
	{
		$keyword = $this->input->get('term');
		$res = $this->this_model->globalSearch($keyword);
		// lq();
		$tutorialData = [];
		$h = '';
		foreach ($res as $key => $value) {
			$varient_id = $this->this_model->getProductVarientDetails($value->id);
			$varient_id = $varient_id[0]->id;
			$anchor = base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->id) . '/' . $this->utility->safe_b64encode($varient_id);
			$h = ['label' => $value->name, 'value' => $anchor];
			// $hrml = "<a href=".$anchor.">".$value->name."</a>";
			array_push($tutorialData, $h);
		}
		// print_r($res);
		echo json_encode($tutorialData);
	}

	public function clear_cart()
	{
		$status = '0';
		$messages = 'Your Cart Is Cleared';

		// dd($this->session->unset_userdata('My_cart'));
		if ($this->session->userdata('user_id') == '') {
			$this->session->unset_userdata('My_cart');
			$status = '1';
			$success = 'success';
		} else {
			$this->session->unset_userdata('My_cart');
			$res = $this->this_model->clear_cart();
			if ($res) {
				$status = '1';
				$success = 'success';
			} else {
				$success = 'danger';
			}
		}
		$this->utility->setFlashMessage($success, $messages);
		echo json_encode(['status' => $status]);
	}

	public function review()
	{
		if ($this->input->is_ajax_request()) {
			$response = $this->this_model->insertReview($this->input->post());
			echo json_encode(['status' => '1']);
		}
	}

	// from template 2 (up basket)

	public function productReview()
	{

		if ($this->input->post()) {

			$res = $this->this_model->insertReview($this->input->post());
			if ($res) {
				$this->utility->setFlashMessage('success', 'Thanks for Review');
			} else {
				$this->utility->setFlashMessage('danger', 'Somthing Went Wrong');
			}
			$product_id = $this->input->post('product_id');
			$varient_id = $this->input->post('varient_id');
			redirect(base_url() . 'products/productDetails/' . $product_id . '/' . $varient_id);
		}
	}
}
