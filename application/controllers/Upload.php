<?php
require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';
// require_once 'third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Upload extends CI_Controller {


    public function uploadData()
    {
        $config['upload_path']      = './assets/tmp_doc/'; //siapkan path untuk upload file
        $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
        $config['file_name']        = $_FILES['excel']['name']; //name file yang diupload

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('excel')) {
            //fetch data upload
            $file   = $this->upload->data();

            // $reader = ReaderEntityFactory::createReaderFromFile('./temp_doc/');
            $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
            $reader->open('./assets/tmp_doc/' . $file['file_name']); //open file xlsx yang baru saja diunggah

            //looping pembacaat sheet dalam file        
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                $save   = array();
                //looping pembacaan row dalam sheet
                foreach ($sheet->getRowIterator() as $row) {

                    if ($numRow > 1) {
                        //ambil cell
                        $cells = $row->getCells();

                        $data = array(
                            // 'id_testing'           => $cells[0],
                            'NPM'                    => $cells[0],
                            'IPK'                    => $cells[1],
                            'status_bekerja'         => $cells[2],
                            'cuti_semester'          => $cells[3],
                            'jumlah_mk_diulang'      => $cells[4],
                            'jumlah_organisasi'      => $cells[5],
                            'ket_lulus'              => $cells[6]
                          
                        );

                        //tambahkan array $data ke $save
                        array_push($save, $data);
                    }

                    $numRow++;
                }
                

                //simpan data ke database
                if($_POST['data_input']=='data_testing')
                {
                    $this->model->save_multiple('data_testing', $save);
                    
                }else{
                    $this->model->save_multiple('data_training', $save);

                }

                //tutup spout reader
                $reader->close();

                //hapus file yang sudah diupload
                unlink('./assets/tmp_doc/' . $file['file_name']);

                //show msg text 
                echo json_encode(array(
                    "statusCode"=>200,
                    "pesan"  => "Upload data berhasil!"
                ));
            }
        } else {
            //show msg text
            echo json_encode(array(
                "statusCode"=>400,
                "pesan"  => "Upload data gagal!"
            ));
        }
    }


    public function uploadMahasiswa()
    {
        $config['upload_path']      = './assets/tmp_doc/'; //siapkan path untuk upload file
        $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
        $config['file_name']        = $_FILES['excel']['name']; //name file yang diupload

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('excel')) {
            //fetch data upload
            $file   = $this->upload->data();

            // $reader = ReaderEntityFactory::createReaderFromFile('./temp_doc/');
            $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
            $reader->open('./assets/tmp_doc/' . $file['file_name']); //open file xlsx yang baru saja diunggah

            //looping pembacaat sheet dalam file        
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                $save   = array();
                //looping pembacaan row dalam sheet
                foreach ($sheet->getRowIterator() as $row) {

                    if ($numRow > 1) {
                        //ambil cell
                        $cells = $row->getCells();

                        $data = array(
                            // 'id_testing'           => $cells[0],
                            'NPM'                    => $cells[0],
                            'Id_jurusan'             => $cells[1],
                            'Id_login'               => $cells[2],
                            'Id_Matkul'              => $cells[3],
                            'Nama'                   => $cells[4],
                            'jenis_kelamin'          => $cells[5],
                            'Alamat'                 => $cells[6]
                          
                        );

                        //tambahkan array $data ke $save
                        array_push($save, $data);
                    }

                    $numRow++;
                }
                
                $this->model->save_multiple('mahasiswa', $save);


                //tutup spout reader
                $reader->close();

                //hapus file yang sudah diupload
                unlink('./assets/tmp_doc/' . $file['file_name']);

                //show msg text 
                echo json_encode(array(
                    "statusCode"=>200,
                    "pesan"  => "Upload data berhasil!"
                ));
            }
        } else {
            //show msg text
            echo json_encode(array(
                "statusCode"=>400,
                "pesan"  => "Upload data gagal!"
            ));
        }
    }

}