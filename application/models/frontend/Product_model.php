<?php

class Product_model extends My_model
{

	function __construct()
	{
		$this->branch_id = $this->session->userdata('branch_id');
		$this->load->model('api_v3/common_model', 'v2_common_model');
	}

	public function selectVendor()
	{
		$data['table'] = TABLE_VENDOR;
		$data['select'] = ['*'];
		$data['where'] = ['status!=' => '9'];
		return $this->selectRecords($data);
	}

	public function getBranchVendorID($product_id, $varientID)
	{
		$product_id = $this->utility->safe_b64decode($product_id);
		$varientID = $this->utility->safe_b64decode($varientID);

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ["b.id", 'b.vendor_id', 'b.name', 'p.status'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id=pw.product_id', 'LEFT'],
			TABLE_BRANCH . ' as b' => ['p.branch_id = b.id', 'LEFT']
		];
		$data['where'] = ['pw.id' => $varientID, 'pw.status' => '1'];
		return $this->selectFromJoin($data);
	}

	public function countProductPriceWise($i)
	{

		if ($i == '0') {
			$data['where'] = ['pw.price <=' => '50'];
		}
		if ($i == '1') {
			$data['where'] = ['pw.price >=' => '51', 'pw.price <= ' => '100'];
		}
		if ($i == '2') {
			$data['where'] = ['pw.price >=' => '101', 'pw.price <=' => '200'];
		}
		if ($i == '3') {
			$data['where'] = ['pw.price >=' => '201', 'pw.price <=' => '300'];
		}
		if ($i == '4') {
			$data['where'] = ['pw.price >=' => '301', 'pw.price <=' => '400'];
		}
		if ($i == '5') {
			$data['where'] = ['pw.price >=' => '401'];
		}

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.discount_per', 'pw.id as product_weight_id', 'pw.discount_price', 'pi.image'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['groupBy'] = 'p.id';
		$data['having'] = [
			'p.branch_id' => $this->branch_id,
			'pw.id !=' => '',
			'pw.status' => '1',
			'p.status ' => '1',
		];
		return $this->countRecords($data);
		// echo $this->db->last_query();
	}

	public function countProductDiscountWise($i)
	{

		if ($i == '0') {
			$data['where'] = ['pw.discount_per >=' => '1', 'pw.discount_per <= ' => '5'];
		}
		if ($i == '1') {
			$data['where'] = ['pw.discount_per >=' => '5', 'pw.discount_per <= ' => '10'];
		}
		if ($i == '2') {
			$data['where'] = ['pw.discount_per >=' => '10', 'pw.discount_per <= ' => '15'];
		}
		if ($i == '3') {
			$data['where'] = ['pw.discount_per >=' => '15', 'pw.discount_per <=' => '20'];
		}
		if ($i == '4') {
			$data['where'] = ['pw.discount_per >=' => '20', 'pw.discount_per <=' => '25'];
		}
		if ($i == '5') {
			$data['where'] = ['pw.discount_per >=' => '25', 'pw.discount_per <=' => '30'];
		}
		if ($i == '6') {
			$data['where'] = ['pw.discount_per >=' => '30', 'pw.discount_per <=' => '35'];
		}
		if ($i == '7') {
			$data['where'] = ['pw.discount_per >=' => '35'];
		}


		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.discount_per', 'pw.id as product_weight_id', 'pw.discount_price', 'pi.image'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['groupBy'] = 'p.id';
		$data['having'] = [
			'p.branch_id' => $this->branch_id,
			'pw.id !=' => '',
			'pw.status' => '1',
			'p.status ' => '1',
		];

		return $this->countRecords($data);
		// echo $this->db->last_query();die;
	}

	public function searchBrand($postData)
	{
		if ($postData['search_key'] != '') {
			$data['like'] = ['name', $postData['search_key'], 'both'];
		}


		$data['where'] = ['branch_id' => $this->branch_id, 'status !=' => '9'];
		$data['select'] = ['*'];
		$data['table'] = TABLE_BRAND;
		return $this->selectRecords($data);
	}

	public function selectCategory()
	{

		$data['table'] = TABLE_CATEGORY . ' as c';
		$data['join'] = [
			TABLE_SUBCATEGORY . ' as sc' => ['c.id=sc.category_id', 'INNER']
		];
		$data['select'] = ['c.*'];
		$data['where'] = [
			'c.status !=' => '9',
			'sc.status !=' => '9',
			'c.branch_id' => $this->branch_id
		];
		$data['groupBy'] = 'c.id';
		// $data['limit'] = '12'; 
		return $this->selectFromJoin($data);
		echo $this->db->last_query();
	}

	public function getCategoryHighrstProduct()
	{
		// echo '<pre>';
		// print_r($_SERVER);die;

		if (!isset($_SESSION['vendor_id'])) {
			$this->branch_id = '1';
		}
		$data['table'] = TABLE_CATEGORY . ' as c';
		$data['join'] = [
			TABLE_PRODUCT . ' as p' => ['p.category_id=c.id', 'LEFT'],
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['pw.product_id=p.id', 'LEFT']
		];
		$data['select'] = ['c.*', 'count(p.id) as product_count', 'count(pw.id) as product_weight_count'];
		$data['where'] = [
			'c.status !=' => '9',
			'c.branch_id' => $this->branch_id,
			'p.status !=' => '9',
			'pw.status !=' => '9'
		];
		$data['groupBy'] = 'c.id';
		$data['order'] = 'product_count DESC';
		$data['limit'] = '6';
		return $this->selectFromJoin($data);
		// echo $this->db->last_query();die;
	}

