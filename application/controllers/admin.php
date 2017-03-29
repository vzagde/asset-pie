<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// $this->load->library('Grocery_CRUD');
		// $this->load->library('grocery_CRUD');
		// $this->load->library('image_CRUD');
		// $this->load->helper('form');
		// $this->load->helper('url');
		$this->load->library('session');
		$this->load->library('financial');

		// if (!$this->session->userdata('user_data')) {
		// 	redirect('index.php/login');
		// 	die();
		// }
	}

	public function index() {
		$que_res = $this->db->query('SELECT * FROM users WHERE id = 1');
		$data['parent_goals'] = $this->db->query('SELECT * FROM parent_goals')->result();

		if ($que_res->num_rows() > 0) {
			$this->session->set_userdata('user_details', $que_res->result()[0]);
			$data['users_details'] = $que_res->result();
		}

		$this->load->view('goal_setting', $data);
	}

	public function dashboard(){
		if ($this->session->userdata('user_details')) {
			$data = $this->db->query("SELECT * FROM users_goals WHERE user_id = '".$this->session->userdata('user_details')->id."'");
			if ($data->num_rows() > 0) {
				$user_data['goal_details'] = json_encode($data->result());
				$this->load->view('dashboard', $user_data);
			} else {
				redirect('admin');
			}
		} else {
			redirect('admin');
		}
	}

	public function goal_listing(){
		if ($this->session->userdata('user_details')) {
			$goals_list = $this->db->query("SELECT * FROM users_goals JOIN goals ON users_goals.goal_id = goals.id AND users_goals.user_id = ".$this->session->userdata('user_details')->id)->result();
			foreach ($goals_list as $key => $value) {
				$goals_data[$key] = array(
						'id' => $value->goal_id,
						'name' => $value->name,
						'amount' => $value->amount,
						'loan_flag' => $value->loan_flag,
					);
			}
		}
		$data['goals'] = $goals_data;
		$this->load->view('goal_listing', $data);
	}

	public function income_expense_submit($personal_assets_amount, $investment_assets_debt_amount, $investment_assets_equity_amount, $investment_assets_commodities_amount, $investment_assets_real_eastate_amount, $investment_assets_other_inv_amount, $inocme_salary, $inocme_spouse_salary, $inocme_professional, $inocme_rental, $inocme_dividends, $inocme_pension, $inocme_interest, $inocme_others, $expense_rent, $expense_household_living, $expense_travel, $expense_entertainment, $expense_medical, $expense_personal, $expense_misc){

	}

	public function income_expense_que(){
		$this->load->view('income_expense_que');
	}
}
