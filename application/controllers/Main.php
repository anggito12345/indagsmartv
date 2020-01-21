<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// MAIN NAVIGATION
	public function index()
	{
		$this->data['konten'] = 'index.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard2()
	{
		$this->data['konten'] = 'panel-page-dashboard2.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard3()
	{
		$this->data['konten'] = 'panel-page-dashboard3.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard4()
	{
		$this->data['konten'] = 'panel-page-dashboard4.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard5()
	{
		$this->data['konten'] = 'panel-page-dashboard5.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard6()
	{
		$this->data['konten'] = 'panel-page-dashboard6.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard7()
	{
		$this->data['konten'] = 'panel-page-dashboard7.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard8()
	{
		$this->data['konten'] = 'panel-page-dashboard8.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard9()
	{
		$this->data['konten'] = 'panel-page-dashboard9.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard10()
	{
		$this->data['konten'] = 'panel-page-dashboard10.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function dashboard11()
	{
		$this->data['konten'] = 'panel-page-dashboard11.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function products()
	{
		$this->data['konten'] = 'panel-page-products.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function products_create()
	{
		$this->data['konten'] = 'panel-page-products-create.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function users()
	{
		$this->data['konten'] = 'panel-page-users.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function users_create()
	{
		$this->data['konten'] = 'panel-page-users-create.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function profile()
	{
	  $this->data['konten'] = 'panel-page-profile.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function inbox()
	{
		$this->data['konten'] = 'panel-page-inbox.html';
      $this->load->view('_layout/master', $this->data);
	}

	public function sipermen() {
		$this->data['konten'] = 'sipermen.php';
		$this->load->view('_layout/master', $this->data);
	}

	public function siki() {
		$this->data['konten'] = 'siki.php';
		$this->load->view('_layout/master', $this->data);
	}

	public function giis() {
		$this->data['konten'] = 'giis.php';
		$this->load->view('_layout/master', $this->data);
	}

	public function sikapd() {
		$this->data['konten'] = 'sikapd.php';
		$this->load->view('_layout/master', $this->data);
	}
	
	public function eresleting() {
		$this->data['konten'] = 'eresleting.php';
		$this->load->view('_layout/master', $this->data);
	}



	public function panel7_inbox()
	{
		$this->data['konten'] = 'panel7-inbox.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function panel8_inbox()
	{
		$this->data['konten'] = 'panel8-inbox.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function inbox_create()
	{
		$this->data['konten'] = 'panel-page-inbox-create.html';
      $this->load->view('_layout/master', $this->data);
	}
	// UI COMPONENT -> APPS
	public function chat()
	{
		$this->data['konten'] = 'panel-page-chat.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function tasks()
	{
		$this->data['konten'] = 'panel7-tasks.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function calender()
	{
		$this->data['konten'] = 'panel-page-calendar.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function calender2()
	{
		$this->data['konten'] = 'panel-page-calendar2.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function contacts()
	{
		$this->data['konten'] = 'panel-page-contacts.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function projects()
	{
		$this->data['konten'] = 'panel1-projects.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function projects_list()
	{
		$this->data['konten'] = 'panel7-projects-list.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function invoices()
	{
		$this->data['konten'] = 'panel7-invoices.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function meetings()
	{
		$this->data['konten'] = 'panel7-meetings.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function payments()
	{
		$this->data['konten'] = 'panel7-payments.html';
      $this->load->view('_layout/master', $this->data);
	}
	// UI COMPONENT -> PAGES
	// BLANK PAGES
	public function blank()
	{
		$this->data['konten'] = 'panel-page-blank.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function blank_tabs()
	{
		$this->data['konten'] = 'panel-page-blank-tabs.html';
      $this->load->view('_layout/master', $this->data);
	}
	// AUTH PAGES
	public function login1()
	{
		$this->data['konten'] = 'login.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function login2()
	{
		$this->data['konten'] = 'login-2.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function login3()
	{
		$this->data['konten'] = 'login-3.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function login4()
	{
		$this->data['konten'] = 'login-4.html';
      $this->load->view('_layout/master', $this->data);
	}
	// ERROR PAGES
	public function error404()
	{
		$this->data['konten'] = 'panel-page-404.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function error500()
	{
		$this->data['konten'] = 'panel-page-500.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function error420()
	{
		$this->data['konten'] = 'panel-page-420.html';
      $this->load->view('_layout/master', $this->data);
	}
	// OTHER PAGE
	public function invoice()
	{
		$this->data['konten'] = 'panel-page-invoice.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function no_posts()
	{
		$this->data['konten'] = 'panel-page-no-posts.html';
      $this->load->view('_layout/master', $this->data);
	}
	// UI COMPONENT -> ELEMENTS
	public function widgets()
	{
		$this->data['konten'] = 'panel-element-widgets.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function counters()
	{
		$this->data['konten'] = 'panel-element-counters.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function buttons()
	{
		$this->data['konten'] = 'panel-element-buttons.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function typography()
	{
		$this->data['konten'] = 'panel-element-typography.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function tables()
	{
		$this->data['konten'] = 'panel-element-tables.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function alerts()
	{
		$this->data['konten'] = 'panel-element-alerts.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function slider()
	{
		$this->data['konten'] = 'panel-element-slider.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function tabs()
	{
		$this->data['konten'] = 'panel-element-tabs.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function progress()
	{
		$this->data['konten'] = 'panel-element-progress-bars.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function badges()
	{
		$this->data['konten'] = 'panel-element-badges.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function preloaders()
	{
		$this->data['konten'] = 'panel-element-preloaders.html';
      $this->load->view('_layout/master', $this->data);
	}
	// UI COMPONENT -> FORM & PLUGINS
	public function inputs()
	{
		$this->data['konten'] = 'panel-element-forms.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function form_jquery()
	{
		$this->data['konten'] = 'form-jquery-validations.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function form_bootstrap()
	{
		$this->data['konten'] = 'form-bootstrap-validations.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function editor()
	{
		$this->data['konten'] = 'panel-element-editor.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function toasts()
	{
		$this->data['konten'] = 'panel-element-toasts.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function stepper()
	{
		$this->data['konten'] = 'panel-element-stepper.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function date_time()
	{
		$this->data['konten'] = 'panel-element-date-time-picker.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function colors()
	{
		$this->data['konten'] = 'panel-element-color-picker.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function range_slider()
	{
		$this->data['konten'] = 'panel-element-range-slider.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function select2()
	{
		$this->data['konten'] = 'panel-element-select2.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function tags()
	{
		$this->data['konten'] = 'panel-element-tags.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function datatables()
	{
		$this->data['konten'] = 'panel-element-data-tables.html';
      $this->load->view('_layout/master', $this->data);
	}
	// UI COMPONENT -> CHARTS
	public function charts()
	{
		$this->data['konten'] = 'panel-element-charts-js.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function morris()
	{
		$this->data['konten'] = 'panel-element-morris.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function echarts()
	{
		$this->data['konten'] = 'panel-element-echarts.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function easy_pie()
	{
		$this->data['konten'] = 'panel-element-easy-pie-charts.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function jqvmap()
	{
		$this->data['konten'] = 'panel-element-jqvmap.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function sparklines()
	{
		$this->data['konten'] = 'panel-element-sparklines.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function float()
	{
		$this->data['konten'] = 'panel-element-float.html';
      $this->load->view('_layout/master', $this->data);
	}
	// UI COMPONENT -> EXTRA
	public function avatar()
	{
		$this->data['konten'] = 'panel-element-letters.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function icons()
	{
		$this->data['konten'] = 'panel-element-icons.html';
      $this->load->view('_layout/master', $this->data);
	}
	public function color()
	{
		$this->data['konten'] = 'panel-element-colors.html';
      $this->load->view('_layout/master', $this->data);
	}

}
