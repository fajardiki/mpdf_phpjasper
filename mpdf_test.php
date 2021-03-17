<?php 
    use \Mpdf\Mpdf;
    require_once __DIR__ . '/vendor/autoload.php';

    function print_test()
    {   
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [190, 236]
        ]);
        
        $css = file_get_contents('style.css');
        ob_start();
        include 'index.php';
        $template = ob_get_contents();
        ob_end_clean();
        
        // $sheet = file_get_contents('index.php');
        $mpdf->writeHTML($css, 1);
        $mpdf->writeHTML($template, 2);
        $mpdf->Output("doc.pdf", 'I');
    }

    if(!empty($_GET['click']) &&  $_GET['click'] == 1) {
        print_test();
    }
?>
<a href="mpdf_test.php?click=1" class="btn btn-primary">Print</a>