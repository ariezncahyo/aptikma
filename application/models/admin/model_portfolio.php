<?php

	class Model_portfolio extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		// FUNGSI AMBIL DATA
		function get_portfolio(){
			$query = $this->db->query("SELECT * FROM portfolio_portfolio");
			return $query;
		}

		function get_category_portfolio(){
			$query = $this->db->query("SELECT * FROM category_portfolio");
			return $query;
		}

		function get_label_portfolio(){
			$query = $this->db->query("SELECT * FROM label_portfolio");
			return $query;
		}

		// FUNGSI INSERT portfolio, LABEL portfolio, CATEGORY portfolio
		function insert_portfolio($id_portfolio, $title_eng, $title_ind, $desc_eng, $desc_ind, $url_links, $kategori){
			$title_en = $this->db->escape_str($title_eng);
			$title_id = $this->db->escape_str($title_ind);
			$desc_en = $this->db->escape_str($desc_eng);
			$desc_id = $this->db->escape_str($desc_ind);
			$url_link = $this->db->escape_str($url_links);
			$category = $this->db->escape_str($kategori);
			if($id_portfolio == ""){
				$this->db->query("INSERT INTO portfolio_portfolio(title_en, title_id, desc_en, desc_id, url_link, category) VALUES('$title_en','$title_id', '$desc_en', '$desc_id', '$url_link', 'category')");
			}else{
				$this->db->query("UPDATE portfolio_portfolio SET title_en = '$title_en', title_id = '$title_id', desc_en = '$desc_en', desc_id = '$desc_id', url_link = '$url_link', category = '$category' WHERE id_portfolio_portfolio = '$id_portfolio'");
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

		function insert_label_portfolio($id_label_portfolio, $label_en, $label_id, $position){
			$position = $this->db->escape_str($position);
			$label_eng = $this->db->escape_str($label_en);
			$label_ind = $this->db->escape_str($label_id);
			if($id_label_portfolio == ""){
				$this->db->query("INSERT INTO label_portfolio(position, label_en, label_id) VALUES ('$position','$label_eng','$label_ind')");
			}else{
				$this->db->query("UPDATE label_portfolio SET position = '$position', label_en = '$label_eng', label_id='$label_ind' WHERE id_label_portfolio = '$id_label_portfolio'");
			}
		}
		// AKHIR FUNGSI INSERT POROTOFLIO, LABEL portfolio, CATEGORY portfolio

		// FUNGSI UPDATE
		function update_portfolio($id_portfolio_portfolio, $title_en, $title_id, $desc_en, $desc_id, $url_link, $category){
			$this->db->query("UPDATE portfolio_portfolio SET title_en = '$title_en', title_id = '$title_id', desc_en = '$desc_en', desc_id = '$desc_id', url_link = '$url_link', categori = '$category' WHERE id_portfolio_portfolio = '$id_portfolio_portfolio'");
		}

		function update_category_portfolio($id_category, $name_en, $name_id){
			$this->db->query("UPDATE category_portfolio SET name_en = '$name_en', name_id = '$name_id' WHERE id_category_portfolio_ = '$id_category'");
		}

		function update_label_portfolio($id_label_portfolio, $position, $label_en, $label_id){
			$this->db->query("UPDATE label_portfolio SET position = '$position', label_en = '$label_en', label_id='label_id' WHERE id_label_portfolio = '$id_label_portfolio'");
		}
		// AKHIR FUNGSI UPDATE 

		//FUNGSI DELETE
		function delete_portfolio($id_portfolio_portfolio){
			$this->db->query("DELETE FROM portfolio_portfolio WHERE id_portfolio_portfolio = '$id_portfolio_portfolio'");
		}

		function delete_category_portfolio($id){
			$this->db->query("DELETE FROM `category_portfolio` WHERE id_category_portfolio = '$id'");
		}

		function delete_label_portfolio($id_label_portfolio){
			$this->db->query("delete from label_portfolio where id_label_portfolio = '$id_label_portfolio'");
		}
		// AKHIR FUNGSI DELETE

	}
?>