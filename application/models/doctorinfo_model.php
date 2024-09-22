<?php
class doctorinfo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'doctorinfo';
    }

    
    public function rows()
    {
        $where = array(
            'is_deleted' => 0 
        );
        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }
    public function row($id)
    {
        $where = array(
            'is_deleted'  => 0, 
            'id'          => $id  
        );
        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }
    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }
    public function edit($id, $data)
    {
        $where = array(
            'is_deleted'  => 0, 
            'id'          => $id  
        );

        return $this->db->update($this->table, $data, $where);
    }
    public function delete($id)
     {
         $where = array(
             'is_deleted' => 0,
             'id'         => $id
         );
         return $this->db->update($this->table, $data, $where);
     }
    // public function __construct()
    // {
    //     parent:: __construct();
    //     $this->table = 'checkuprecord';
    // }

    // public function rows()
    // {
    //     $where = array(
    //         'is_deleted' =>0
    //     );
    //     $query = $this->db->get_where($this->table,$where);
    //     return $query->result();
    // }
    // public function row($emp_id)
    // {
    //     $where = array(
    //         'is_deleted' =>0,
    //         'id'         =>$id
    //     );
    //     $query = $this->db->get_where($this->table,$where);
    //     return $query->row();
    // }
    
    // public function sicks()
    // {
    //     $this->db->select('*');
    //     $this->db->from('health');
    //     $this->db->join('checkuprecord_model', 'checkuprecord_model.id = health.id');
    //     $this->db->join('illness', 'illness.id = health.id');
    //     $this->db->where('health.is_sick = 1');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    // public function logs()
    // {
    //     $where = array(
            
    //     );
    //     $query = $this->db->get_where($this->table,$where);
    //     return $query->result();
    // }

    // public function add($data)
    // {
    //    $this->db->insert($this->table, $data);
    //     return true;
    // }
    // public function edit($id,$data)
    // {
    //     $where = array(
    //         'is_deleted' =>0,
    //         'id'         =>$id
    //     );
    //     return $this->db->update($this->table,$data,$where);
    // }

    // public function delete($id,$data)
    // {
    //     $where = array(
    //         'is_deleted' =>0,
    //         'id'         =>$id
    //     );
    //     return $this->db->update($this->table,$data,$where);
    // }
    
}