	public function selectSubCategory($cat_id)
	{

		$data['table'] = TABLE_SUBCATEGORY;
		$data['select'] = ['*'];
		$data['where'] = [
			'status !=' => '9',
			'branch_id' => $this->branch_id,
			'category_id' => $cat_id
		];
		return $this->selectRecords($data);
		// echo $this->db->last_query();die;
	}

	public function selectBrand()
	{

		$data['table'] = TABLE_BRAND;
		$data['select'] = ['*'];
		$data['where'] = [
			'status' => '1',
			'branch_id' => $this->branch_id
		];

		return $this->selectRecords($data);
	}

	public function countProduct($brand_id = '', $sub_id = '')
	{
		if ($brand_id != '') {
			$data['where']['p.brand_id'] = $brand_id;
		}

		if ($sub_id != '') {
			$data['where']['p.subcategory_id'] = $sub_id;
		}

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.discount_per', 'pw.id as product_weight_id', 'pw.discount_price', 'pi.image'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['groupBy'] = 'p.id';
		$data['where']['p.branch_id'] = $this->branch_id;
		$data['where']['p.status'] = '1';
		$data['where']['pw.status'] = '1';
		// [
		// 		'p.branch_id'=>$this->branch_id,
		// 		// 'pw.id !=' => '',
		// 		// 'pw.status' => '1',
		// 		'p.status ' =>'1',
		// 		];
		$return =  $this->selectFromJoin($data);
		// echo $this->db->last_query();die;
		return count($return);
	}


