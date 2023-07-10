<?php
class AdminController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('AdminModel');
        }


        public function index()
        {
            $this->load->view("admin/login");
        }

        public function loginAct(){

            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!empty($username) && !empty($password) ){

                $data = [
                    'username' => $username,
                    'password' => md5($password),
                ];
                $getAdmin = $this->AdminModel->checkAdmin($data);
                if($getAdmin){
                    $_SESSION['user_id'] = $getAdmin['id'];
                    redirect(base_url('dashboard'));

                }else{
                    $this->session->set_flashdata('err','Istifadeci adi veya sifre yanlisdir!');
                    redirect($_SERVER['HTTP_REFERER']);
                }

            }else{
                $this->session->set_flashdata('err','Bosluq buraxmayin!');
                redirect($_SERVER['HTTP_REFERER']);
            }


        }
        public function logOut(){

            unset($_SESSION['user_id']);
            redirect(base_url('admin_index'));
        }


        public function dashboard()
        {
            $this->load->view("admin/dashboard");
        }
        public function news()
        {
            $data['get_all_news'] = $this->AdminModel->getAllData();
            $this->load->view("admin/news",$data);

        }

        public function create()
        {
            $this->load->view("admin/create_page");
        }

        public function createAct()
        {
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $cate = $_POST['cate'];
            $date = $_POST['date'];
            $stat = $_POST['stat'];

            if(!empty($title) && !empty($desc) && !empty($cate) && !empty($date) && !empty($stat)){

                $config['upload_path']          = 'uploads/news/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';

                $this->upload->initialize($config);

                if ( $this->upload->do_upload('file'))
                {
                    $img = $this->upload->data('file_name');

                    $data = [
                        'title'       => $title,
                        'description' => $desc,
                        'category'    => $cate,
                        'date'        => $date,
                        'status'      => $stat,
                        'img'         => $img,

                     ];

                    $this->AdminModel->insertNews($data);
                    redirect(base_url('news'));
                }
                else
                {
                    $data = [
                        'title'       => $title,
                        'description' => $desc,
                        'category'    => $cate,
                        'date'        => $date,
                        'status'      => $stat,

                    ];
                    $this->AdminModel->insertNews($data);
                    redirect(base_url('news'));

                }
            }
            else{
                echo ("bosluq buraxma");

            }
        }

        public function deleteNews($id){
            $this->AdminModel->deleteNews($id);
            redirect(base_url('news'));

        }
        public function updateNews($id){
            $data['get_single_news'] = $this->AdminModel->getSingleData($id);
            $this->load->view('admin/update_page',$data);
        }
        public function detailNews($id){
            $data['get_single_news'] = $this->db->where('id',$id)->get('news')->row_array() ;
            $this->load->view('admin/detail',$data);
        }

        public function updateAct($id){

            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $cate = $_POST['cate'];
            $date = $_POST['date'];
            $stat = $_POST['stat'];

            if(!empty($title) && !empty($desc) && !empty($cate) && !empty($date) && !empty($stat)){

                $config['upload_path']          = 'uploads/news/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';

                $this->upload->initialize($config);

                if ( $this->upload->do_upload('file'))
                {
                    $img = $this->upload->data('file_name');

                    $data = [
                        'title'       => $title,
                        'description' => $desc,
                        'category'    => $cate,
                        'date'        => $date,
                        'status'      => $stat,
                        'img'         => $img,

                    ];
                    $this->AdminModel->updateNews($id,$data);
                    redirect(base_url('news'));
                }
                else
                {
                    $data = [
                        'title'       => $title,
                        'description' => $desc,
                        'category'    => $cate,
                        'date'        => $date,
                        'status'      => $stat,

                    ];

                    $this->AdminModel->updateNews($id,$data);
                    redirect(base_url('news'));

                }
            }
            else{
                $this->session->set_flashdata('err','Bosluq buraxmayin!');
                redirect($_SERVER['HTTP_REFERER']);

            }
        }

}