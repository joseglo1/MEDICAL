<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Booking_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get booking by id_Booking
     */
    function get_booking($id_patient)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('id_Patient',$id_patient);
        $this->db->order_by("Date_Booking");
        return $this->db->get()->result_array();
    }
    
    
    function get_all_booking()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->order_by("id_Doctor");
        $this->db->order_by("id_Patient");
        $this->db->order_by("Date_Booking");
        return $this->db->get()->result_array();

    }

    function get_doctors_booking($iddoctor)
    {
        $consulta = "SELECT b.id_Booking, CONCAT(p.First_Name,' ',p.Last_Name) as Patient_Name,
        b.id_Patient,
        ds.initial_Hour as Hour_Booking,
        b.Date_Booking, 
        b.Link_Stream, 
        b.Started, 
        b.End, 
        b.id_Stream_Tool,
        b.id_Status_Meeting,
        b.id_Doctor_Service,
        sm.Name as Status_Meeting,
        st.Name as Stream_Tool 
        FROM
        stream_tool as st,
        status_meeting as sm,
        doctor_service as ds,
        patient as p ,
        booking as b 
        WHERE
        b.id_Stream_Tool = st.id_Stream_Tool and
        b.id_Status_Meeting = sm.id_Status_Meeting and
        b.id_Doctor_Service = ds.id_Doctor_Service and
        b.id_Patient = p.id_Patient and
        b.id_Doctor = ".$iddoctor.";";

        $query = $this->db->query($consulta);
        return $query->result_array();
    } 

    function confirm_booking($id_booking,$params)
    {
        $this->db->where('id_Booking',$id_booking);
        return $this->db->update('booking',$params);
    }

    function cancel_booking($id_booking)
    {
        $params = array(
            'id_Status_Meeting' => 7
        );
        $this->db->where('id_Booking',$id_booking);
        return $this->db->update('booking',$params);
    }
    
    /*
     * function to add new Booking
     */
    function add_booking($params)
    {
        $this->db->insert('booking',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update Booking
     */
    function update_booking($id_booking,$params)
    {
        $this->db->where('id_Booking',$id_booking);
        return $this->db->update('booking',$params);
    }
    
    /*
     * function to delete Booking
     */
    function delete_booking($id_booking)
    {
        return $this->db->delete('booking',array('id_Booking'=>$id_booking));
    }
}
