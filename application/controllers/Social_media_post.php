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


    public function gettheme($theme)
    {

        $data['theme'] = $theme;
        $html =  $this->load->view('social_posts/socialtheme', $data, true);

        $redirectURL = base_url();
        $redirectHtml = "<a href='$redirectURL'>Click here to be redirected</a>";

        // Combine the generated HTML and the redirect HTML
        $combinedHtml = $html . $redirectHtml;

        // Output the combined HTML
        echo $combinedHtml;
        // echo $html;
    }

    public function view_posts($id)
    {
        $data['getPostsDetail'] = $this->this_model->getPostsDetails($id);
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
}
