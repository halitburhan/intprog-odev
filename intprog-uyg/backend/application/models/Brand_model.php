
<?php
class Brand_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* Tabloya veri ekleyen fonksiyon */
    public function add($data = array())
    {
        return $this->db->insert("brands", $data);
    }
  
    /*tek kaydı getirecek*/
    public function get($where=array())
    {
        return $this->db->where($where)->get("brands")->row();
    }

    /* Tablodaki tüm kayıtları çeken fonksiyon */

    public function getAll($order = "id ASC")
    {
        return $this->db->order_by($order)->get("brands")->result();
    }

    public function delete($where=array())
    {
        return $this->db->where($where)->delete("brands");
    }
    
    public function update($where=array(),$data=array())
    {
       return $this->db->where($where)->update("brands", $data);
    }

}

?>