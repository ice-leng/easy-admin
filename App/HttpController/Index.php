<?php

namespace App\HttpController;

use EasySwoole\Skeleton\Errors\CommonError;
use EasySwoole\Skeleton\Framework\BizException;
use EasySwoole\Skeleton\Framework\BaseController;;

class Index extends BaseController
{

    public function index()
    {
        throw new BizException(CommonError::SERVER_NOT_FOUND);
    }
}
