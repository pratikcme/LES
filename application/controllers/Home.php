<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends User_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->controller = $this->myvalues->homeFrontEnd['controller'];
		$this->load->model($this->myvalues->homeFrontEnd['model'], 'this_model');
		$this->load->model($this->myvalues->productFrontEnd['model'], 'product_model');
		if ($this->session->userdata('branch_id') == '') {
			redirect(base_url());
		}
		$this->session->unset_userdata('isSelfPickup');
	}


	public function setDimansion()
	{
		$responsiveWidth =  $this->input->post('width');
		$responsiveHeight =  $this->input->post('height');

		$this->session->set_userdata('responsive_width', $responsiveWidth);
		$this->session->set_userdata('responsive_height', $responsiveHeight);
	}

	public function index()
	{



		$this->load->model('api_v3/common_model', 'co_model');
		$isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('vendor_id'));

		$data['page'] = $_SESSION['template_name'] . '/home/home';
		$subcategory = $this->this_model->countSubcategory();
		$data['subcategory'] = count($subcategory);

		if ($this->countCategory == 1 && count($subcategory) == '1' && $_SESSION['template_name'] == 'frontend') {
			$data['page'] = 'frontend/home/shukan';
			$this->load->model('home_content_model');
			$data['home_content'] = $this->home_content_model->getAboutSectionTwo();
			$data['home_section_one'] = $this->home_content_model->getHomeSection_one();
			$data['background_image'] = $this->home_content_model->getSectionOneBackground();
		}

		$data['js'] = array('home.js', 'add_to_cart.js');

		$data['categorys'] = $this->this_model->selectCategory();
		$data['category'] = $this->this_model->selectCategory();

		$data['folder'] = $this->folder . 'category/';
		if ($this->countCategory == 1 && count($subcategory) > 1) {
			$data['category'] = $this->this_model->subcategory_list();
			$data['folder'] = $this->folder . 'product_image/';
		}
		// start

		$product_ids = [];
		$data['top_sell_core'] = $this->this_model->selectTopSelling($product_ids); //call this for no reapeated product in new arrivals
		// $data['top_sell_core'] = $this->this_model->selectTopSelling();

		$this->load->model('frontend/product_model');
		$top_selling_core = array();

		foreach ($data['top_sell_core'] as $key => $value) {
			$selling_core = $this->this_model->top_selling_product($value->product_id);

			if (!empty($selling_core)) {
				$re = array_push($top_selling_core, $selling_core[0]);
			}
		}
		$quantity = array_column($top_selling_core, 'quantity');
		array_multisort($quantity, SORT_DESC, $top_selling_core);
		$default_product_image = $this->common_model->default_product_image();
		foreach ($top_selling_core as $key => $value) {
			if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
				$value->discount_price = $value->without_gst_price;
			}
			if (!empty($value->image) || $value->image != '') {
				if (!file_exists('public/images/' . $this->folder . 'product_image/' . $value->image)) {
					// $image = 'defualt.png';	
					$value->image = $default_product_image;
				} else {
					$value->image = $value->image;
				}
			} else {
				$value->image = $default_product_image;
			}
			// dd($value->id);
			$addQuantity = $this->product_model->findProductAddQuantity($value->id, $value->pw_id);
			$value->addQuantity = $addQuantity;

			$product_ids[] = $value->id;

			$varientQuantity = $this->this_model->checkVarientQuantity($value->id);

			$top_selling_core[$key]->varientQuantity = ($varientQuantity == '0') ? "0" : $varientQuantity[0]->quantity;

			$value->ratting = $this->this_model->selectStarRatting($value->id, $value->pw_id);

			$value->reviewCount = count($this->product_model->getProductReview($value->id, $value->pw_id)); //Dk added
		}

		// mid
		$data['new_arrival'] = $this->this_model->selectNewArrivel($product_ids);
		foreach ($data['new_arrival'] as $key => $value) {
			if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
				$value->discount_price = $value->without_gst_price;
			}

			$varientQuantity = $this->this_model->checkVarientQuantity($value->id);

			if (!empty($value->image) || $value->image != '') {
				if (!file_exists('public/images/' . $this->folder . 'product_image/' . $value->image)) {
					// $image = 'defualt.png';	
					$value->image = $default_product_image;
				} else {
					$value->image = $value->image;
				}
			} else {
				$value->image = $default_product_image;
			}
			$value->image = str_replace(' ', '%20', $value->image);
			$addQuantity = $this->product_model->findProductAddQuantity($value->id, $value->pw_id);
			$value->addQuantity = $addQuantity;

			$data['new_arrival'][$key]->varientQuantity = ($varientQuantity == '0') ? "0" : $varientQuantity[0]->quantity;
			$value->ratting = $this->this_model->selectStarRatting($value->id, $value->pw_id);
			$value->reviewCount = count($this->product_model->getProductReview($value->id, $value->pw_id)); //Dk added
		}

		// end
		$data['top_sell'] = $top_selling_core;
		@$data['banner'] = $this->this_model->getWebBannerImage();

		$item_weight_id = [];
		$data['wish_pid'] = [];
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
			$this->load->model('frontend/product_model');
			$data['wish_pid'] = $this->product_model->getUsersWishlist();
			$res = $this->product_model->UsersCartData();
			foreach ($res as $key => $value) {
				array_push($item_weight_id, $value->product_weight_id);
			}
		} else {
			if (isset($_SESSION["My_cart"])) {
				$item_weight_id = array_column($_SESSION["My_cart"], "product_weight_id");
			}
		}
		$data['top_ratted_product'] = $this->this_model->getTopRatted();
		foreach ($data['top_ratted_product'] as $key => $value) {
			if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
				$value->discount_price = $value->without_gst_price;
			}

			$varientQuantity = $this->this_model->checkVarientQuantity($value->id);

			if (!empty($value->image) || $value->image != '') {
				if (!file_exists('public/images/' . $this->folder . 'product_image/' . $value->image)) {
					// $image = 'defualt.png';	
					$value->image = $default_product_image;
				} else {
					$value->image = $value->image;
				}
			} else {
				$value->image = $default_product_image;
			}
			$value->image = str_replace(' ', '%20', $value->image);
			$addQuantity = $this->product_model->findProductAddQuantity($value->id, $value->pw_id);
			$value->addQuantity = $addQuantity;

			$data['top_ratted_product'][$key]->varientQuantity = ($varientQuantity == '0') ? "0" : $varientQuantity[0]->quantity;
			$value->ratting = $this->this_model->selectStarRatting($value->id, $value->pw_id);
			$value->reviewCount = count($this->product_model->getProductReview($value->id, $value->pw_id)); //Dk added
		}

		$data['item_weight_id'] = $item_weight_id;

		$unorderList = $this->this_model->get_offer($this->session->userdata('branch_id'));
		$data['offer_list'] = [];
		foreach ($unorderList as $value) :
			$data['offer_list'][] = $value;
		endforeach;

		$this->loadView($this->user_layout, $data);
	}




	public function get_offer_product_listing($offer_id = '')
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		$item_weight_id = [];
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
			$this->load->model('frontend/product_model');
			$res = $this->product_model->UsersCartData();
			foreach ($res as $key => $value) {
				array_push($item_weight_id, $value->product_weight_id);
			}
			// print_r($item_weight_id);die;
		} else {
			if (isset($_SESSION["My_cart"])) {
				$item_weight_id = array_column($_SESSION["My_cart"], "product_weight_id");
			}
		}
		$data['item_weight_id'] = $item_weight_id;

		$offer_id = $this->utility->safe_b64decode($offer_id);
		$data['page'] = $_SESSION['template_name'] . '/offer_product_list';

		$data['js'] = array('add_to_cart.js');
		$postData = ['offer_id' => $offer_id, 'user_id' => $this->session->userdata('user_id')];

		$data['offer_varient_list'] = $this->this_model->get_offer_varient_listing($postData);
		$this->load->model('frontend/product_model');
		foreach ($data['offer_varient_list'] as $key => $value) {
			$addQuantity = $this->product_model->findProductAddQuantity($value->product_id, $value->product_varient_id);
			$value->my_cart_quantity = $addQuantity;

			$value->ratting = $this->this_model->selectStarRatting($value->product_id, $value->product_varient_id);
			$value->reviewCount = count($this->product_model->getProductReview($value->product_id, $value->product_varient_id)); //Dk added
		}
		$this->loadView($this->user_layout, $data);
	}

	public function get_notification()
	{
		$this->load->model('common_model');
		$res = $this->common_model->userNotify();
		$html = '';
		foreach ($res as $key => $value) {
			$html .= '<li>' . $value->notification . '</li>';
		}
		if (count($res) == '0') {
			$html .= '<li>No Notification</li>';
		} else {
			$html .= '<li id="clear_all">Clear All</li>';
		}
		echo json_encode(['notify' => $html, 'count' => count($res)]);
	}

	public function haveRead()
	{
		$this->load->model('common_model');
		$res = $this->common_model->makeRead();
		$html = '';
		foreach ($res as $key => $value) {
			$html .= '<li>' . $value->notification . '</li>';
		}
		if (count($res) == '0') {
			$html .= '<li>No Notification</li>';
		} else {
			$html .= '<li id="clear_all">Clear All</li>';
		}
		echo json_encode(['notify' => $html, 'count' => count($res)]);
	}
}
