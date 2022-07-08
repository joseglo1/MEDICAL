<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Doctorservice_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get Doctor Schedule Service
    */
        
    /*
     * Get all Schedule Services
     */
    function get_all_doctor_service()
    {
        $this->db->select('*');
        $this->db->from('doctor_service');
        $this->db->order_by("id_Doctor_Service");
        return $this->db->get()->result_array();

    }
    function get_doctor_service($id_doctor)
    {
        $consulta = "SELECT DISTINCT Day_Week FROM doctor_service WHERE id_Doctor = ".$id_doctor." ORDER BY Day_Week, initial_Hour;";
        return $this->db->query($consulta)->result_array();
        
    }
    function get_doctor_service_hours($id_doctor,$dayweek)
    {
        $consulta = "SELECT * FROM doctor_service WHERE id_Doctor = ".$id_doctor." and Day_Week = $dayweek ORDER BY initial_Hour;";
        return $this->db->query($consulta)->result_array();
        
    }
    function get_doctor_service_byid($id_doctor_service)
    {
        $consulta = "SELECT * FROM doctor_service WHERE id_Doctor_Service = ".$id_doctor_service.";";
        return $this->db->query($consulta)->result_array();
        
    }
        
    /*
     * function to add new Doctor Services
     */
    function add_doctor_service($params)
    {
        $this->db->insert('doctor_service', $params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update Doctor Service
     */
    function update_doctor_service($id_doctor_service,$params)
    {
        $this->db->where('id_Doctor_Service',$id_doctor_service);
        return $this->db->update('doctor_service',$params);
    }
    
    /*
     * function to delete Credentials
     */
    function delete_doctorservice($id_doctor_service)
    {
        return $this->db->delete('doctor_service',array('id_Doctor_Service'=>$id_doctor_service));
    }
}
