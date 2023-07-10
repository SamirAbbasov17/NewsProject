<?php
class AdminVideoController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminVideoModel');
    }

    public function index(){
        $this->load->view("admin/create_video");
    }
    public function admin_video_list()
    {
        $data['get_all_video'] = $this->db->order_by('id','DESC')->get('video')->result_array() ;
        $this->load->view("admin/admin_video_list",$data);
    }
    public function createVideoAdminAct()
    {
        $title = $_POST['title'];
        $video = $_POST['video'];
        $cate = $_POST['cate'];
        $date = $_POST['date'];
        $stat = $_POST['stat'];


        if(!empty($title) && !empty($video) && !empty($cate) && !empty($date) && !empty($stat)){

            $config['upload_path']          = 'uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';

            $this->upload->initialize($config);

            if ( $this->upload->do_upload('file'))
            {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'video'       => $video,
                    'category'    => $cate,
                    'date'        => $date,
                    'status'      => $stat,
                    'img'         => $img,
                ];

                $this->AdminVideoModel->insertNews($data);
                redirect(base_url('admin_video_list'));
            }
            else
            {
                $data = [
                    'title'       => $title,
                    'video'       => $video,
                    'category'    => $cate,
                    'date'        => $date,
                    'status'      => $stat,
                ];

                $this->AdminVideoModel->insertNews($data);
                redirect(base_url('admin_video_list'));

            }
        }
        else{
            echo ("bosluq buraxma");

        }
    }
    public function deleteVideoAdminNews($id){
        $this->AdminVideoModel->deleteNews($id);
        redirect(base_url('admin_video_list'));

    }
    public function updateVideoAdminNews($id){
        $data['get_single_news'] = $this->AdminVideoModel->getSingleData($id);
        $this->load->view('admin/update_video_page',$data);
    }
    public function detailVideoAdminNews($id){
        $data['get_single_news'] = $this->AdminVideoModel->getSingleData($id);
        $this->load->view('admin/video_detail',$data);
    }



    public function updateVideoAdminAct($id){

        $title = $_POST['title'];
        $video = $_POST['video'];
        $cate = $_POST['cate'];
        $date = $_POST['date'];
        $stat = $_POST['stat'];

        if(!empty($title) && !empty($video) && !empty($cate) && !empty($date) && !empty($stat)){

            $config['upload_path']          = 'uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|pdf';

            $this->upload->initialize($config);

            if ( $this->upload->do_upload('file'))
            {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'video'       => $video,
                    'category'    => $cate,
                    'date'        => $date,
                    'status'      => $stat,
                    'img'         => $img,
                ];

                $this->AdminVideoModel->updateNews($id,$data);
                redirect(base_url('admin_video_list'));
            }
            else
            {
                $data = [
                    'title'       => $title,
                    'video'       => $video,
                    'category'    => $cate,
                    'date'        => $date,
                    'status'      => $stat,
                ];

                $this->AdminVideoModel->updateNews($id,$data);
                redirect(base_url('admin_video_list'));

            }
        }
        else{
            $this->session->set_flashdata('err','Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);

        }
    }


}
