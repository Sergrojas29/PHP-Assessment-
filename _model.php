<?php

class ModelOrderByZipcode extends \Opencart\System\Engine\Model
{
    public function getTotalByZip($zip_code)
    {
        $query = $this->db->query("SELECT * FROM `oc_address`;");


        //  SELECT * FROM oc_address
        //  SELECT ZIPCODE, COUNT() AS totalzip


        return $query;
    }


    public function validateZipCode($zip_code)
    {
        if (is_int($zip_code) && $zip_code > 0) {
            return true;
        } else {
            return false;
        }
    }
}
