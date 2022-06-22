<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Nationality_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get nationality by id_nationality
     */
    function get_nationality($id_nationality)
    {
        return $this->db->get_where('Nationality',array('id_Nationality'=>$id_nationality))->row_array();
    }
        
    /*
     * Get all Nationalities
     */
    function get_all_nationality2()
    {
        $this->db->select('*');
        $this->db->from('Nationality');
        $this->db->order_by("id_Nationality");
        return $this->db->get()->result_array();

    }
    function get_all_nationality()
    {
        $this->db->order_by('name', 'asc');
        return $this->db->get('Nationality')->result_array();
    }
        
    /*
     * function to add new Nationalities
     */
    function add_nationality($params)
    {
        $this->db->insert('Nationality',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update nationalitys
     */
    function update_nationality($id_nationality,$params)
    {
        $this->db->where('id_Nationality',$id_nationality);
        return $this->db->update('Nationality',$params);
    }
    
    /*
     * function to delete Nationality
     */
    function delete_nationality($id_nationality)
    {
        return $this->db->delete('Nationality',array('id_Nationality'=>$id_nationality));
    }
}