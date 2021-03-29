<?php

namespace App\HttpController;

use EasySwoole\EasySwoole\Config;
use EasySwoole\HttpAnnotation\Swagger\AnnotationParser;
use EasySwoole\HttpAnnotation\Swagger\GenerateSwagger;
use EasySwoole\Spl\SplArray;
use EasySwoole\Skeleton\Framework\BaseController;;

class Index extends BaseController
{

    public function index()
    {
        $file = EASYSWOOLE_ROOT . '/vendor/easyswoole/easyswoole/src/Resource/Http/welcome.html';
        if (!is_file($file)) {
            $file = EASYSWOOLE_ROOT . '/src/Resource/Http/welcome.html';
        }

        $this->response()->write(file_get_contents($file));
    }

    function test()
    {
        $config = new SplArray(Config::getInstance()->getConf("swagger"));
        $annotationParser = new AnnotationParser(EASYSWOOLE_ROOT . '/App/HttpController');
        $swagger = new GenerateSwagger($config, $annotationParser);
        $data = $swagger->scan2Json();

        $this->response()->write(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->response()->withHeader('Content-type', 'application/json;charset=utf-8');
        $this->response()->withStatus(200);
    }

}
