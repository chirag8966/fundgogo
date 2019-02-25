<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Fundseeeker_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Investors_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function investorsListingCount($searchText = '')
    {
        
        $query = $this->db->get("investors");
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function investorsListing($searchText = '', $page, $segment)
    {
        if($searchText!=""){
			$this->db->like("investors_name",$searchText,"both");
		}
        $this->db->limit($page, $segment);
        $query = $this->db->get("investors");
        
        $result = $query->result();        
        return $result;
    }

}

  