<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application;

/**
 * Description of AttractivenessModel
 *
 * @author grigory
 */
class AttractivenessModel
{

    public function __construct()
    {
        
    }

    public function getArrayFromJson(string $filePath)
    {
        $json = file_get_contents($filePath);
        return json_decode($json, true);
    }

}
