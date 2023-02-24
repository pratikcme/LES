<?php
class LanguageLoader
{
    function initialize() { 

        $ci =& get_instance();
        $ci->load->helper('language');
         // $ci->session->set_userdata('site_lang', 'ar');
        $siteLang = $ci->session->userdata('site_lang');
        // echo $siteLang ;die;
        if ($siteLang) {
            $ci->lang->load('message',$siteLang);
        } else {
            $ci->lang->load('message','en');
        }
    }
}