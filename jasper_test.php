<?php 
    // require __DIR__ . '/vendor/autoload.php';
    // use PHPJasper\PHPJasper;

    // // $input = __DIR__ . '/data/hello_world.jrxml';
    // $input = __DIR__ . '/data/hello_world.jrxml';
    // $output = __DIR__ . '/data';
    // // $options = ['pdf'];
    // $jdbc_dir = __DIR__ . '/vendor/geekcom/phpjasper/bin/jaspertarter/jdbc';
    // $options = [
    //     'format' => ['pdf'],
    //     'locale' => 'en',
    //     'params' => [],
    //     'db_connection' => [
    //         'driver' => 'mysql',
    //         'host' => '127.0.0.1',
    //         'port' => '3306',
    //         'database' => 'pmi_dev',
    //         'username' => 'root',
    //         // 'password' => 'password',
    //         // 'jdbc_driver' => 'com.microsoft.sqlserver.jdbc.SQLServerDriver',
    //         // 'jdbc_url' => 'jdbc:sqlserver://127.0.0.1:1433;databaseName=Teste',
    //         // 'jdbc_dir' => $jdbc_dir
    //     ]
    // ];

    // $jasper = new PHPJasper;

    // // Start pengecekan parameter yang di butuhkan oleh file jasper
    //     // $output = $jasper->listParameters($input)->execute();
    //     // foreach($output as $parameter_description)
    //     //     print $parameter_description . '<pre>';
    // // End

    // // $jasper->compile($input)->execute();
    // $jasper->process(
    //     $input,
    //     $output,
    //     $options
    // )->execute();

    $path = './data/hello_world.pdf';
    
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename='.$path);
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    readfile($path);
?>