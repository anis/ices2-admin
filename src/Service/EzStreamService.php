<?php
namespace Ices2Admin\Service;

class EzStreamService
{

    public function isInstalled()
    {
        return shell_exec('type ezstream') !== null;
    }

}
