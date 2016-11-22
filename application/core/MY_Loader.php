<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * custom loader file extends CI_Loader
 */
 
class MY_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $content1 = $this->view('template/header', $vars, $return); // header
        $content0 = $this->view('template/navbar', $vars, $return); // header
        $content4 = $this->view('template/dashboard_menu', $vars, $return); // header
        $content2 = $this->view($template_name, $vars, $return); // view
        $content3 = $this->view('template/footer', $vars, $return); // footer

        if ($return) {
            return $content1;
            return $content0;
            return $content4;
            return $content2;
            return $content3;

        }
    }

    public function popupp($template_name, $vars = array(), $return = FALSE)
    {
        $content1 = $this->view('template/header_library', $vars, $return); // header
        $content2 = $this->view($template_name, $vars, $return); // view
        $content3 = $this->view('template/footer', $vars, $return); // footer

        if ($return) {
            return $content1;
            return $content2;
            return $content3;

        }
    }
}
