<?php
class Model_data_user extends CI_Model{

    /* Fungsi ini me return semua record yang ada dalam tabel user */
    public function get_all(){
        return $this->db->get('TBL_USER')->result();
    }

    /* Fungsi ini me return satu record dari tabeluser dalam bentuk object. 
     * Record yang di return adalah record dengan id $id_user 
     */
    public function get_one($id_user){
        return $this->db->get_where('TBL_USER',array('ID_USER' => $id_user))->result();
    }

    /* Fungsi ini menginsertkan data ke dalam tabel user.
     * Parameter $data berisi data yang akan diinsertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function insert($data){
        $this->db->insert('TBL_USER', $data);
    }

    /* Fungsi ini mengupdate data ke dalam tabel user yang memiliki id=$id_user.
     * Parameter $data berisi data yang akan diinsertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function update($data, $id_user){
        $this->db->where('ID_USER', $id_user);
        $this->db->update('TBL_USER', $data);

    }

    /* Fungsi ini menghapus satu record dari tabel user memiliki id=$id_user*/
    public function delete($id_user){
        $this->db->delete('TBL_USER', array('ID_USER' => $id_user));
    }

    function get($keyword){
	   $this->load->database();        
	   return $this->db->select('*')->from('TBL_USER')
           ->like('NAMA_LENGKAP_USER',$keyword)->or_like('USERNAME',$keyword)
           ->get()->result();
    }

}


