<?php
//d:/Uni Project stuff/jpgraph-3.5.0b1/src
namespace System\ReportGenerationBundle\Controller;

use System\ReportGenerationBundle\Controller\ImagePrintingController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
include ("c:/xampp/htdocs/Zhvillues/src/System/ReportGenerationBundle/jpgraph/src/jpgraph.php");
include ("c:/xampp/htdocs/Zhvillues/src/System/ReportGenerationBundle/jpgraph/src/jpgraph_bar.php");
//include ("d:/Uni Project stuff/jpgraph-3.5.0b1/src/jpgraph.php");   
//include ("d:/Uni Project stuff/jpgraph-3.5.0b1/src/jpgraph_bar.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class GraphGenerationController extends Controller
{
public function addAction(Request $request)
    {
//echo('hoo');
$message = $request->get('message', null);
$leg = array(1,2,4);
$data= array(4,5,6);
$graph = new \Graph(250,150,"auto");

$graph->SetScale("textint");
$graph->xaxis->SetTickLabels($leg);
$bplot = new \BarPlot($data);
$graph->Add($bplot);

$graph->img->SetMargin(50,30,50,50);

//$graph->AdjBackgroundImage(0.4,0.7,-1); //setting BG type

//$graph->SetBackgroundImage("linux_pez.png",BGIMG_FILLFRAME); //adding image
$graph->SetShadow();


$bplot->SetFillColor("lightgreen"); // Fill color
//echo('hoo');
//$bplot->value->Show();
//$bplot->value->SetFont(FF_ARIAL,FS_BOLD);
//$bplot->value->SetAngle(45);
//$bplot->value->SetColor("black","navy");




// Display the graph
//$gdImgHandler = $graph->Stroke(_IMG_HANDLER); <what is this
//Start buffering
\ob_start();      
//Print the data stream to the buffer
$graph->img->SetImgFormat('png');
$graph->Stroke();
$graph->img->Stream(); 
//Get the conents of the buffer

$image_data = \ob_get_contents();
//Stop the buffer/clear it.
\ob_end_clean();
//Set the variable equal to the base 64 encoded value of the stream.
//This gets passed to the browser and displayed.
$image = \base64_encode($image_data);
//echo('hoo');

//return 0;
//return ImagePrintingController.addAction($image);
return $this->render('SystemReportGenerationBundle:Pages:newGraph.html.twig', array( 'EncodedImage' => $image, 'EncodedImage2' => $image));   
    }
}
?>
