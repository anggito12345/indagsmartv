<?php 
$this->load->library('session');

if($_SESSION['username'] == null) {
    redirect('/login','location');
    return;
}
?>

<?php $this->load->view('_layout/header'); ?>

<?php $this->load->view('_layout/sidebar-left'); ?>

<?php $this->load->view('_layout/nav-top'); ?>

<?php $this->load->view('main/' . $konten); ?>

<?php $this->load->view('_layout/sidebar-right'); ?>

<?php $this->load->view('_layout/footer'); ?>