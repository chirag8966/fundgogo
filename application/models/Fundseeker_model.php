<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Fundseeeker_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Fundseeker_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function fundseekerListingCount($searchText = '')
    {
        
        $query = $this->db->get("fundseeker");
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function fundseekerListing($searchText = '', $page, $segment)
    {
        if($searchText!=""){
			$this->db->like("fundseeker_name",$searchText,"both");
		}
        $this->db->limit($page, $segment);
        $query = $this->db->get("fundseeker");
        
        $result = $query->result();        
        return $result;
    }

}

  