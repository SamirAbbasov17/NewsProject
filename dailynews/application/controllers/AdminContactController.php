<?php
class AdminContactController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminContactModel');
    }

//    public function index(){
//        $this->load->view("admin/create_contact");
//    }
    public function admin_contact_list()
    {
        $data['get_all_contact'] = $this->db->order_by('id','DESC')->get('contact')->result_array() ;
        $this->load->view("admin/admin_contact_list",$data);
    }
    public function createContactAdminAct()
    {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        $text = $_POST['text'];

        $data = [
            'name' => $name,
            'mail' => $mail,
            'subject' => $subject,
            'text' => $text,
        ];

        $this->AdminContactModel->insertNews($data);
        redirect(base_url('contact'));
    }
    public function deleteContactAdminNews($id){
        $this->AdminContactModel->deleteNews($id);
        redirect(base_url('admin_contact_list'));

    }
//    public function updateContactAdminNews($id){
//        $data['get_single_news'] = $this->AdminContactModel->getSingleData($id);
//        $this->load->view('admin/update_contact_page',$data);
//    }
    public function detailContactAdminNews($id){
        $data['get_single_news'] = $this->AdminContactModel->getSingleData($id);
        $this->load->view('admin/contact_detail',$data);
    }



//    public function updateContactAdminAct($id){
//
//        $name = $_POST['name'];
//        $username = $_POST['username'];
//        $password = $_POST['password'];
//        $status = $_POST['stat'];
//
//        if(!empty($name) && !empty($username) && !empty($password) && !empty($status)){
//
//            $config['upload_path']          = 'uploads/news/';
//            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';
//
//            $this->upload->initialize($config);
//
//            if ( $this->upload->do_upload('file'))
//            {
//                $img = $this->upload->data('file_name');
//
//                $data = [
//                    'name' => $name,
//                    'username' => $username,
//                    'password' => md5($password),
//                    'status' => $status,
//                    'img' => $img,
//                ];
//
//                $this->AdminContactModel->updateNews($id,$data);
//                redirect(base_url('admin_contact_list'));
//            }
//            else
//            {
//                $data = [
//                    'name' => $name,
//                    'username' => $username,
//                    'password' => md5($password),
//                    'status' => $status,
//                ];
//
//                $this->AdminContactModel->updateNews($id,$data);
//                redirect(base_url('admin_contact_list'));
//
//            }
//        }
//        else{
//            $this->session->set_flashdata('err','Bosluq buraxmayin!');
//            redirect($_SERVER['HTTP_REFERER']);
//
//        }
//    }


}