	public function selectProduct()
	{
		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.discount_per'];
		$data['join'] = [TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT']];
		$data['where'] = ['p.status != ' => '9', 'p.branch_id' => $this->branch_id];
		// $data['limit'] = $limit;
		// $data['skip'] = $start;
		$data['order'] = 'id DESC';
		return  $this->selectFromJoin($data);
	}
	public function record_count()
	{

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price'];
		$data['join'] = [TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT']];
		$data['where'] = ['p.status ' => '1', 'p.branch_id' => $this->branch_id];
		return $this->countRecords($data);
	}
	// public function productOfSubcategory($limit,$start,$postdata){
	public function productOfSubcategory($postdata)
	{
		//dd($postdata);

		$this->load->model('api_v3/common_model', 'co_model');
		$isShow = $this->co_model->checkpPriceShowWithGstOrwithoutGst($this->session->userdata('vendor_id'));


		if (isset($postdata['slider'])) {
			$postdata['getCatByURL'] = $this->utility->safe_b64encode($postdata['getCatByURL']);
		}
		if (isset($postdata['search']) && $postdata['search'] != '') {
			$data['like'] = ['p.name', $postdata['search'], 'match'];
		}
		if (isset($postdata['sort'])) {
			if ($postdata['sort'] == 'high_low') {
				$data["order"] = 'pw.discount_price DESC , pw.quantity DESC';
			}
			if ($postdata['sort'] == 'low_high') {
				$data["order"] = 'pw.discount_price ASC,pw.quantity DESC';
			}
			if ($postdata['sort'] == 'discount_high_low') {
				$data["order"] = 'pw.discount_per DESC,pw.quantity DESC';
				$data['where']['discount_per >']  = '0';
			}
			if ($postdata['sort'] == 'discount_low_high') {
				$data["order"] = 'pw.discount_per ASC,pw.quantity DESC';
				$data['where']['discount_per >']  = '0';
			}
			if ($postdata['sort'] == 'alphabetically') {
				$data["order"] = 'p.name ASC,pw.quantity DESC';
			}

			if ($postdata['sort'] == 'last_30_days') {
				$todaydate = strtotime(date('yy-m-d'));
				$monthBefore30days = date('m') - '1';
				$before30Days = date('yy-' . $monthBefore30days . '-d');
				$dateBefore30Days = strtotime($before30Days);
				$data['where']['p.dt_added >='] = $dateBefore30Days;
				$data['where']['p.dt_updated <='] = $todaydate;
			}
		}


		if (isset($postdata['start_price']) && $postdata['start_price'] != '' && isset($postdata['end_price']) && $postdata['end_price'] != '') {
			$data['where']['pw.discount_price >='] = $postdata['start_price'];
			$data['where']['pw.discount_price <='] = $postdata['end_price'];
		}
		// print_r($data['where']);die;
		if (isset($postdata['brandArray'])) {
			$br_id = "(";
			foreach ($postdata['brandArray'] as $value) {
				$br_id .= 'p.brand_id = ' . $value . '  OR ';
			}
			$where = rtrim($br_id, ' OR ');
			$where .= ') AND 1 = ';
			$data['where'][$where] = '1';
		}
		// $data['where']["(r.master_sheet = '".$master_sheet."' OR r.master_sheet2 ='".$master_sheet2."') AND 1 ="] = 1
		if (isset($postdata['discountArray'])) {
			$whereDiscount = "(";
			foreach ($postdata['discountArray'] as $value) {
				$data['where']['1 ='] = 1;
				if ($value == '0') {
					$whereDiscount .= "(pw.discount_per > 0 AND pw.discount_per <= 5) OR ";
				}
				if ($value == '1') {
					// $data['where']['pw.discount_per <='] ='5';
					$whereDiscount .= "(pw.discount_per >= 5 AND pw.discount_per <= 10) OR ";
				}
				if ($value == '2') {
					$whereDiscount .= " ( (pw.discount_per >= 10 AND pw.discount_per <= 15) ) OR ";
				}
				if ($value == '3') {
					$whereDiscount .= " ( (pw.discount_per >= 15 AND pw.discount_per <= 20) ) OR ";
				}
				if ($value == '4') {
					$whereDiscount .= " ( (pw.discount_per >= 20 AND pw.discount_per <= 25) ) OR ";
				}
				if ($value == '5') {
					$whereDiscount .= " ( (pw.discount_per >= 25 AND pw.discount_per <= 30) ) OR ";
				}
				if ($value == '6') {
					$whereDiscount .= " ( (pw.discount_per >= 30 AND pw.discount_per <= 35) ) OR ";
				}
				if ($value == '7') {
					$whereDiscount .= " (pw.discount_per >= 35 ) OR ";
				}
			}
			$where = rtrim($whereDiscount, ' OR ');
			$where .= ') AND 1 = ';
			$data['where'][$where] = '1';
		}

		if (isset($postdata['subcatArray'])) {
			$data['where_in']['p.subcategory_id'] = $postdata['subcatArray'];
		}


		if (isset($postdata['categoryArray']) &&  !empty($postdata['categoryArray'])) {



			if (isset($postdata['catwithsubArray']) &&  !empty($postdata['catwithsubArray'])) {
				$catwithsubArray = array_unique($postdata['catwithsubArray']);
				$data['where_in']['p.subcategory_id'] = $catwithsubArray;
			} else {
				$data['where_in']['p.category_id'] = $postdata['categoryArray'];
			}
		}

		if (isset($postdata['sub_id']) &&  $postdata['sub_id'] != '') {

			$data['where']['p.subcategory_id'] =  $postdata['sub_id'];
			$sub_id = $postdata['sub_id'];
		}
		$subcategory = '';
		if (isset($postdata['cat_id']) && $postdata['cat_id'] != '') {
			$data['where']['p.category_id'] =  $postdata['cat_id'];
			$cat_id = $postdata['cat_id'];
			$subcategory = $this->getAllSubCategory($cat_id);
			// echo $this->db->last_query();die;
		}
		if (isset($postdata['getCatByURL']) && $postdata['getCatByURL'] != '') {
			$data['where']['p.category_id'] =  $this->utility->safe_b64decode($postdata['getCatByURL']);
		}
		if (isset($_POST['page'])) {
			$page = $_POST['page'];
		} else {
			$page = 1;
		}

		if (
			isset($postdata['search']) && $postdata['search'] == '' &&
			isset($postdata['sort']) && $postdata['sort'] == '' &&
			isset($postdata['start_price']) && $postdata['start_price'] ==  '' &&
			// !isset($postdata['brandArray'])  && $postdata['brandArray'] == '' &&
			// !isset($postdata['discountArray']) && $postdata['discountArray'] == '' && 
			isset($postdata['sub_id']) && $postdata['sub_id'] == '' &&
			isset($postdata['cat_id']) && $postdata['cat_id'] == ''
		) {

			$data['order'] = 'dp ASC,pw.quantity DESC , p.id DESC';
		}

		$limit = 20;
		if (!isset($data['order'])) {
			$data['order'] = 'dp ASC,pw.quantity DESC';
		}

		$data['where']['p.branch_id'] = $this->branch_id;
		$data['where']['pw.status !='] = '9';
		$data['where']['p.status'] = '1';
		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', "IF(p.display_priority IS NULL, 99999999999999999999 , p.display_priority) AS dp", 'p.id as prod_id', 'pw.price', 'pw.quantity', 'pw.discount_per', 'pw.id as product_weight_id', 'pw.discount_price', 'pi.image', 'pw.status as pw_status', 'pw.weight_id', 'pw.without_gst_price', 'pw.limited_stock as limited_stock'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['groupBy'] = 'p.id';
		$data['limit'] = $page * $limit;

		$product = $this->selectFromJoin($data);

		$total_result = $this->countRecords($data);

		$pages = ceil($total_result / 20);
		if ($page < $pages) {
			$page = $page + 1;
			$display = 'block';
		} else {
			// $page = $page + 1	;
			$display = 'none';
		}
		$data['display'] = $display;
		$data['page'] = $page;

		$wish_pid = $this->getUsersWishlist();
		if (!empty($product)) {

			// foreach ($product as $key => $value) {
			// 	$this->load->model('frontend/home_model','home_model');
			// 	$product[$key]->rating  = $this->home_model->selectStarRatting($value->id);
			// }
			// print_r($product);exit;
			$item_weight_id = [];
			if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
				$res = $this->UsersCartData();
				foreach ($res as $key => $value) {
					array_push($item_weight_id, $value->product_weight_id);
				}
				// print_r($item_weight_id);die;
			} else {
				if (isset($_SESSION["My_cart"])) {
					$item_weight_id = array_column($_SESSION["My_cart"], "product_weight_id");
				}
			}
			$product_html = '';
			$this->load->model('frontend/home_model', 'home_model');

			foreach ($product as $key => $value) {
				$value->ratting = $this->home_model->selectStarRatting($value->id, $value->product_weight_id);
				if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
					$value->discount_price =  $value->without_gst_price;
				}

				$d_none = '';
				$d_show = 'd-none';
				if (!empty($item_weight_id)) {
					if (in_array($value->product_weight_id, $item_weight_id)) {
						$d_show = '';
						$d_none = 'd-none';
					}
				}
				$data['d_show'] = $d_show;
				$data['d_none'] = $d_none;

				$addQuantity = $this->findProductAddQuantity($value->id, $value->product_weight_id);

				$data['addQuantity'] = $addQuantity;
				$this->load->model('frontend/home_model', 'home_model');

				$varientQuantity = $this->checkVarientQuantity($value->id);


				$p_outofstock = '';
				if ($varientQuantity == '0') {

					// $p_outofstock .=  '<span class="out_of_stock">' . $this->lang->line('out of stock') . '</span>';
					$p_outofstock .=  '<div class="out-stock"><span class="out-heading">' . $this->lang->line('out of stock') . '</span>
					</div>';
				}
				$data['p_outofstock'] = $p_outofstock;
				$class = '';
				if (!empty($wish_pid)) {
					if (in_array($value->id, $wish_pid)) {
						$class = 'fas .fa-heart';
					}
				}
				$data['wish_pid'] = $wish_pid;
				$data['class'] = $class;

				if (!empty($value->image) || $value->image != '') {
					$image = $value->image;
					if (!file_exists('public/images/' . $this->folder . 'product_image/' . $value->image)) {
						// $image = 'defualt.png';	
						$value->image = $this->v2_common_model->default_product_image();
					} else {
						$value->image = $value->image;
					}
				} else {
					// $image = 'defualt.png'; 
					$value->image = $this->v2_common_model->default_product_image();
				}
				$image = str_replace(' ', '%20', $image);

				$data['image'] = $value->image;

				$value->name = character_limiter($value->name, 30);
				$data['value'] = $value;
				$data['value']->varientQuantity = ($varientQuantity == '0') ? "0" : $varientQuantity[0]->quantity;
				// dd($data['value']->varientQuantity);
				$value->reviewCount = count($this->getProductReview($value->id, $value->product_weight_id)); //Dk added

				$product_html .= $this->load->view($_SESSION['template_name'] . '/ajaxView/product', $data, true);
			}
			// Dk added class of cmn-btn
			$product_html .= '<div class="col-md-12 text-center mt-5" style="display:' . $display . '">
        						<button type="button" class="btn show-more cmn-btn lg-btn add-cart-btn" id="load_more" value=' . $page . ' data-ids=' . json_encode($postdata) . '>' . $this->lang->line('Show More') . '</button>
      						</div>';
		} else {
			$product_html = '<h3>No Product Found  </h3>';
		}
		$sub_category = '';
		$sub_dropdownCategory = "";
		if (!empty($subcategory)) {
			$subcatData['subcategory'] = $subcategory;
			$subcatData['wish_pid'] = $wish_pid;
			$sub_category .= $this->load->view($_SESSION['template_name'] . '/ajaxView/product_view/subcat_li', $subcatData, true);
			$sub_dropdownCategory .= $this->load->view($_SESSION['template_name'] . '/ajaxView/product_view/dropdown_li', $subcatData, true);
		}

		$responseArray = ['result' => $product_html, 'page' => $page - 1, 'subCategory' => $sub_category, 'sub_dropdownCategory' => $sub_dropdownCategory];

		return  json_encode($responseArray);
	}

