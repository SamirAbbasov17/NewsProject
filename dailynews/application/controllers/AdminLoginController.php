<?php
class AdminLoginController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminLoginModel');
    }

    public function index(){
        $this->load->view("admin/create_admin");
    }
    public function admin_list()
    {
        $data['get_all_admins'] = $this->db->order_by('id','DESC')->get('admin_list')->result_array() ;
        $this->load->view("admin/admin_list",$data);
    }
    public function createAdminAct()
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $status = $_POST['stat'];

        if(!empty($name) && !empty($username) && !empty($password) && !empty($status)){

            $config['upload_path']          = 'uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';

            $this->upload->initialize($config);

            if ( $this->upload->do_upload('file'))
            {
                $img = $this->upload->data('file_name');

                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => md5($password),
                    'status' => $status,
                    'img' => $img,
                ];

                $this->AdminLoginModel->insertNews($data);
                redirect(base_url('admin_list'));
            }
            else
            {
                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => md5($password),
                    'status' => $status,
                ];

                $this->AdminLoginModel->insertNews($data);
                redirect(base_url('admin_list'));

            }
        }
        else{
            echo ("bosluq buraxma");

        }
    }
    public function deleteAdminNews($id){
        $this->AdminLoginModel->deleteNews($id);
        redirect(base_url('admin_list'));

    }
    public function updateAdminNews($id){
        $data['get_single_news'] = $this->AdminLoginModel->getSingleData($id);
        $this->load->view('admin/update_admin_page',$data);
    }
    public function detailAdminNews($id){
        $data['get_single_news'] = $this->AdminLoginModel->getSingleData($id);
        $this->load->view('admin/admin_detail',$data);
    }



    public function updateAdminAct($id){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $status = $_POST['stat'];

        if(!empty($name) && !empty($username) && !empty($password) && !empty($status)){

            $config['upload_path']          = 'uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';

            $this->upload->initialize($config);

            if ( $this->upload->do_upload('file'))
            {
                $img = $this->upload->data('file_name');

                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => md5($password),
                    'status' => $status,
                    'img' => $img,
                ];

                $this->AdminLoginModel->updateNews($id,$data);
                redirect(base_url('admin_list'));
            }
            else
            {
                $data = [
                    'name' => $name,
                    'username' => $username,
                    'password' => md5($password),
                    'status' => $status,
                ];

                $this->AdminLoginModel->updateNews($id,$data);
                redirect(base_url('admin_list'));

            }
        }
        else{
            $this->session->set_flashdata('err','Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);

        }
    }


}
