<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AroggaPackCheck extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('custom_helper');
    }

    public function Index()
    {
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $msisdn = '';
        $msisdn = $queries['msisdn'];
        $is_sebscribe = false;
        $subs_package = [];
        $page_info['message_success'] = '';
        $page_info['message_error'] = '';
        $baseUrl = hpBaseUrl();

        if ($msisdn) {
            $this->session->set_userdata('msisdn', $msisdn);

            $header = array(
                'Content-Type: application/json'
            );

            $param = array(
                "msisdn" => $msisdn
            );

            $postdata = json_encode($param);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $baseUrl . "/v5/medicinedelivery/aroggaUserSubscriptionStatus");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $result = json_decode($result);

            if ($httpcode == 200) {
                //print_r_pre('200');
                if ($result->is_subscribed) {
                    $is_sebscribe = $result->is_subscribed;
                    $subs_package = $result->subscribed_pack;
                }
            } else {
                //print_r_pre($result->message);
                $this->session->set_flashdata('message_error', $result->message);
                //redirect(base_url('?msisdn=' . $msisdn));
            }

            //print_r_pre('Okay');
        }


        $page_info['message_error'] = ($this->session->flashdata('message_error')) ? $this->session->flashdata('message_error') : '';


        if ($this->session->flashdata('message_success')) {
            $page_info['message_success'] = $this->session->flashdata('message_success');
        }

        $page_info['is_sebscribe'] = $is_sebscribe;
        $page_info['subs_package'] = $subs_package;
        $page_info['view_page'] = 'aroggaPack/arogga_pack_check';
        $this->title = 'Arogga Packages ' . $this->site_name;
        $this->load->view('layout/default', $page_info);
    }

    public function subscirbe_request()
    {
        $package_type = '';
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $package_type = $queries['package_type'];
        $subs_ststus = false;
        $msisdn = $this->session->userdata('msisdn');
        $package_array = ['student_arogga', 'family_arogga', 'onetime_arogga'];
        $result = '';
        $message_success = '';
        $message_error = '';
        $baseUrl = hpBaseUrl();

        if (in_array($package_type, $package_array)) {
            $header = array(
                'Content-Type: application/json'
            );

            $param = array(
                "msisdn" => $msisdn,
                "pack"  => $package_type
            );
            $postdata = json_encode($param);
            //print_r_pre($postdata);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $baseUrl . "/v5/medicinedelivery/purchaseArogga");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $result = json_decode($result);
            if ($httpcode == 200) {
                $message_success = $result->message;
                $subs_ststus = true;
            } else {
                $message_error = $result->message;
            }
        } else {
            $this->session->set_flashdata('message_error', 'Invalid package');
        }
        $page_info['message_success'] = $message_success;
        $page_info['message_error'] = $message_error;
        $page_info['subs_ststus'] = $subs_ststus;
        $page_info['view_page'] = 'aroggaPack/subscribed_ststus';
        $this->title = 'Arogga Packages ' . $this->site_name;
        $this->load->view('layout/default', $page_info);
        //print_r_pre($package_type);
    }
}