	// public function checkMycartProduct($user_id){
	// 	$data['table'] = TABLE_MY_CART;
	// 	$data['select'] = ['pro']
	// 	$data['where'] = ['user_id'=>$user_id];
	// }
	public function findProductAddQuantity($p_id = '', $p_v_id)
	{

		$qnt = 1;
		if ($this->session->userdata('user_id') == '') {

			if (isset($_SESSION['My_cart'])) {
				foreach ($_SESSION['My_cart'] as $key => $value) {
					if ($value['product_id'] == $p_id && $value['product_weight_id'] == $p_v_id) {
						$qnt = $value['quantity'];
					}
				}
			}
		} else {
			$qnt = $this->checkMycart($p_id, $p_v_id);
		}
		return  $qnt;
	}

	public function checkMycart($p_id = '', $p_v_id)
	{
		$qnt = 1;
		// if($p_id != ''){
		// 	$data['where']['product_id'] = $p_id; 
		// }
		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		$data['where']['product_weight_id'] = $p_v_id;
		$data['where']['user_id'] = $this->session->userdata('user_id');
		$res = $this->selectRecords($data);
		if (count($res) > 0) {
			$qnt = $res[0]->quantity;
		}
		return $qnt;
	}

	public function checkVarientQuantity($product_id)
	{

		$data['table'] = TABLE_PRODUCT_WEIGHT;
		$data['select'] = ['quantity'];
		$data['where'] = ['status !=' => '9', 'product_id' => $product_id, 'branch_id' => $this->branch_id, 'quantity >=' => '1'];
		$res = $this->selectRecords($data);
		if (empty($res)) {
			$res = '0';
		}
		return $res;
	}

