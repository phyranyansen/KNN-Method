<?php
//load Spout Library
require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';
// require_once 'third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Aplication extends CI_Controller {

    
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
       
        $data['testing']  = count($this->model->get_data('data_testing'));
        $data['training'] = count($this->model->get_data('data_training'));
        $data['mhs']      = count($this->model->get_data('mahasiswa'));
        $data['dsn']      = count($this->model->get_data('dosen'));
        $data['universitas'] = $this->model->get_row('universitas');
        $this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
    }

    public function universitas()
    {
        $data['title']      = 'Univeristas';
        $data['universitas']  = $this->model->get_data('universitas');
        $this->load->view('templates/header');
		$this->load->view('pages/data_universitas', $data);
		$this->load->view('templates/footer');
    }

    public function help_center()
    {
        $data['title']      = 'Information Center';
        $this->load->view('templates/header', $data);
		$this->load->view('pages/help_center');
		$this->load->view('templates/footer');
    }
    

    public function data_testing()
    {
        $data['title']      = 'Data Testing';
        $data['testing']    = $this->model->get_data('data_testing');
        $this->load->view('templates/header', $data);
		$this->load->view('pages/data_testing', $data);
		$this->load->view('templates/footer');
    }

    public function delete_data_testing_where()
    {
        $id = [
            'Id_testing' => $_POST['id_testing']
        ];
        $this->model->delete_where('data_testing', $id);
    }

    public function tambah_data_testing()
    {
        $data = [
            'NPM' => $_POST['npm'],
            'IPK' => $_POST['ipk'],
            'status_bekerja' => $_POST['status_bekerja'],
            'cuti_semester' => $_POST['cuti_semester'],
            'jumlah_mk_diulang' => $_POST['jumlah_mk_diulang'],
            'jumlah_organisasi' => $_POST['jumlah_organisasi'],
        ];
        $this->model->input_data('data_testing', $data);
    }

    public function where_data_testing()
    {
     
        $id = $_POST['id_testing'];
        $query = "select * from data_testing where Id_testing ='$id'";
        $result = $this->db->query($query)->row_array();
            $User_data = array();
            $User_data[0]=$result['Id_testing'];
            $User_data[1]=$result['NPM'];
            $User_data[2]=$result['IPK'];
            $User_data[3]=$result['status_bekerja'];
            $User_data[4]=$result['cuti_semester'];
            $User_data[5]=$result['jumlah_mk_diulang'];
            $User_data[6]=$result['jumlah_organisasi'];

        echo json_encode($User_data);
    }

    public function edit_data_testing()
    {
        $where = [
            'Id_testing' => $_POST['id_testing'],
        ];
        $data = [
            'NPM'            => $_POST['npm'],
            'IPK'            => $_POST['ipk'],
            'status_bekerja' => $_POST['status_bekerja'],
            'cuti_semester'  => $_POST['cuti_semester'],
            'jumlah_mk_diulang' => $_POST['jumlah_mk_diulang'],
            'jumlah_organisasi' => $_POST['jumlah_organisasi']
        ];
        $this->model->edit_data($where,$data,'data_testing');
        // echo json_encode('data berhasil disave!');
    }
    
    public function data_training()
    {
        $data['title']    = 'Data Training';
        $data['training']  = $this->model->get_data('data_training');
        $this->load->view('templates/header', $data);
		$this->load->view('pages/data_training', $data);
		$this->load->view('templates/footer');
    }
    public function delete_data_training_where()
    {
        $id = [
            'Id_training' => $_POST['id_trainig']
        ];
        $this->model->delete_where('data_training', $id);
    }

    public function tambah_data_training()
    {
        $data = [
            'NPM' => $_POST['npm'],
            'IPK' => $_POST['ipk'],
            'status_bekerja' => $_POST['status_bekerja'],
            'cuti_semester' => $_POST['cuti_semester'],
            'jumlah_mk_diulang' => $_POST['jumlah_mk_diulang'],
            'jumlah_organisasi' => $_POST['jumlah_organisasi'],
            'ket_lulus' => $_POST['ket_lulus'],
        ];
        $this->model->input_data('data_training',$data);
    }

    public function where_data_training()
    {

        $id    = $_POST['id_training'];
        $query = "SELECT * from data_training where Id_training ='$id'";
        $row   = $this->db->query($query)->row_array();
            $User_data = array();
            $User_data[0]=$row['Id_training'];
            $User_data[1]=$row['NPM'];
            $User_data[2]=$row['IPK'];
            $User_data[3]=$row['status_bekerja'];
            $User_data[4]=$row['cuti_semester'];
            $User_data[5]=$row['jumlah_mk_diulang'];
            $User_data[6]=$row['jumlah_organisasi'];
            $User_data[7]=$row['ket_lulus'];

        echo json_encode($User_data);
    }

    public function edit_data_training()
    {
        $where = [
            'Id_training' => $_POST['id_training'],
        ];
        $data = [
            'NPM'            => $_POST['npm'],
            'IPK'            => $_POST['ipk'],
            'status_bekerja' => $_POST['status_bekerja'],
            'cuti_semester'  => $_POST['cuti_semester'],
            'jumlah_mk_diulang' => $_POST['jumlah_mk_diulang'],
            'jumlah_organisasi' => $_POST['jumlah_organisasi'],
            'ket_lulus'         => $_POST['ket_lulus'],
        ];
        $this->model->edit_data($where, $data,'data_training');
    }
    
    public function pengujian()
    {

        $data['normalisasi']  = $this->model->get_normalisasi();
        $data['training']     = $this->model->get_data('data_training');
        $data['testing']      = $this->model->get_data('data_testing');
        $data['distance']     = $this->model->get_distance();
        $data['title']        = 'Pengujian';
        $this->load->view('templates/header', $data);
		$this->load->view('pages/pengujian', $data);
		$this->load->view('templates/footer');
    
    }
    
    public function mahasiswa()
    {
        $data['title']    = 'Mahasiswa';
        $data['mahasiswa']  = $this->model->get_mahasiswa();
        $this->load->view('templates/header', $data);
		$this->load->view('pages/data_mahasiswa', $data);
		$this->load->view('templates/footer');    
    }
    
    public function dosen()
    {
        $data['title']    = 'Dosen';
        $data['dosen']    = $this->model->get_dosen();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/data_dosen', $data);
        $this->load->view('templates/footer');

    }

    public function delete_dosen()
    {
        $this->model->delete_all('dosen');
    }

    public function delete_dosen_where()
    {
        $npm = [
            'Nip' => $_POST['nip']
        ];
        $this->model->delete_where('dosen', $npm);
    }

    public function tambah_dosen()
    {
        $data = [
            'Nip' => $_POST['nip'],
            'Nama' => $_POST['nama'],
            'Jenis_Kelamin' => $_POST['jenis_kelamin'],
            'Alamat' => $_POST['alamat'],
            'Id_jurusan' => $_POST['jurusan'],
        ];
        $this->model->input_data('dosen',$data);
    }

    public function where_dosen()
    {
        $con = mysqli_connect('localhost','root','','db_knn');
        $nip = $_POST['nip1'];
        $query = "select * from dosen where Nip ='$nip'";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $User_data = array();
            $User_data[0]=$row['Nip'];
            $User_data[1]=$row['Nama'];
            $User_data[2]=$row['Jenis_Kelamin'];
            $User_data[3]=$row['Alamat'];
            $User_data[4]=$row['Id_jurusan'];
        }
        echo json_encode($User_data);
    }

    public function edit_dosen()
    {
        $where = [
            'Nip' => $_POST['U_nip'],
        ];
        $data = [
            'Nip' => $_POST['U_nip'],
            'Nama' => $_POST['U_nama'],
            'Jenis_Kelamin' => $_POST['U_jenis_kelamin'],
            'Alamat' => $_POST['U_alamat'],
            'Id_jurusan' => $_POST['U_jurusan'],
        ];
        $this->model->edit_data($where,$data,'dosen');
    }

    public function fakultas()
    {
        $data['title']    = 'Fakultas';
        $data['fakultas']    = $this->model->get_data('fakultas');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/data_fakultas', $data);
        $this->load->view('templates/footer');

    }

    public function delete_fakultas()
    {
        $this->model->delete_all('fakultas');
    }

    public function delete_fakultas_where()
    {
        $npm = [
            'Id_Fakultas' => $_POST['id_fakultas']
        ];
        $this->model->delete_where('fakultas', $npm);
    }

    public function tambah_fakultas()
    {
        $data = [
            'Kode_Fakultas' => $_POST['kode_fakultas'],
            'Nama_Fakultas' => $_POST['nama_fakultas'],
        ];
        $this->model->input_data('fakultas',$data);
    }

    public function where_fakultas()
    {
        $con = mysqli_connect('localhost','root','','db_knn');
        $id = $_POST['id_fakultas1'];
        $query = "select * from fakultas where Id_Fakultas ='$id'";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $User_data = array();
            $User_data[0]=$row['Id_Fakultas'];
            $User_data[1]=$row['Kode_Fakultas'];
            $User_data[2]=$row['Nama_Fakultas'];
        }
        echo json_encode($User_data);
    }

    public function edit_fakultas()
    {
        $where = [
            'Id_Fakultas' => $_POST['U_id_Fakultas'],
        ];
        $data = [
            'Id_Fakultas' => $_POST['U_id_Fakultas'],
            'Kode_Fakultas' => $_POST['U_kode_Fakultas'],
            'Nama_Fakultas' => $_POST['U_nama_Fakultas'],
        ];
        $this->model->edit_data($where,$data,'fakultas');
    }

    public function jurusan()
    {
        $data['title']    = 'Jurusan';
        $data['jurusan']    = $this->model->get_jurusan();
        $data['fakultas']   = $this->model->get_data('fakultas');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/data_jurusan', $data);
        $this->load->view('templates/footer');

    }

    public function delete_jurusan()
    {
        $this->model->delete_all('jurusan');
    }

    public function delete_jurusan_where()
    {
        $npm = [
            'Id_jurusan' => $_POST['id_jurusan']
        ];
        $this->model->delete_where('jurusan', $npm);
    }

    public function tambah_jurusan()
    {
        $data = [
            'Id_Fakultas' => $_POST['id_fakultas'],
            'Nama_Jurusan' => $_POST['nama_jurusan'],
        ];
        $this->model->input_data('jurusan',$data);
    }

    public function where_jurusan()
    {
        $con = mysqli_connect('localhost','root','','db_knn');
        $id = $_POST['id_jurusan1'];
        $query = "select * from jurusan where Id_jurusan ='$id'";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $User_data = array();
            $User_data[0]=$row['Id_jurusan'];
            $User_data[1]=$row['Id_Fakultas'];
            $User_data[2]=$row['Nama_Jurusan'];
        }
        echo json_encode($User_data);
    }

    public function edit_jurusan()
    {
        $where = [
            'Id_jurusan' => $_POST['U_id_jurusan'],
        ];
        $data = [
            'Id_jurusan' => $_POST['U_id_jurusan'],
            'Id_Fakultas' => $_POST['U_id_fakultas'],
            'Nama_Jurusan' => $_POST['U_nama_jurusan'],
        ];
        $this->model->edit_data($where,$data,'jurusan');
    }

    public function matkul()
    {
        $data['title']    = 'Jurusan';
        $data['matkul']    = $this->model->get_data('matkul');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/data_matkul', $data);
        $this->load->view('templates/footer');
    }

    public function delete_matkul()
    {
        $this->model->delete_all('matkul');
    }

    public function delete_matkul_where()
    {
        $npm = [
            'Id_Matkul' => $_POST['id_matkul']
        ];
        $this->model->delete_where('matkul', $npm);
    }

    public function tambah_matkul()
    {
        $data = [
            'Nama_Matkul' => $_POST['nama_matkul']
        ];
        $this->model->input_data('matkul',$data);
    }

    public function where_matkul()
    {
        $con = mysqli_connect('localhost','root','','db_knn');
        $id = $_POST['id_matkul'];
        $query = "select * from matkul where Id_Matkul ='$id'";
        $result = mysqli_query($con,$query);
        
        while($row=mysqli_fetch_assoc($result))
        {
            $User_data = array();
            $User_data[0]=$row['Id_Matkul'];
            $User_data[1]=$row['Nama_Matkul'];
        }
        echo json_encode($User_data);
    }

    public function edit_matkul()
    {
        $where = [
            'Id_Matkul' => $_POST['U_id_matkul'],
        ];
        $data = [
            'Id_Matkul' => $_POST['U_id_matkul'],
            'Nama_Matkul' => $_POST['U_nama_matkul']

        ];
        $this->model->edit_data($where,$data,'matkul');
    }

    public function nilai()
    {
        $data['title']    = 'Jurusan';
        $data['nilai']    = $this->model->get_nilai();
        $data['mhs']      = $this->model->get_data('mahasiswa');
        $data['dosen']    = $this->model->get_data('dosen');
        $data['matkul']   = $this->model->get_data('matkul');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/data_nilai', $data);
        $this->load->view('templates/footer');
    }

    public function delete_nilai()
    {
        $this->model->delete_all('nilai');
    }

    public function delete_nilai_where()
    {
        $id = [
            'Id_Nilai' => $_POST['id_nilai']
        ];
        $this->model->delete_where('nilai', $id);
    }

    public function tambah_nilai()
    {
        $data = [
            'Id_Matkul' => $_POST['matkul'],
            'NPM' => $_POST['npm'],
            'NIP' => $_POST['nip'],
            'Nilai' => $_POST['nilai'],
            'Grade' => $_POST['grade'],
        ];
        $this->model->input_data('nilai',$data);
    }

    public function where_nilai()
    {
        $id = $_POST['id_nilai'];
        $query = "select * from nilai where Id_Nilai ='$id'";
        $row = $this->db->query($query)->row_array();
       
            $User_data = array();
            $User_data[0]=$row['Id_Nilai'];
            $User_data[1]=$row['Id_Matkul'];
            $User_data[2]=$row['NPM'];
            $User_data[3]=$row['NIP'];
            $User_data[4]=$row['Nilai'];
            $User_data[5]=$row['Grade'];

        echo json_encode($User_data);
    }

    public function edit_nilai()
    {
        $where = [
            'Id_Nilai' => $_POST['id_nilai'],
        ];
        $data = [
            'Id_Matkul' =>$_POST['matkul'],
            'NIP' => $_POST['nip'],
            'NPM' => $_POST['npm'],
            'Nilai' => $_POST['nilai'],
            'Grade' => $_POST['grade'],
        ];
        $this->model->edit_data($where,$data,'nilai');
    }


    //REPORT LIST
    public function report_list()
    {
        $data['training']     = $this->model->get_data('data_training');
        $data['testing']      = $this->model->get_data('data_testing');
        $data['mhs']          = $this->model->get_data('mahasiswa');
        $data['dosen']        = $this->model->get_data('dosen');
        $data['jurusan']      = $this->model->get_data('jurusan');
        $data['report']       = $this->model->get_data('report');
        $data['title']    = 'Report List';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/report/modal/modal_pengujian', $data);
        $this->load->view('pages/report/modal/modal_mahasiswa', $data);
        $this->load->view('pages/report/modal/modal_dosen', $data);
        $this->load->view('pages/report/modal/modal_data', $data);
		$this->load->view('pages/report', $data);
		$this->load->view('templates/footer');
    
    }

    //MHS Report
    public function report_mhs()
    {
        $array    = [
            'mhs'     => $_POST['mhs'],
            'jurusan' => $_POST['jurusan']
        ];

        $this->session->set_userdata($array);
    }
    
    public function report_mhs_display()
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
        $data['universitas'] = $this->model->get_row('universitas');
        $data['title']        = 'Report Mahasiswa';
        $this->load->view('pages/report/content/header', $data);
		$this->load->view('pages/report/report_mahasiswa', $data);
		$this->load->view('pages/report/modal/modal_mahasiswa', $data);
		$this->load->view('pages/report/content/footer');
    }

    //Dosen Report
    public function report_dosen()
    {
        $array    = [
            'dosen'           => $_POST['dosen'],
            'dosen_jurusan'   => $_POST['dosen_jurusan']
        ];

        $this->session->set_userdata($array);
    }
    
    public function report_dosen_display()
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
        $data['universitas']  = $this->model->get_row('universitas');
        $data['title']        = 'Report Dosen';
        $this->load->view('pages/report/content/header', $data);
		$this->load->view('pages/report/report_dosen', $data);
		$this->load->view('pages/report/modal/modal_dosen', $data);
		$this->load->view('pages/report/content/footer');
    }


    //Pengujian Report
    public function report_pengujian()
    {

            $array    = [
                "npm"     => $_POST['npm'],
                'nilai_K' => $_POST['nilai_k'],
                'count'   => $count
            ];

            $this->session->set_userdata($array);       

    }

    public function report_pengujian_display()
    {
        $npm                  = $this->session->userdata('npm');
        $data['normalisasi']  = $this->model->get_normalisasi();
        $data['training']     = $this->model->get_data('data_training');
        $data['distance']     = $this->model->get_distance_where($npm);
        $data['testing']      = $this->model->get_testing_where($npm);
        $data['universitas']  = $this->model->get_row('universitas');
        $data['kode']         = 'RP_KNN';
        $data['pdf']          = 'report-pdf';
        $data['title']        = 'Report Pengujian';
        $this->load->view('pages/report/content/header', $data);
		$this->load->view('pages/report/report_pengujian', $data);
		$this->load->view('pages/report/modal/modal_pengujian', $data);
		$this->load->view('pages/report/content/footer');
    }
    
    //Testing Report
    public function report_data()
    {
        $array    = [
            'data_uji'     => $_POST['data_uji'],
        ];

        $this->session->set_userdata($array);
    }

    public function report_data_display()
    {
        $kode = $this->session->userdata('data_uji');
        $data['data_uji']      = $this->model->get_data_uji($kode);
        $data['kode']         = 'RP_DTU';
        $data['pdf']          = 'data-pdf';
        $data['title']        = 'Report Data Uji';
        $this->load->view('pages/report/content/header', $data);
		$this->load->view('pages/report/report_data', $data);
		$this->load->view('pages/report/modal/modal_data', $data);
		$this->load->view('pages/report/content/footer');
    }




    function default_k()
    {

        $K_value = [
            'nilai_K' => $_POST['nilai_K']
        ]; 

        
        $this->session->set_userdata($K_value);
    }

    public function delete_testing()
    {
        $this->model->delete_all('data_testing');
    }

    public function delete_training()
    {
        $this->model->delete_all('data_training');
    }
    
    public function delete_mahasiswa()
    {
        $this->model->delete_all('mahasiswa');
    }

    public function delete_mahasiswa_where()
    {
        $npm = [
            'NPM' => $_POST['npm']
        ];
        $this->model->delete_where('mahasiswa', $npm);
    }

    public function where_mahasiswa()
    {
      
        $npm = $_POST['npm1'];
        $query = "select * from mahasiswa where NPM ='$npm'";
        $row   = $this->db->query($query)->row_array();
        
            $User_data = array();
            $User_data[0]=$row['NPM'];
            $User_data[1]=$row['Nama'];
            $User_data[2]=$row['jenis_kelamin'];
            $User_data[3]=$row['Alamat'];
            $User_data[4]=$row['Id_jurusan'];

        echo json_encode($User_data);
    }
    
    public function edit_mahasiswa()
    {
        $where = [
            'NPM' => $_POST['U_npm'],
        ];
        $data = [
            'NPM' => $_POST['U_npm'],
            'Nama' => $_POST['U_nama'],
            'jenis_kelamin' => $_POST['U_jenis_kelamin'],
            'Alamat' => $_POST['U_alamat'],
            'Id_jurusan' => $_POST['U_jurusan'],
        ];
        $this->model->edit_data($where,$data,'mahasiswa');
    }

    public function tambah_mahasiswa()
    {
        $data = [
            'NPM' => $_POST['npm'],
            'Nama' => $_POST['nama'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'Alamat' => $_POST['alamat'],
            'Id_jurusan' => $_POST['jurusan'],
        ];
        $this->model->input_data('mahasiswa',$data);
    }

    function logout()
	{
		// $this->session->sess_destroy();
		// $this->session->all_userdata();
        // session_unset();
        // session_destroy();
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Password');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('url-server');
		redirect(base_url());
	}
}