<?php
namespace Ices2Admin\Service;

class IcesService
{

    public function isInstalled()
    {
        return shell_exec('type ices2') !== null;
    }

}
