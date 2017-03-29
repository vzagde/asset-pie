<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('Grocery_CRUD');
		$this->load->library('session');
		header("Access-Control-Allow-Origin: *");
		header('Content-Type: application/json');
	}

	public function index(){
		echo $this->jsonify(array('error' => 'Unauthorised Access'));
	}

	public function goals_list($goal_selection){
		$goals = $this->db->query("SELECT goals.id AS goal_id, parent_goals.id AS parent_goal_id, goals.name AS goal_name, parent_goals.goal_name AS parent_goal_name, parent_goals.cloud_image AS parent_goal_image FROM goals JOIN parent_goals ON goals.parent_id = parent_goals.id AND goals.parent_id = '".$goal_selection."'");
		if ($goals->num_rows() > 0) {
			echo json_encode($goals->result());
		}
	}

	public function add_goal($cur_age, $age_at_goal, $goal_amount, $goal_id, $goal_parent_id, $gender, $loan_status, $name) {
		$data['goal_id'] = $goal_id;
		$data['user_id'] = $this->session->userdata('user_details')->id;
		$data['cur_age'] = $cur_age;
		$data['age_at_goal'] = $age_at_goal;
		$data['amount'] = $goal_amount;
		$data['loan_flag'] = $loan_status;

		if ($goal_parent_id == 2) {
			$data['name'] = $name;
			$data['gender'] = $gender;
		} else {
			$data['name'] = $this->session->userdata('user_details')->name;
			$data['gender'] = $this->session->userdata('user_details')->gender;
		}

		$this->db->insert('users_goals', $data);
	}

	public function get_ideal_chart_data(){
		if ($this->session->userdata('user_details')) {
			$this->db->where('id', $this->session->userdata('user_details')->id);
			$user_data = $this->db->get('users');

			if ($user_data->num_rows() > 0) {
				$user_data = $user_data->row();
				$risk_profile = $user_data->risk_profile;
				$pie_data = $this->calculate_goals_ideal($user_data, $risk_profile);

				echo json_encode($pie_data);
			} else {
				echo json_encode(array("status" => "Failed"));
			}
		} else {
			echo json_encode(array("status" => "Failed"));
		}
	}

	function calculate_goals_ideal($user_data, $risk_profile) {
		$asset_class_total_amount['DEBT'] = 0;
		$asset_class_total_amount['EQUITY'] = 0;
		$asset_class_total_amount['REAL ESTATE'] = 0;
		$asset_class_total_amount['GOLD'] = 0;
		$asset_class_total_amount['ALT. INVST.'] = 0;
		$assets_rate = $this->db->query("SELECT * FROM asset_class_rate JOIN asset_class ON asset_class_rate.asset_class = asset_class.id AND asset_class_rate.rp_type = ".$risk_profile)->result();

		$users_goals = $this->db->query("SELECT * FROM users_goals JOIN goals ON users_goals.goal_id = goals.id WHERE users_goals.user_id = '".$user_data->id."'")->result();

		$users_goal_amount_sum = $this->db->query("SELECT SUM(amount) AS sum FROM users_goals WHERE user_id = '".$user_data->id."'")->row();

		foreach ($users_goals as $key => $value) {
			$drilldown_pie_data = array();
			$amount_per = ($value->amount / $users_goal_amount_sum->sum) * 100;

			foreach ($assets_rate as $key => $val) {
				$value_per = ($val->rate / 100) * $amount_per;
				if ($value_per > 0) {
					$asset_class_total_amount[$val->asset_class] += ($val->rate / 100) * $amount_per;
					$drilldown_pie_data[$val->id]['category'] = array(
							'asset_class' => $val->asset_class,
							'color' => $val->color,
							'value_per' => ($val->rate / 100) * $amount_per,
						);
				}
			}

			$pie_data[$value->goal_id] = array(
					'goal_name' => $value->name,
					'amount' => $value->amount,
					'amount_per' => $amount_per,
					'drilldown_data' => $drilldown_pie_data
				);

			$data['asset_division'] = $asset_class_total_amount;
			$data['pie_data'] = $pie_data;
		}

		return $data;
	}


	public function dump_session(){
		print_r($this->session->userdata('user_details'));
	}
}