<?php
ini_set('display_errors',E_All);
require_once __DIR__ . '/vendor/autoload.php';
include_once('user.php');


$mpdf= new \Mpdf\Mpdf(
    [
        'mode' => 'utf-8',
        'orientation' =>'p',
    ]
);
 
$html ='
  

                           <table>
                               <thead>
                                <tr>
                               <th> کدملی </th>
                                <th> نام </th>
                                <th> نام خانوادگی</th>
                                <th> ایمیل  </th>
                                <th> تلفن</th>
                                <th>تاریخ</th>
						
                            </tr>
                               </thead>
                               <tbody>';?>
                            <?php
							$user = new User();
                            $users = $user->Show();
                            foreach($users as $row){
							   
                              $html.='<tr>
                              <td>'.$row['codemeli'].'</td>
                               <td>'.$row['name'].'</td>
                               <td>'.$row['family'].'</td>
                              <td>'.$row['email'].'</td>
                              <td>'.$row['phone'].'</td>
							  <td>'.$row['create_at'].'</td>
						
                            </tr>';
							}
							$html.='</tbody></table>';


			






//$stylesheet1= file_get_contents('css/style.css');
$mpdf->WriteHTML('
<style>
th, td {
   
    border:1px solid #dee2e6 ;
    border-collapse:collapse;
    font-family:mitra;
   height: 50px;
 width:70px;
 
   
   text-align=rtl;
   }
    th {
   
        background-color: #13adb5;
      
   }
</style>




');
$mpdf->SetDirectionality('rtl');

$mpdf->WriteHTML($html,2);

$mpdf->SetWatermarktext('ITLIBRARY.IR');
$mpdf->showWatermarkText=true;
$mpdf->Output();

?>
<html>
<head>
    
</head>

                       <div class="">
                           <table>
                               <thead>
                                <tr>
                               <th> کدملی </th>
                                <th> نام </th>
                                <th> نام خانوادگی</th>
                                <th> ایمیل  </th>
                                <th> تلفن</th>
                              
							
                            </tr>
                               </thead>
                               <tbody>
                                <tr>

			
			
			

                                    
								
								
			<?php
			
			$user = new User();
			$users = $user->Show();
			foreach($users as $row){ ?>
			
			
                                <tr>
                                    <td>  <?php echo $row['codemeli'];?> </td>
                                    <td>  <?php echo $row['name'];?> </td>
                                    <td>  <?php echo $row['family'];?> </td>
                                    <td>  <?php echo $row['email'];?></td>
                                    <td>  <?php echo $row['phone'];?> </td>


                                </tr> 
                                      

    
			<?php }?>
                               </tbody>
                           </table>

            
            </div>
			</html>
