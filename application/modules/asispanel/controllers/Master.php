<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != "admin") {
            redirect(base_url());
        } else {
            $this->load->Model('Combo_model');
            $this->load->Model('Master_model');
        }
    }

    public function user()
    {
        $d['judul'] = 'Data User';
        $d['app'] = $this->uri->segment(1) . '/';
        $d['user'] = $this->Master_model->user();
        $d['combo_jabatan'] = $this->Combo_model->combo_jabatan();
        $this->load->view('top', $d);
        $this->load->view('menu');
        $this->load->view('user/user');
        $this->load->view('bottom');
    }

    public function jabatan()
    {
        $d['judul'] = 'Data Jabatan';
        $d['app'] = $this->uri->segment(1) . '/';
        $d['jabatan'] = $this->Master_model->jabatan();
        $this->load->view('top', $d);
        $this->load->view('menu');
        $this->load->view('jabatan/jabatan');
        $this->load->view('bottom');
    }

    public function sekolah()
    {
        $d['judul'] = 'Indentitas Sekolah';
        $d['app'] = $this->uri->segment(1) . '/';
        $data = $this->db->query("SELECT * FROM mst_sekolah WHERE id = 1")->row();
        $d['nama_sekolah'] = $data->nama_sekolah;
        $d['npsn'] = $data->npsn;
        $d['nss'] = $data->nss;
        $d['provinsi'] = $data->provinsi;
        $d['kabupaten'] = $data->kabupaten;
        $d['kecamatan'] = $data->kecamatan;
        $d['kelurahan'] = $data->kelurahan;
        $d['kodepos'] = $data->kodepos;
        $d['alamat'] = $data->alamat;
        $d['no_telepon'] = $data->no_telepon;
        $d['website'] = $data->website;
        $d['email'] = $data->email;
        $d['logo'] = $data->logo;
        $this->load->view('top', $d);
        $this->load->view('menu');
        $this->load->view('sekolah/sekolah');
        $this->load->view('bottom');
    }


    public function save_password() {
        $password_lama = $this->input->post("password_lama");
        $password_baru = $this->input->post("password_baru");
        $id = $this->session->userdata("id");
        $cek = $this->db->query("SELECT * FROM mst_admin WHERE id = '$id' AND password = '$password_lama'");
        if($cek->num_rows() == 0) {
            $this->session->set_flashdata("error","Gagal Ubah Password, Password Lama Salah");
        } else {
            $in['password'] = $password_baru;
            $where['id'] = $id;
            $this->db->update("mst_admin",$in,$where);
            $this->session->set_flashdata("success","Berhasil Ubah Password");
        }
        redirect("asispanel");
    }

    public function save_user()
    {
        $tipe = $this->input->post("tipe");
        $in['nama'] = $this->input->post("nama");
        $in['username'] = $this->input->post("username");
        $in['password'] = $this->input->post("password");
        $in['id_jabatan'] = $this->input->post("id_jabatan");

        if ($tipe == "add") {
            $cek = $this->db->query("SELECT username FROM mst_user WHERE username = '$in[username]'");
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata("error", "Gagal Input. Username Sudah Digunakan");
            } else {
                $this->db->insert("mst_user", $in);
                $this->session->set_flashdata("success", "Tambah Data User Berhasil");
            }
            redirect("asispanel/master/user");
        } elseif ($tipe = 'edit') {
            $where['id_user']     = $this->input->post('id_user');
            $cek = $this->db->query("SELECT username FROM mst_user WHERE username = '$in[username]' AND id_user != '$where[id_user]'");
            if ($cek->num_rows() > 0) {
                $this->session->set_flashdata("error", "Gagal Input. Username Sudah Digunakan");
            } else {
                $this->db->update("mst_user", $in, $where);
                $this->session->set_flashdata("success", "Ubah Data User Berhasil");
            }
            redirect("asispanel/master/user");
        } else {
            redirect("asispanel/master/user");
        }
    }


    public function save_sekolah()
	{
		$where['id'] = 1;
		$in['nama_sekolah'] = $this->input->post("nama_sekolah");
		$in['npsn'] = $this->input->post("npsn");
		$in['nss'] = $this->input->post("nss");
		$in['provinsi'] = $this->input->post("provinsi");
		$in['kabupaten'] = $this->input->post("kabupaten");
		$in['kecamatan'] = $this->input->post("kecamatan");
		$in['kelurahan'] = $this->input->post("kelurahan");
		$in['kodepos'] = $this->input->post("kodepos");
		$in['alamat'] = $this->input->post("alamat");
		$in['no_telepon'] = $this->input->post("no_telepon");
		$in['website'] = $this->input->post("website");
		$in['email'] = $this->input->post("email");

		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'jpg|png';
		$config['encrypt_name']	= TRUE;
		$config['remove_spaces']	= TRUE;
		$config['max_size']     = '0';
		$config['max_width']  	= '0';
		$config['max_height']  	= '0';

		$this->load->library('upload', $config);


		if(!empty($_FILES['logo']['name'])) {
			if($this->upload->do_upload("logo")) {
				$data	 	= $this->upload->data();
				$in['logo'] = $data['file_name'];	
				$this->db->update("mst_sekolah", $in, $where);
				$this->session->set_flashdata("success","Update Identitas Sekolah Berhasil");
				redirect("asispanel/master/sekolah");
			} else {
				$this->session->set_flashdata("error",$this->upload->display_errors());
                redirect("asispanel/master/sekolah");
			}
		} else {
            $this->db->update("mst_sekolah", $in, $where);
            $this->session->set_flashdata("success","Update Identitas Sekolah Berhasil");
			redirect("asispanel/master/sekolah");
		}
	}

    public function delete_user($id)
    {
        $where['id_user'] = $id;
        $this->db->delete("mst_user", $where);
        $this->session->set_flashdata("success", "Hapus Data User Berhasil");
        redirect("asispanel/master/user");
    }
}
