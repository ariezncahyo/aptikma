<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class aptikma extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('mkelas');
        //$this->load->helper('form','url');
        $this->load->helper(array('url','form'));
    }

    public function index()
	{
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_homepage_model');
        $this->load->model('services_homepage_model');
        $this->load->model('contact_homepage_model');
        $this->load->model('whychoose_homepage_model');
        $this->load->model('category_portfolio_model');
        $this->load->model('portfolio_portfolio_model');   
        $this->load->model('blog_blog_model');    
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
		$this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_homepage'] = $this->label_homepage_model->listlabel();
        $this->data['services_homepage'] = $this->services_homepage_model->listservices();
        $this->data['contact_homepage'] = $this->contact_homepage_model->listcontact();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();
        $this->data['category_portfolio'] = $this->category_portfolio_model->listcategory();
        $this->data['portfolio_portfolio'] = $this->portfolio_portfolio_model->listportfolio();            
        $this->data['blog_blog'] = $this->blog_blog_model->listblog();
        $this->data['page'] = "1";
        $this->load->view('index', $this->data);
    }
    
    public function aboutus()
    {
        $this->load->model('menu_homepage_model');        
        $this->load->model('seo_homepage_model');
        $this->load->model('label_aboutus_model');
        $this->load->model('ourgoal_aboutus_model');
        $this->load->model('ourskill_aboutus_model');
        $this->load->model('skillvalue_aboutus_model');
        $this->load->model('whychoose_homepage_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_aboutus'] = $this->label_aboutus_model->listlabel();
        $this->data['ourgoal_aboutus'] = $this->ourgoal_aboutus_model->listourgoal();
        $this->data['ourskill_aboutus'] = $this->ourskill_aboutus_model->listourskill();
        $this->data['skillvalue_aboutus'] = $this->skillvalue_aboutus_model->listskillvalue();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();  
        $this->data['page'] = "2";          
        $this->load->view('aboutus', $this->data);    
    }

    public function services()
    {
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_services_model');
        $this->load->model('summary_services_model');
        $this->load->model('services_services_model');
        $this->load->model('features_services_model');
        $this->load->model('other_services_model');
        $this->load->model('whychoose_homepage_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_services'] = $this->label_services_model->listlabel();
        $this->data['summary_services'] = $this->summary_services_model->listsummary();
        $this->data['services_services'] = $this->services_services_model->listservices();
        $this->data['features_services'] = $this->features_services_model->listfeatures();
        $this->data['other_services'] = $this->other_services_model->listother();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();        
        $this->data['page'] = "3";
        $this->load->view('services', $this->data);    
    }

    public function portfolio()
    {
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_portfolio_model');
        $this->load->model('category_portfolio_model');
        $this->load->model('portfolio_portfolio_model');
        $this->load->model('features_services_model');
        $this->load->model('other_services_model');
        $this->load->model('whychoose_homepage_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_portfolio'] = $this->label_portfolio_model->listlabel();
        $this->data['category_portfolio'] = $this->category_portfolio_model->listcategory();
        $this->data['portfolio_portfolio'] = $this->portfolio_portfolio_model->listportfolio();
        $this->data['features_services'] = $this->features_services_model->listfeatures();
        $this->data['other_services'] = $this->other_services_model->listother();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();    
        $this->data['page'] = "4";    
        $this->load->view('portfolio', $this->data);    
    }

    public function contactus()
    {
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_contactus_model');
        $this->load->model('contact_homepage_model');
        $this->load->model('portfolio_portfolio_model');
        $this->load->model('features_services_model');
        $this->load->model('other_services_model');
        $this->load->model('whychoose_homepage_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_contactus'] = $this->label_contactus_model->listlabel();
        $this->data['contact_homepage'] = $this->contact_homepage_model->listcontact();
        $this->data['portfolio_portfolio'] = $this->portfolio_portfolio_model->listportfolio();
        $this->data['features_services'] = $this->features_services_model->listfeatures();
        $this->data['other_services'] = $this->other_services_model->listother();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();  
        $this->data['page'] = "5";      
        $this->load->view('contactus', $this->data);    
    }

    public function blog()
    {
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_blog_model');
        $this->load->model('blog_blog_model');
        $this->load->model('category_blog_model');
        $this->load->model('other_services_model');
        $this->load->model('whychoose_homepage_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_blog'] = $this->label_blog_model->listlabel();
        $this->data['blog_blog'] = $this->blog_blog_model->listblog();
        $this->data['category_blog'] = $this->category_blog_model->listcategory();
        //$this->data['latest_blog'] = $this->blog_blog_model->latestblog();
        $this->data['other_services'] = $this->other_services_model->listother();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();        
        $this->data['page'] = "6";
        $this->load->view('blog', $this->data);    
    }

    public function career()
    {
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_career_model');
        $this->load->model('job_career_model');
        $this->load->model('category_blog_model');
        $this->load->model('features_services_model');
        $this->load->model('other_services_model');
        $this->load->model('whychoose_homepage_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_career'] = $this->label_career_model->listlabel();
        $this->data['job_career'] = $this->job_career_model->listjob();
        $this->data['category_blog'] = $this->category_blog_model->listcategory();
        $this->data['features_services'] = $this->features_services_model->listfeatures();
        $this->data['other_services'] = $this->other_services_model->listother();
        $this->data['whychoose_homepage'] = $this->whychoose_homepage_model->listwhychoose();  
        $this->data['page'] = "7";      
        $this->load->view('career', $this->data);    
    }    

    public function intern()
    {
        $this->load->model('menu_homepage_model');
        $this->load->model('seo_homepage_model');
        $this->load->model('label_intern_model');
        $this->load->model('list_intern_model');
        $this->load->model('page_intern_model');
        $this->data['menu_homepage'] = $this->menu_homepage_model->listmenu();
        $this->data['seo_homepage'] = $this->seo_homepage_model->listseo();
        $this->data['label_intern'] = $this->label_intern_model->listlabel();
        $this->data['list_intern'] = $this->list_intern_model->listlist();
        $this->data['page_intern'] = $this->page_intern_model->listpage();
        $this->data['page'] = "8";
        $this->load->view('intern', $this->data);    
    }    

}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */