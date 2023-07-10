<?php


class UserController extends CI_Controller {

    public function index()
    {
        $data['getNewsLimit'] = $this->db->order_by('id','desc')->limit(5)->get('news')->result_array();
        $data['sportCategory'] = $this->db->order_by('id','desc')->Where('category','Sport')->get('news')->result_array();
        $data['videoLink'] = $this->db->order_by('id','desc')->get('video')->result_array();
        $data['allNews'] = $this->db->order_by('id','desc')->get('news')->result_array();
        $data['allNewsPopular'] = $this->db->limit(4)->order_by('id','RANDOM')->get('news')->result_array();





        $config['base_url']=base_url('index');
        $config['total_rows']=$this->db->count_all("news");
        $config['uri_segment']=2;
        $config['per_page']=7;
        $config['num_links']=4;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2))?$this->uri->segment(2):0;

        $data['results'] = $this->db->limit($config['per_page'],$page)->order_by('id','desc')->get('news')->result_array();
        $data['links'] = $this->pagination->create_links();





//        print_r('<pre>');
//        print_r($data['links']);
//        die();
        $this->load->view("user/index",$data);

    }
    public function blog()
    {
//        $data['Category'] = $this->db->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
//        $data['Category'] = $this->db->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
//        $data['Category'] = $this->db->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
//        $data['Category'] = $this->db->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();




        $data['allNewsPopular'] = $this->db->limit(4)->order_by('id','RANDOM')->get('news')->result_array();

        $cate = $this->uri->segment(2);

        $query = $this->db->Where('category',$cate)->get('news');
        $main = $query->num_rows();


        $config['base_url']=base_url('blog/'.$cate);
        $config['total_rows']=$main;
        $config['uri_segment']=3;
        $config['per_page']=7;
        $config['num_links']=3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3))?$this->uri->segment(3):0;


//        $data['results'] = $this->db->limit($config['per_page'],$page)->get('news')->result_array();
        $data['Category'] = $this->db->limit($config['per_page'],$page)->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
        $data['Category'] = $this->db->limit($config['per_page'],$page)->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
        $data['Category'] = $this->db->limit($config['per_page'],$page)->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
        $data['Category'] = $this->db->limit($config['per_page'],$page)->order_by('id','desc')->Where('category',$cate)->get('news')->result_array();
        $data['news'] = $cate;
        $data['links'] = $this->pagination->create_links();





        $data['allNews'] = $this->db->order_by('id','RANDOM')->get('news')->result_array();
        $this->load->view("user/blog",$data);
    }
    public function contact()
    {
        $this->load->view("user/Contact_us");
    }
    public function single($id)
    {
        $data['getSingleNews'] = $this->db->where('id',$id)->get('news')->row_array();
        $data['allNews'] = $this->db->order_by('id','desc')->get('news')->result_array();
        $data['allNewsPopular'] = $this->db->limit(4)->order_by('id','RANDOM')->get('news')->result_array();
//        print_r('<pre>');
//        print_r($data['getSingleNews']);
//        die();
        $this->load->view("user/single",$data);
    }

}