	public function ProductDetails($id)
	{


		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.discount_price', 'pw.id as variant_id', 'pw.quantity', 'GROUP_CONCAT(pw.id) as product_variant_id', 'GROUP_CONCAT(w.name) as wight_name', 'GROUP_CONCAT(pw.discount_per) as discount_per', 'GROUP_CONCAT(pw.weight_no) as wight_no', 'pw.limited_stock as limited_stock'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			// TABLE_PRODUCT_IMAGE .' as pi'=>['pw.id = pi.product_variant_id','LEFT'],
			TABLE_WEIGHT . ' as w' => ['w.id = pw.weight_id', 'LEFT'],
		];
		$data['where'] = ['p.status' => '1', 'pw.status!=' => '9', 'p.id' => $id, 'p.branch_id' => $this->branch_id];
		$data['groupBy'] = ['p.id'];
		return  $this->selectFromJoin($data);
	}

	public function getVarientDetails($varient_id)
	{
		$data['table'] = TABLE_PRODUCT_WEIGHT;
		$data['select'] = ['*'];
		$data['where'] = ['id' => $varient_id, 'status!=' => '9'];
		return $this->selectRecords($data);
	}
	public function getProductImage($varient_id)
	{
		$data['table'] = TABLE_PRODUCT_IMAGE;
		$data['select'] = ['*'];
		$data['where'] = ['product_variant_id' => $varient_id, 'status !=' => '9'];
		return $this->selectRecords($data);
	}

	public function selectWeight($weight_id)
	{
		$data['table'] = TABLE_WEIGHT;
		$data['select'] = ['*'];
		$data['where'] = ['id' => $weight_id, 'status' => '1'];
		return $this->selectRecords($data);
	}

	public function selectImages($product_variant_id)
	{

		$data['table'] = TABLE_PRODUCT_IMAGE;
		$data['select'] = ['id', 'image'];
		$data['where'] = [
			'product_variant_id' => $product_variant_id,
			'branch_id' => $this->branch_id,
			'status != ' => '9'
		];
		return $this->selectRecords($data);
	}

	function total_shop_product($id = NULL, $category_id = NULL)
	{
		$data['select'] = ['COUNT(p.id) as total_product'];
		if (isset($id) && $id != '') {
			$data['where']['p.branch_id'] = $id;
		}
		if ($category_id != '' && $category_id != '') {
			$data['where']['p.category_id'] = $category_id;
		}
		if ($subcategory_id != '' && $subcategory_id != '') {
			$data['where']['p.subcategory_id'] = $subcategory_id;
		}
		$data['where']['p.status !='] = '9';
		$data['join'] = [
			'product_weight  AS w' => [
				'w.product_id = p.id',
				'LEFT'
			]
		];
		$data['where']['w.quantity >'] = '0';
		// $data['groupBy'] = 'p.id';
		$data['table'] = 'product AS p';
		$result = $this->selectFromJoin($data);

		// echo   $this->db->last_query();exit;
		return $result[0]->total_product;
	}

	public function ProductAddInCart($postdata)
	{

		$productId = $this->utility->safe_b64decode($postdata['product_id']);

		$product_varient_id = $postdata['varient_id'];;

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.id as pw_id', 'pw.quantity', 'pw.weight_id', 'pw.discount_per', 'pw.discount_price', 'pi.image', 'pw.max_order_qty'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['where'] = [
			'p.status !=' => '9',
			'p.id' => $productId,
			'p.branch_id' => $this->branch_id,
			'pw.id' => $product_varient_id
		];
		return $this->selectFromJoin($data);
	}

	public function addToMyCart($cartData)
	{

		$data['table'] = TABLE_MY_CART;
		$data['insert'] = $cartData;
		return $this->insertRecord($data);
	}

	public function getMyCartData($id)
	{

		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		$data['where']['id'] = $id;
		return $this->selectRecords($data);
	}

	public function getPoroductVarientQuantity($pro_id = '', $var_id)
	{

		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
			$data['where']['user_id'] = $this->session->userdata('user_id');
		}

		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		// $data['where']['product_id'] = $pro_id;
		$data['where']['product_weight_id'] = $var_id;
		$return = $this->selectRecords($data);
		if (!empty($return)) {
			return $return[0]->quantity;
		} else {
			return 0;
		}
	}


	public function UsersCartData()
	{
		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		$data['where']['user_id'] = $this->session->userdata('user_id');
		$data['where']['branch_id'] = $this->branch_id;
		return $this->selectRecords($data);
	}

	public function CheckMycard($postdata)
	{
		$product_weight_id = $postdata['product_weight_id'];
		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		$data['where'] = [
			'status !=' => '9',
			'user_id' => $this->session->userdata('user_id'),
			'branch_id' => $this->branch_id,
			'product_weight_id' => $product_weight_id
		];
		return $this->selectRecords($data);
	}

	public function update_my_card($update_id, $quntity)
	{
		$data['table'] = TABLE_MY_CART;
		$data['update'] = [
			'quantity' => $quntity,
			'dt_updated' => strtotime(DATE_TIME)
		];
		$data['where']['id'] = $update_id;
		return $this->updateRecords($data);
	}

	public function removeMyCartItem($postdata)
	{
		$productId = $postdata['product_id'];
		// $weight_id = $postdata['weight_id'];
		$product_weight_id = $postdata['product_weight_id'];

		$user_id = $this->session->userdata('user_id');

		$data['table'] = TABLE_MY_CART;
		$data['where'] = [
			// 'product_id'=>$productId,
			'product_weight_id' => $product_weight_id,
			'branch_id' => $this->branch_id,
			'user_id' => $user_id
		];
		return $this->deleteRecords($data);
	}

	public function insertToMyCart($cardData)
	{
		$data['table'] = TABLE_MY_CART;
		$data['insert'] = $cardData;
		return  $this->insertRecord($data);
		echo $this->db->last_query();
	}




	public function getDataProductWeight($postdata)
	{
		// $proId = $this->utility->safe_b64decode($postdata['pro_id']);

		$data['table'] = TABLE_PRODUCT_WEIGHT;
		$data['select'] = ['id', 'price', 'quantity', 'weight_no', 'discount_per', 'discount_price', 'product_id', 'without_gst_price', 'limited_stock'];
		$data['where'] = [
			'status!=' => '9',
			'id' => $this->utility->safe_b64decode($postdata['product_varient_id']),
		];
		return $this->selectRecords($data);
	}

	public function getVarientImage($product_varient_id)
	{
		$data['table'] = TABLE_PRODUCT_IMAGE;
		$data['select'] = ['*'];
		$data['where'] = [
			'product_variant_id' => $product_varient_id,
			'branch_id' => $this->branch_id,
			'status!=' => '9'
		];
		$img = $this->selectRecords($data);
		if (count($img) <= 0) {
			$data['select'] = ['product_default_image as image'];
			$data['table'] = 'branch '; // vendor
			$data['where'] = ['id' => $this->branch_id, 'status!=' => '9'];
			return $this->selectRecords($data);
		} else {
			return $img;
		}
	}

	public function CartIncDec($postdata)
	{

		// print_r($postdata);
		// exit;
		$productId = $postdata['product_id'];

		$product_vairiant_id = $postdata['product_weight_id'];


		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pw.price', 'pw.id as pw_id', 'pw.quantity', 'pw.weight_id', 'pw.discount_per', 'pw.discount_price', 'pw.without_gst_price', 'pw.max_order_qty'];
		$data['join'] = [TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT']];
		$data['where'] = [
			'p.status !=' => '9',
			// 'pw.vendor_id'=>$this->branch_id,
			'pw.id' => $product_vairiant_id
		];
		return $this->selectFromJoin($data);
	}

	public function manageMycartRecord($postData)
	{

		$prod_id = $postData('product_id');
		$weight_id = $postData('weight_id');
		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		$data['where'] = [

			'user_id' => $this->session->userdata('user_id'),
			// 'product_id'=>$prod_id,
			'weight_id' => $weight_id,
			'branch_id' => $this->branch_id

		];
		$res =  $this->selectRecords($data);

		print_r($res);
	}


	public function getUserAddressLatLong()
	{
		$data['table'] = TABLE_USER_ADDRESS;
		$data['select'] = ['latitude', 'longitude'];
		$data['where'] = ['user_id' => $this->session->userdata('user_id'), 'status' => '1'];
		return $this->selectRecords($data);
	}

	public function getDeliveryCharge($lat, $long, $vendor_id, $cart_price)
	{
		// echo $this->branch_id;die;


		if (isset($this->branch_id)) {

			$data['select'] = ['latitude', 'longitude'];
			$data['table'] = 'branch';
			$data['where'] = ['id' => $this->branch_id];
			$get_vandor_address = $this->selectRecords($data);
			$getkm = $this->circle_distance($lat, $long, $get_vandor_address[0]->latitude, $get_vandor_address[0]->longitude);
			$getkm = round($getkm);
			// print_r($getkm);
			// die;
			unset($data);
			$data['select'] = ['id']; //change
			$data['table'] = 'delivery_charge';
			$data['where'] = ['start_range <=' => $getkm, 'end_range >=' => $getkm, 'vendor_id' => $this->session->userdata('vendor_id')];
			$range_id = $this->selectRecords($data, true);

			unset($data);
			$data['select'] = ['delivery_charge'];
			$data['where'] = ['start_price <=' => (int)$cart_price, 'end_price >=' => (int)$cart_price, 'delivery_range_id' => $range_id[0]['id']];
			$data['table'] = 'delivery_charge_price_range';
			$res = $this->selectRecords($data);
			// lq();
			// print_r($res);
			// die;

			if (count($res) > 0) {
				return $res[0]->delivery_charge;
			} else {
				$res = '0.00';
				return $res;
			}



			//backup
			// $get_range = $this->selectRecords($data);

			// if (count($get_range)) {
			// 	return $get_range[0]->price;
			// } else {
			// 	$get_range = 'NotInRange';
			// 	return $get_range;
			// }
		}
	}

	public function DefaultProductAddInCart($varient_id)
	{

		$varient_id = $this->utility->safe_b64decode($varient_id);

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = [
			'p.*', 'pw.price', 'pw.id as pw_id', 'pw.quantity', 'pw.weight_id', 'pw.discount_per', 'pw.discount_price', 'pi.image', 'pw.weight_no', 'pw.max_order_qty', 'pw.without_gst_price'
		];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['where']['p.status'] = '1';
		$data['where']['pw.status!='] = '9';
		$data['where']['pw.id'] = $varient_id;
		// $data['groupBy'] = 'p.id';	
		return $this->selectFromJoin($data);
	}

	public function getWeightName($weight_id)
	{
		$data['table'] = TABLE_WEIGHT;
		$data['select'] = ['*'];
		$data['where'] = ['id' => $weight_id];
		return $this->selectRecords($data);
	}

	public function circle_distance($lat1, $lon1, $lat2, $lon2)
	{
		$rad = 3.14 / 180;

		return acos(sin($lat2 * ($rad)) * sin($lat1 * $rad) + cos($lat2 * $rad) * cos($lat1 * $rad) * cos($lon2 * $rad - $lon1 * $rad)) * 6371;
	}

	public function checkOrderItemExist($product_id, $varient_id)
	{

		$vender_id = $this->branch_id;
		$user_id = $this->session->userdata('user_id');
		$data['table'] = TABLE_ORDER_DETAILS . ' od';
		$data['join'] = [TABLE_ORDER . ' as o' => ['o.id=od.order_id', 'LEFT']];
		$data['select'] = ['od.*'];
		$data['where'] =  [
			'od.product_id' => $product_id,
			'od.product_weight_id' => $varient_id,
			'o.user_id' => $user_id,
			'o.branch_id' => $vender_id,
			'o.order_status' => '8',
		];
		$data['groupBy'] = 'od.product_id';
		return $this->selectFromJoin($data);
	}

	public function checkProductExist($postdata)
	{
		$product_id = $this->utility->safe_b64decode($postdata['product_id']);
		$product_weight_id = $this->utility->safe_b64decode($postdata['product_weight_id']);
		$data['table'] = 'wishlist';
		$data['select'] = ['*'];
		$data['where'] = [
			'product_weight_id' => $product_weight_id,
			'user_id' => $this->session->userdata('user_id'),
			'branch_id' => $this->branch_id,
		];
		return $this->selectRecords($data);
	}

	public function getProductReview($product_id, $varient_id)
	{
		$data['table'] = TABLE_USER_PRODUCT_REVIEW . ' upr';
		$data['select'] = ['upr.*', 'u.fname', 'u.lname'];
		$data['join'] = [TABLE_USER . ' u' => ['upr.user_id=u.id', 'LEFT']];
		$data['where'] = [
			'product_id' => $product_id,
			'product_varient_id' => $varient_id,
		];
		return $this->selectFromJoin($data);
	}
	public function countParticularUserReview($product_id, $varient_id)
	{
		$data['table'] = TABLE_USER_PRODUCT_REVIEW;
		$data['select'] = ['*'];
		$data['where'] = [
			'product_id' => $product_id,
			'product_varient_id' => $varient_id,
			'user_id' => $this->session->userdata('user_id')
		];
		return $this->countRecords($data);
	}

	public function insertProductToWishlist($insertArray)
	{
		$data['table'] = 'wishlist';
		$data['insert'] = $insertArray;
		return $this->insertRecord($data);
	}

	public function removeProductToWishlist($id)
	{
		$data['table'] = 'wishlist';
		$data['where']['id'] = $id;
		return $this->deleteRecords($data);
	}

	public function getUsersWishlist()
	{

		$data['table'] = 'wishlist';
		$data['select'] = ['*'];
		$data['where'] = ['user_id' => $this->session->userdata('user_id')];
		$r = $this->selectRecords($data);
		$wish_pid = [];
		foreach ($r as $key => $v) {
			array_push($wish_pid, $v->product_weight_id);
		}
		return $wish_pid;
	}

	public function getNameCateBrand($table_name, $id)
	{
		$data['table'] = $table_name;
		$data['select'] = ['name'];
		$data['where'] = ['id' => $id];
		$return =  $this->selectRecords($data);
		return $return[0]->name;
	}

	public function getAllSubCategory($cat_id = '')
	{
		if ($cat_id != '') {
			$data['where']['category_id'] = $cat_id;
		}

		$data['table'] = TABLE_SUBCATEGORY;
		$data['where']['branch_id'] = $this->branch_id;
		$data['where']['status !='] = '9';
		$data['select'] = ['*'];
		return $this->selectRecords($data);
	}




	public function getRelatedProduct($cat_id, $varient_ids)
	{

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.*', 'pi.image as product_image', 'pw.id as pw_id', 'pw.price', 'pw.discount_price', 'pw.id as pw_id', 'pw.quantity', 'pw.discount_per', 'pw.weight_id', 'pw.without_gst_price', 'pw.limited_stock as limited_stock'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT'],
			TABLE_WEIGHT . ' as w' => ['w.id = pw.weight_id', 'LEFT'],
		];
		$data['where'] = [
			'p.status !=' => '9',
			'pw.status !=' => '9',
			'p.category_id' => $cat_id,
			'p.branch_id' => $this->branch_id,
		];
		$data['where_not_in'] =	['pw.id' => $varient_ids];
		$data['order'] = 'pw.quantity DESC';
		$data['groupBy'] = ['p.id'];
		$data['limit'] = '400';
		return  $this->selectFromJoin($data);
	}

	public function getCategoryName($id)
	{
		$data['table'] = TABLE_CATEGORY;
		$data['select'] = ['name'];
		$data['where'] = ['id' => $id];
		$res = $this->selectRecords($data);
		return $res[0]->name;
	}

	public function globalSearch($keyword)
	{

		$data['table'] = TABLE_PRODUCT . ' p';
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' pw' => ['p.id=pw.product_id', 'LEFT']
		];
		$data['select'] = ['p.id', 'p.name'];
		$data['where'] = ['p.branch_id' => $this->branch_id, 'p.status !=' => '9', 'pw.status !=' => '9'];
		$data["group"]['like'] = ['p.name', $keyword, 'both'];
		$data["group"]['or_like'] = ['p.name', $keyword, 'both'];
		$data['groupBy'] = 'p.id';
		return $this->selectFromJoin($data);
		echo $this->db->last_query();
		die;
	}

	// public function globalSearch($keyword){
	// 	
	// 	$data['table'] = TABLE_PRODUCT;
	// 	$data['select'] = ['id','name'];
	// 	$data['where'] = ['vendor_id'=>$this->branch_id,'status !='=>'9'];
	// 	$data['like'] = ['name',$keyword,'both'];

	// 	return $this->selectRecords($data);
	// }

	public function getProductVarientDetails($product_id)
	{

		$data['table'] = TABLE_PRODUCT_WEIGHT;
		$data['select'] = ['id'];
		$data['where'] = ['branch_id' => $this->branch_id, 'product_id' => $product_id, 'status !=' => '9'];
		return $this->selectRecords($data);
	}


	public function getMyCart($user_id = '')
	{

		if ($user_id == '') {
			$user_id = $this->session->userdata('user_id');
		}

		$data['table'] = TABLE_MY_CART . ' as mc';
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['pw.id=mc.product_weight_id', 'LEFT'],
			TABLE_PRODUCT . ' as p' => ['pw.product_id=p.id', 'LEFT'],
			TABLE_WEIGHT . ' as w' => ['pw.weight_id=w.id', 'LEFT'] //DK added with two last fields
		];
		$data['select'] = ['p.food_type', 'mc.*', 'pw.discount_price', 'pw.product_id', 'pw.price', 'pw.discount_per', 'pw.weight_id', 'pw.without_gst_price', 'pw.weight_no as weight_no', 'w.name as weight_name'];
		$data['where']['mc.user_id'] = $user_id;
		$data['where']['mc.branch_id'] = $this->branch_id;
		$return = $this->selectFromJoin($data);
		return $return;
	}

	public function getMyCartOrder()
	{
		$data['table'] = 'my_cart';
		$data['select'] = [
			'my_cart.*',
			'product_weight.discount_price',
			'product_weight.discount_per',
			'product_weight.product_id',
			'product_weight.price as actual_price',
			'product_weight.weight_id',
			'product_weight.without_gst_price',
			'product.gst'
		];
		$data['join'] = [
			'product_weight' => ['product_weight.id = my_cart.product_weight_id', 'LEFT'],
			'product' => ['product.id = product_weight.product_id', 'LEFT']
		];
		$data['where']['my_cart.user_id'] = $this->session->userdata('user_id');
		$data['where']['my_cart.branch_id'] = $this->session->userdata('branch_id');
		$return = $this->selectFromJoin($data);
		return $return;
	}

	public function GetUsersProductInCart($product_weight_id)
	{
		// $productId = $this->utility->safe_b64decode($product_id);

		$data['table'] = TABLE_PRODUCT . " as p";
		$data['select'] = ['p.name', 'pw.id as pw_id', 'pw.discount_per', 'pw.discount_price', 'pw.product_id as product_id', 'pi.image', 'pw.price', 'p.gst', 'pw.without_gst_price'];
		$data['join'] = [
			TABLE_PRODUCT_WEIGHT . ' as pw' => ['p.id = pw.product_id', 'LEFT'],
			TABLE_PRODUCT_IMAGE . ' as pi' => ['pw.id = pi.product_variant_id', 'LEFT']
		];
		$data['where'] = [
			'pw.status !=' => '9',
			'p.status !=' => '9',
			'pw.id' => $product_weight_id,
		];
		$data['groupBy'] = 'p.id';
		return $this->selectFromJoin($data);
	}

	public function getMyUpdatedCart($postdata)
	{
		$user_id = $this->session->userdata('user_id');
		$data['table'] = TABLE_MY_CART;
		$data['select'] = ['*'];
		$data['where']['user_id'] = $user_id;
		$data['where']['product_weight_id'] = $postdata['product_weight_id'];
		return $this->selectRecords($data);
	}

	public function getBranchDtails()
	{
		$branch_id = $this->session->userdata('branch_id');
		$data['table'] = TABLE_BRANCH;
		$data['select'] = ['*'];
		$data['where']['id'] = $branch_id;
		return $this->selectRecords($data);
	}

	public function clear_cart()
	{
		$user_id = $this->session->userdata('user_id');
		$data['table'] = TABLE_MY_CART;
		$data['where'] = ['user_id' => $user_id];
		return $this->deleteRecords($data);
	}

	public function insertReview($postData)
	{
		$insertData = array(
			'user_id' => $this->session->userdata('user_id'),
			'branch_id' => $this->session->userdata('branch_id'),
			'product_id' => $this->utility->safe_b64decode($postData['product_id']),
			'product_varient_id' => $this->utility->safe_b64decode($postData['varient_id']),
			'review' => $postData['comment'],
			'ratting' => isset($postData['ratetIndex']) ? $postData['ratetIndex'] : 0,
			'dt_created' => date('Y-m-d h:i:s'),
			'dt_updated' => date('Y-m-d h:i:s')
		);
		$data['table'] = TABLE_USER_PRODUCT_REVIEW;
		$data['insert'] = $insertData;
		return $this->insertRecord($data);
	}
}
