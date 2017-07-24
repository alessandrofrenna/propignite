<?php

namespace Codeigniter\Propel;

use Propel\Runtime\Propel as AR;
use Codeigniter\Propel\Parents\PropelParent;

class Propel extends PropelParent
{
    public $config = 'config';

    public function __construct()
    {
        $this->chooseExtension('php');
        return AR::init($this->getConfig());
    }

}