<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Social_media_post extends Vendor_Controller
{

    function __construct()
    {
        parent::__construct();


        $this->load->model('Social_media_post_model', 'this_model');;
    }

    public function index()
    {

        $data['getPosts'] = $this->this_model->getPosts();

        $this->load->view('social_posts/list', $data);
    }


    public function gettheme()
    {

        $vendorData = $this->this_model->getVendorData();

        $data['newQuotes'] = "";
        $data['newColor'] = "";
        if (isset($_POST['newQuotes']) && isset($_POST['newColor'])) {
            $data['newQuotes'] = $_POST['newQuotes'];
            $data['newColor'] = $_POST['newColor'];
        }
        $data['detail_set'] = $_POST['detail_set'];
        $data['theme'] = $_POST['theme_name'];
        $data['vendorData'] = $vendorData;
        $data['quotes'] = $this->quotes();

        $festival_quotes = explode('_', $_POST['theme_name']);
        $data['festival_quotes'] = $festival_quotes[0];
        $html = $this->load->view('social_posts/createPostPreview', $data, true);


        echo $html;
    }

    public function view_posts($id)
    {
        $data['getPostsDetail'] = $this->this_model->getPostsDetails($id);
        $data['getThemePost'] = $this->this_model->getThemePostsDetails($id);

        $this->load->view('social_posts/view_posts', $data);
    }

    public function save_image()
    {
        $vendorData = $this->this_model->getVendorData();

        if (isset($_POST['image'])) {
            $img = $_POST['image'];
            $img = str_replace('data:image/png;base64,', '', $img); // Remove the data URL header
            $img = str_replace(' ', '+', $img); // Replace spaces with '+' (if any)
            $data = base64_decode($img);

            $folder_name = $vendorData[0]->name; //shopname
            $folder_name = preg_replace('/\s+/', '', $folder_name);

            $filename = time() . '.png'; // Desired filename
            $folderPath = FCPATH . 'public/images/' . $folder_name . '/social_posts/';
            if (!file_exists($folderPath)) {
                if (mkdir($folderPath, 0777, true)) { // You can adjust the permissions as needed
                    echo 'Folder created successfully.';
                } else {
                    echo 'Unable to create folder.';
                }
            }

            $filePath = $folderPath . $filename;

            if (file_put_contents($filePath, $data) !== false) {

                $this->this_model->storePosts($filename);
                echo 'Image saved as ' . $filename;
            } else {
                echo 'Unable to save image.';
            }
        }
    }


    public function quotes()
    {

        $quotes = [
            'dussehra' => "This Dussehra, wishing you to develop all the qualities of Lord Rama. May you be an idol son, a perfect brother and an idyllic husband! Happy Dussehra.",
            'friendship_day' => "There is nothing on this earth more to be prized than true friendship.",
            'gandhi_jayanti' => "Let us celebrate the occasion of Gandhi Jayanti by remembering Mahatma Gandhi and by following the path he showed us.",
            'ganesh_chaturthi' => "This Ganesh Chaturthi, may Lord Ganesha bless you with success and happiness. Heartwarming greetings on Ganesh Chaturthi!",
            'independence_day' => "Let us follow in the footsteps of our forefathers and make our country strong and prosperous. Happy Independence Day.",
            'janmashtami' => "Wish you a very happy Janmashtami. May Lord Krishna empower you with good health and peace.",
            'national_handloom_day' => "A good life is like weaving. Energy is created in the tension. The struggle, the pull, and tug are everything.",
            'navratri' => "May goddess Durga empowers you with the light of knowledge and truth. Happy Navratri.",
            'onam' => "The Onam is an occasion for people to remind themselves of the all pervasive nature of divine. Happy Onam.",
            'raksha_bandhan' => "May your bond of love be strong and unbreakable. Wishing you a very Happy Raksha Bandhan!",
            'teachers_day' => "Good teaching is more a giving of right questions than a giving of right answers.",
        ];
        return $quotes;
    }
}
