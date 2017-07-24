<?php

namespace Codeigniter\Propel\Parents;

use Codeigniter\Propel\Helpers\Directory;

class PropelParent 
{
    public $config;

    protected $complete_config = '';

    protected $default_ext = 'php';

    protected $config_path = '';

    protected $allowedExt = [
        'php', 'xml', 'yaml', 'ini', 'json'
    ];

    public function chooseExtension(String $ext = 'php') 
    {
        if(hash_equals($ext, $this->default_ext) || in_array($ext, $this->allowedExt)){ 
        } else {
            $ext = $this->default_ext;
        }   

        $this->complete_config = $this->config . '.' .$ext;
    }

    public function getConfig() : string 
    {
        if(empty($this->config)){
            throw new \Exception("No configuration file provided, modify the \$config property.");
        }

        $this->setConfigPath();

        if(empty($this->config_path)){
            throw new \Exception("No config path given, try invoking setConfiguirationPath method.");
        }

        if(empty($this->complete_config)){
            throw new \Exception("Missing config file extension, 
                    try invoking chooseExtension(extension) method.");
        }   
        return $this->config_path . $this->complete_config;
    }

    protected function setConfigPath()
    {
        $this->config_path = Directory::propel_configuration();
    }
}