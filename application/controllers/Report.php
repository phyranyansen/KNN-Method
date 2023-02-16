<?php
use Dompdf\Dompdf;
use FontLib\Table\Type\head;

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Report extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $cek = $this->session->userdata('login');
        $url =   $url = current_url();
		$url_cek = $this->session->userdata('url-server');
        if($cek!='sign_up')
		{
            if($url!=$url_cek)
			{
			    redirect(base_url());

            }
            
		}
    }
    
    public function index()
    {
        $npm = $this->session->userdata('npm');
        $data['normalisasi']  = $this->model->get_normalisasi();
        $data['distance']     = $this->model->get_distance_where($npm);
        $data['training']     = $this->model->get_data('data_training');
        $data['testing']      = $this->model->get_testing_where($npm);
        $data['kode']         = 'RP_KNN';
        $data['title']        = 'Report Pengujian';


        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "KNN-Report.pdf";
        $this->load->view('pages/report/content/header', $data);
        $this->pdf->load_view('pages/report/report_pengujian', $data);
		$this->load->view('pages/report/modal/modal_pengujian', $data);
		$this->load->view('pages/report/content/footer');
              
    }
    
    public function mhs()
    {
        $npm     = $this->session->userdata('mhs');
        $jurusan = $this->session->userdata('jurusan');
        if($jurusan=='%')
        {
            $label = 'SISTEM INFORMASI & TEKNIK ELEKTRO';
        }else{
            $label = strtoupper($jurusan);

        }
        $data['mahasiswa']    = $this->model->get_mahasiswa_where($npm, $jurusan);
        $data['kode']         = 'RP_MHS';
        $data['pdf']          = 'mhs-pdf';
        $data['label']        = $label;
        $data['mhs']          = $this->model->get_data('mahasiswa');
        $data['jurusan']      = $this->model->get_data('jurusan');
        $data['title']        = 'Report Mahasiswa';
        
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Mahasiswa-Report.pdf";
        $this->load->view('pages/report/content/header', $data);
		$this->pdf->load_view('pages/report/report_mahasiswa', $data);
		$this->load->view('pages/report/modal/modal_mahasiswa', $data);
		$this->load->view('pages/report/content/footer');
              
    }

    public function dosen()
    {
        $nip     = $this->session->userdata('dosen');
        $jurusan = $this->session->userdata('dosen_jurusan');
        if($jurusan=='%')
        {
            $label = 'SISTEM INFORMASI & TEKNIK ELEKTRO';
        }else{
            $label = strtoupper($jurusan);

        }
        $data['dsn']          = $this->model->get_dosen_where($nip, $jurusan);
        $data['kode']         = 'RP_DSN';
        $data['pdf']          = 'dosen-pdf';
        $data['label']        = $label;
        $data['dosen']        = $this->model->get_data('dosen');
        $data['jurusan']      = $this->model->get_data('jurusan');
        $data['title']        = 'Report Dosen';
        
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Dosen-Report.pdf";
        $this->load->view('pages/report/content/header', $data);
		$this->pdf->load_view('pages/report/report_dosen', $data);
		$this->load->view('pages/report/modal/modal_dosen', $data);
		$this->load->view('pages/report/content/footer');
              
    }

    public function data()
    {
        $kode = $this->session->userdata('data_uji');
        $data['data_uji']      = $this->model->get_data_uji($kode);
        $data['kode']         = 'RP_DTU';
        $data['pdf']          = 'data-pdf';
        $data['title']        = 'Report Data Uji';
        
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Data-Report.pdf";
        $this->load->view('pages/report/content/header', $data);
		$this->pdf->load_view('pages/report/report_data', $data);
		$this->load->view('pages/report/modal/modal_data', $data);
		$this->load->view('pages/report/content/footer');
              
    }

}