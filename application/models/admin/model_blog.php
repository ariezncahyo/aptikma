<?php

class Model_blog extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_banner_blog(){
		$query = $this->db->query("SELECT * FROM banner_blog");
		return $query;
	}

	function get_label_blog(){
		$query = $this->db->query("SELECT * FROM label_blog");
		return $query;
	}

	function get_category_blog(){
		$query = $this->db->query("SELECT * FROM category_blog");
		return $query;
	}

	function get_tag_blog(){
		$query = $this->db->query("SELECT * FROM tag_blog");
		return $query;
	}

	function get_skillvalue_aboutus(){
		$query = $this->db->query("SELECT * FROM skillvalue_aboutus");
		return $query;
	}

	function get_whychoose_aboutus(){
		$query = $this->db->query("SELECT * FROM whychoose_aboutus");
		return $query;
	}

	// INSERT FUNCTION QUERY
	function insert_banner_blog($id_banner, $image){
		if($id_banner == ""){
			$this->db->query("INSERT INTO banner_blog(image) VALUES ('$image')");
		}else{
			$this->db->query("UPDATE banner_blog SET image = '$image' WHERE id_banner_blog = '$id_banner'");
		}
	}

	public function insert_label_blog($id_label, $position, $label_en, $label_id){
	 	if($id_label == ""){
            $this->db->query("insert into label_blog (position,label_en,label_id) values ('$position','$label_en','$label_id')");
        }else{
        	$this->db->query("update label_blog set position = '$position',label_en = '$label_en',label_id = '$label_id' where id_label_blog = '$id_label'");
        }
    }

	public function insert_category_blog($id_category, $name_en, $name_id){
	 	if($id_category == ""){
            $this->db->query("insert into category_blog (name_en,name_id) values ('$name_en','$name_id')");
        }else{
        	$this->db->query("update category_blog set name_en = '$name_en',name_id = '$name_id' where id_category_blog = '$id_category'");
        }
    }


	public function insert_tag_blog($id_tag, $name){
	 	if($id_tag == ""){
            $this->db->query("insert into tag_blog (name) values ('$name')");
        }else{
        	$this->db->query("update tag_blog set name = '$name' where id_tag_blog = '$id_tag'");
        }
    }

	function insert_skillvalue_aboutus($id_skillvalue, $title_en, $title_id, $value){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$values = $this->db->escape_str($value);
		if($id_skillvalue == ""){
			$this->db->query("INSERT INTO skillvalue_aboutus(title_en, title_id, value) VALUES ('$title_eng', '$title_ind', '$values')");
		}else{
			$this->db->query("UPDATE skillvalue_aboutus SET title_en = '$title_eng', title_id = '$title_ind', value = '$values' WHERE  id_skillvalue_aboutus = '$id_skillvalue'");
		}
	}	

	function insert_whychoose_aboutus($id_whychoose, $title_en, $title_id, $desc_en, $desc_id, $image){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		$images = $this->db->escape_str($image);
		if($id_whychoose == ""){
			$this->db->query("INSERT INTO whychoose_aboutus(title_en, title_id, desc_en, desc_id, image) VALUES ('$title_eng', '$title_ind', '$desc_eng', '$desc_ind', '$images')");
		}else{
			$this->db->query("UPDATE whychoose_aboutus SET title_en = '$title_eng', title_id = '$title_ind', desc_en = '$desc_eng', desc_id = '$desc_ind', image = '$images' WHERE id_whychoose_aboutus = '$id_whychoose'");
		}
	}	

	// DELETE FUNCTION
	function delete_banner_blog($id_banner){
		$this->db->query("DELETE FROM banner_blog WHERE id_banner_blog = '$id_banner'");
	}

	function delete_label_blog($id_label_blog){

        $this->db->query("DELETE FROM label_blog WHERE id_label_blog = '$id_label_blog'");
        }

	function delete_category_blog($id_category_blog){
		$this->db->query("DELETE FROM category_blog WHERE id_category_blog = '$id_category_blog'");
	}

	function delete_tag_blog($id_tag_blog){
		$this->db->query("DELETE FROM tag_blog WHERE id_tag_blog = '$id_tag_blog'");
	}

	function delete_skillvalue_aboutus($id_skillvalue){
		$this->db->query("DELETE FROM skillvalue_aboutus WHERE id_skillvalue_aboutus = '$id_skillvalue'");
	}

	function delete_whychoose_aboutus($id_whychoose){
		$this->db->query("DELETE FROM whychoose_aboutus WHERE id_whychoose_aboutus = '$id_whychoose'");
	}

}

?>