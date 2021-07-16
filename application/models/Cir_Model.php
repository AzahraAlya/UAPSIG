<?php

class Cir_Model extends CI_Model
{
    public function getloc1()
    {
        return $this->db->get('circle')->result_array();
    }

    public function tambahDatalokasi1()
    {
        $data = [

            "nama" => $this->input->post('nama', true),
            "coord" => $this->input->post('coord', true),
            "size" => $this->input->post('size', true),
            "opacity" => $this->input->post('opacity', true),
            "ring" => $this->input->post('ring', true),
            "fill" => $this->input->post('fill', true),


        ];

        $this->db->insert('circle', $data);
    }

    public function hapusDatalokasi1($id)
    {
        $this->db->where('id_circle', $id);
        $this->db->delete('circle');
    }

    public function getlokasiById1($id)
    {
        return $this->db->get_where('circle', ['id_circle' => $id])->row_array();
    }


    public function ubahlokasi1()
    {
        $data = [
            "id_circle" => $this->input->post('id_lokasi', true),
            "nama" => $this->input->post('nama', true),
            "coord" => $this->input->post('coord', true),
            "size" => $this->input->post('size', true),
            "opacity" => $this->input->post('opacity', true),
            "ring" => $this->input->post('ring', true),
            "fill" => $this->input->post('fill', true),
            

        ];
        $this->db->where('id_circle', $this->input->post('id_circle'));
        $this->db->update('circle', $data);
    }

    public function cariDatalokasi1()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('circle')->result_array();
    }
}