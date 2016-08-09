<?php

	class Model_intern extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		// FUNGSI AMBIL DATA
		function get_list_intern(){
			$query = $this->db->query("SELECT * FROM list_intern");
			return $query;
		}

		function get_category_portfolio(){
			$query = $this->db->query("SELECT * FROM category_portfolio");
			return $query;
		}

		function get_label_intern(){
			$query = $this->db->query("SELECT * FROM label_intern");
			return $query;
		}

		// FUNGSI INSERT portfolio, LABEL portfolio, CATEGORY portfolio
		function insert_list_intern($id_list, $name, $instance, $department, $start_date, $finish_date){
			$names = $this->db->escape_str($name);
			$instances = $this->db->escape_str($instance);
			$departments = $this->db->escape_str($department);
			$start_dates = $this->db->escape_str($start_date);
			$finish_dates = $this->db->escape_str($finish_date);
			if($id_list == ""){
				$this->db->query("INSERT INTO list_intern(name, instance, department, start_date, finish_date) VALUES('$names','$instances', '$departments', '$start_dates', '$finish_dates')");
			}else{
				$this->db->query("UPDATE list_intern SET name = '$names', instance = '$instances', department = '$departments', start_date = '$start_dates', finish_date = '$finish_dates' WHERE id_list_intern = '$id_list'");
			}
		}

		function insert_category_portfolio($id_category, $name_en, $name_id){
			$name_eng = $this->db->escape_str($name_en);
			$name_ind = $this->db->escape_str($name_id);
			if($id_category == ""){
				$this->db->query("insert into category_portfolio(name_en, name_id) values('$name_eng','$name_ind')");
			}else{
				$this->db->query("update category_portfolio set name_en = '$name_eng', name_id = '$name_ind' where id_category_portfolio = '$id_category'");
			}
		}

		function insert_label_intern($id_label_intern, $label_en, $label_id, $position){
			$position = $this->db->escape_str($position);
			$label_eng = $this->db->escape_str($label_en);
			$label_ind = $this->db->escape_str($label_id);
			if($id_label_intern == ""){
				$this->db->query("INSERT INTO label_intern (position, label_en, label_id) VALUES ('$position','$label_eng','$label_ind')");
			}else{
				$this->db->query("UPDATE label_intern SET position = '$position', label_en = '$label_eng', label_id='$label_ind' WHERE id_label_intern = '$id_label_intern'");
			}
		}
		// AKHIR FUNGSI INSERT POROTOFLIO, LABEL portfolio, CATEGORY portfolio

		//FUNGSI DELETE
		function delete_list_intern($id_list_intern){
			$this->db->query("DELETE FROM list_intern WHERE id_list_intern = '$id_list_intern'");
		}

		function delete_category_portfolio($id){
			$this->db->query("DELETE FROM `category_portfolio` WHERE id_category_portfolio = '$id'");
		}

		function delete_label_intern($id_label_intern){
			$this->db->query("DELETE FROM label_intern WHERE id_label_intern = '$id_label_intern'");
		}
		// AKHIR FUNGSI DELETE

	}
?>