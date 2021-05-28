<?php 

class kursus extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kursus_model','kursus');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $data['page'] = 'admin/kursus/show_kursus';
        $this->load->view('home_admin', $data);
    }
 
    public function ajax_list()
    {
        $list = $this->kursus->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $kursus) {
            $row = array();
            $row[] = $kursus->kode_kursus;
            $row[] = $kursus->nama_kursus;
            $row[] = $kursus->alokasi_waktu;
            $row[] = $kursus->deskripsi_singkat;
            $row[] = $kursus->deskripsi;
            $row[] = $kursus->harga_per_bulan;

 
            $row[] = '<div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Actions
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0)" title="Edit" onclick="edit_kursus('."'".$kursus->kode_kursus."'".')"><i class="fa fa-edit"></i> Edit</a>
            <a class="dropdown-item" href="javascript:void(0)" title="Hapus" onclick="delete_kursus('."'".$kursus->kode_kursus."'".')"><i class="fa fa-trash"></i> Delete</a>
            </div>
          </div>';
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->kursus->count_all(),
                        "recordsFiltered" => $this->kursus->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }
 
    public function ajax_edit($kode_kursus)
    {
        $data = $this->kursus->get_by_id($kode_kursus);
        echo json_encode($data);
    }
 
    public function ajax_add()
    {
        $data = array(
                'kode_kursus' => $this->input->post('kode_kursus'),
                'nama_kursus' => $this->input->post('nama_kursus'),
                'alokasi_waktu' => $this->input->post('alokasi_waktu'),
                'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_per_bulan' => $this->input->post('harga_per_bulan'),
            );
        $insert = $this->kursus->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $data = array(
            'kode_kursus' => $this->input->post('kode_kursus'),
            'nama_kursus' => $this->input->post('nama_kursus'),
            'alokasi_waktu' => $this->input->post('alokasi_waktu'),
            'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_per_bulan' => $this->input->post('harga_per_bulan'),
        );
        $this->kursus->update(array('kode_kursus' => $this->input->post('kode_kursus')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete()
    {
        $kode_kursus=$this->input->post('kode_kursus');
        $this->kursus->delete_by_id($kode_kursus);
        echo json_encode(array("status" => TRUE));
    }


}
?>