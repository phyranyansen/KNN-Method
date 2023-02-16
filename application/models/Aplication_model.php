<?php

class Aplication_Model extends CI_Model {

        public function get_data($table)
        {
            $query = $this->db->get($table);
            return $query->result_array();
        }
        
        public function get_row($table)
        {
            $query = $this->db->get($table);
            return $query->row_array();
        }
        public function get_testing_where($npm)
        {
            $query = $this->db->query("SELECT * FROM data_testing WHERE NPM LIKE '$npm'");
            return $query->result_array();
        }

        public function save_multiple($table, $data)
        {
            $this->db->insert_batch($table, $data);
        }

        public function save_single($data)
        {
            $this->db->insert($data);
        }

        public function input_data($table, $data)
        {
            $this->db->insert($table, $data);
        }

        public function where_data($npm)
        {
            $query = $this->db->query("SELECT * FROM mahasiswa WHERE NPM ='$npm'");
            return $query->result_array();
        }
        //public function where_data($where, $table)
        //{
        //    return $this->db->get_where($table, $where);
        //}

        public function edit_data($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function delete_all($table)
        {
            $query = $this->db->query("DELETE FROM $table");
            return $query;
        }

        public function delete_where($table, $where)
        {
            $query = $this->db->delete($table, $where);
            return $query;
        }

        public function get_mahasiswa()
        {
            $query = $this->db->query("SELECT *, b.Nama_Jurusan, c.Nama_Fakultas
            FROM 
            mahasiswa a
            left JOIN jurusan b ON a.Id_jurusan = b.Id_jurusan
            left JOIN fakultas c ON b.Id_Fakultas = c.Id_Fakultas");
            return $query->result_array();
        }

        public function get_mahasiswa_where($npm=null, $jurusan=null)
        {
            $query = $this->db->query("SELECT *, 
            b.Nama_Jurusan, c.Nama_Fakultas
            FROM mahasiswa a
            JOIN jurusan b ON a.Id_jurusan = b.Id_jurusan
            JOIN fakultas c ON b.Id_Fakultas = c.Id_Fakultas
            WHERE a.NPM like '$npm%'
            AND b.Nama_Jurusan like '$jurusan%'
            ");
            return $query->result_array();
        }

        public function get_nilai_where($npm=null, $jurusan=null)
        {
            $query = $this->db->query("
            SELECT *, b.Nama_Jurusan, c.Nama_Fakultas
            FROM 
            mahasiswa a
            JOIN jurusan b ON a.Id_jurusan = b.Id_jurusan
            JOIN fakultas c ON b.Id_Fakultas = c.Id_Fakultas
            WHERE a.NPM like '$npm%'
            AND b.Nama_Jurusan like '$jurusan%'
            ");
            return $query->result_array();
        }
       
        public function get_jurusan()
        {
            $query = $this->db->query("SELECT *, b.Kode_Fakultas, b.Nama_Fakultas
            FROM jurusan  a 
            LEFT JOIN Fakultas b ON a.Id_Fakultas = b.Id_Fakultas");
            return $query->result_array();
        }
        
        public function get_nilai()
        {
            $query = $this->db->query("SELECT  *, d.Nama as mhs, d.NPM, e.Nama as dosen, e.NIP, f.Nama_Matkul
            FROM nilai a
            LEFT JOIN mahasiswa d ON a.NPM = d.NPM
            LEFT JOIN dosen e ON a.NIP = e.Nip
            LEFT JOIN matkul f ON a.Id_Matkul = f.Id_Matkul
            LEFT JOIN jurusan g ON e.Id_jurusan = g.Id_jurusan;
            ");
            return $query->result_array();
        }

      
        public function get_dosen()
        {
            $query = $this->db->query("SELECT *, 
            b.Nama_Jurusan, c.Nama_Fakultas
            FROM dosen a
            left JOIN jurusan b ON a.Id_jurusan = b.Id_jurusan
            left JOIN Fakultas c ON c.Id_Fakultas = b.Id_Fakultas
            ");
            return $query->result_array();
        }
        
        public function get_dosen_where($nip=null, $jurusan=null)
        {
            $query = $this->db->query("SELECT *, 
            b.Nama_Jurusan, c.Nama_Fakultas
            FROM  dosen a 
            JOIN jurusan b ON a.Id_jurusan = b.Id_jurusan
            JOIN Fakultas c ON c.Id_Fakultas = b.Id_Fakultas
            WHERE a.Nip LIKE '$nip%'
            AND b.Nama_Jurusan LIKE '$jurusan%'
            ");
            return $query->result_array();
        }
        
        public function get_data_uji($kode)
        {
            if($kode=='semua')
            {
                $query = $this->db->query("SELECT * 
                    FROM data_testing
                    UNION
                    SELECT * FROM data_training
                ");
            }elseif($kode=='testing')
            {
                $query = $this->db->get('data_testing');
            }elseif($kode=='training')
            {
                $query = $this->db->get('data_training');
            }

            return $query->result_array();
        }



    //knn method process    
    public function get_normalisasi()
    {
        $normalisasi = $this->db->query("SELECT * FROM data_training")->result_array();
        $query2 = $this->db->query("SELECT max(IPK) AS ipk_max, min(IPK) AS ipk_min,
                                               max(cuti_semester) AS cuti_max, min(cuti_semester) AS cuti_min, 
                                               max(jumlah_mk_diulang) AS jumlah_mk_diulang_max, min(jumlah_mk_diulang) AS jumlah_mk_diulang_min, 
                                               max(status_bekerja) AS status_bekerja_max, min(status_bekerja) AS status_bekerja_min, 
                                               max(jumlah_organisasi) AS jumlah_organisasi_max, min(jumlah_organisasi) AS jumlah_organisasi_min, 
                                               max(ket_lulus) AS ket_lulus_max, min(ket_lulus) AS ket_lulus_min 
                                        FROM data_training
                                    ")->row_array();
       
        foreach ($normalisasi as $key => $value) {
            try {
            $normalisasi[$key]['IPK'] = ($normalisasi[$key]['IPK'] - $query2['ipk_min']) / ($query2['ipk_max'] - $query2['ipk_min']);
            $normalisasi[$key]['cuti_semester'] = ($normalisasi[$key]['cuti_semester'] - $query2['cuti_min']) / ($query2['cuti_max'] - $query2['cuti_min']);
            $normalisasi[$key]['jumlah_mk_diulang'] = ($normalisasi[$key]['jumlah_mk_diulang'] - $query2['jumlah_mk_diulang_min']) / ($query2['jumlah_mk_diulang_max'] - $query2['jumlah_mk_diulang_min']);
            $normalisasi[$key]['status_bekerja'] = ($normalisasi[$key]['status_bekerja'] - $query2['status_bekerja_min']) / ($query2['status_bekerja_max'] - $query2['status_bekerja_min']);
            $normalisasi[$key]['jumlah_organisasi'] = ($normalisasi[$key]['jumlah_organisasi'] - $query2['jumlah_organisasi_min']) / ($query2['jumlah_organisasi_max'] - $query2['jumlah_organisasi_min']);
        } catch (DivisionByZeroError $e) {
           
        }
    }


        return $normalisasi;
    }


    public function get_distance()
    {
        $query       = $this->db->query("SELECT * FROM data_testing")->result_array();
        $normalisasi = $this->get_normalisasi();

        $distance = [];
        $i=1;
        foreach ($query as $key_data_testing => $value_data_testing) {
            $distance[$key_data_testing] = [];
            foreach ($normalisasi as $key_normalisasi => $value_normalisasi) {

                $distance[$key_data_testing][] = sqrt(
                    pow((floatval($value_normalisasi['IPK']) - floatval($value_data_testing['IPK'])), 2) +
                    pow((floatval($value_normalisasi['status_bekerja']) - floatval($value_data_testing['status_bekerja'])), 2) +
                    pow((floatval($value_normalisasi['cuti_semester']) - floatval($value_data_testing['cuti_semester'])), 2) +
                    pow((floatval($value_normalisasi['jumlah_mk_diulang']) - floatval($value_data_testing['jumlah_mk_diulang'])), 2) +
                    pow((floatval($value_normalisasi['jumlah_organisasi']) - floatval($value_data_testing['jumlah_organisasi'])), 2)
                    
                );
            }
         $i++;   
          
        }
        
        return $distance;
    }

    public function get_distance_where($npm)
    {
        $query       = $this->db->query("SELECT * FROM data_testing WHERE NPM like '$npm' ")->result_array();
        $normalisasi = $this->get_normalisasi();

        $distance = [];
        $i=1;
        foreach ($query as $key_data_testing => $value_data_testing) {
            $distance[$key_data_testing] = [];
            foreach ($normalisasi as $key_normalisasi => $value_normalisasi) {

                $distance[$key_data_testing][] = sqrt(
                    pow(($value_normalisasi['IPK'] - $value_data_testing['IPK']), 2) +
                    pow(($value_normalisasi['status_bekerja'] - $value_data_testing['status_bekerja']), 2) +
                    pow(($value_normalisasi['cuti_semester'] - $value_data_testing['cuti_semester']), 2) +
                    pow(($value_normalisasi['jumlah_mk_diulang'] - $value_data_testing['jumlah_mk_diulang']), 2) +
                    pow(($value_normalisasi['jumlah_organisasi'] - $value_data_testing['jumlah_organisasi']), 2)
                    
                );
            }
         $i++;   
          
        }
        
        return $distance;
    }





    //add user login
    public function add_user()
    {
        $array = [
            'Username'  => $_POST['username'],
            'Password'  => password_hash($_POST['password'], PASSWORD_BCRYPT),
            'Status'    => 1
            // 'NPM'       => '',
            // 'NIP'       => ''
        ];

        $this->db->insert('login', $array);
    }



}