<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<?php $this->load->view('partials/default/header'); ?>

<?php if (isset($view_page)) {
    $this->load->view($view_page);
} ?>

<?php $this->load->view('partials/default/footer'); ?>