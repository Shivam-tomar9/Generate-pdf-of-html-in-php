<?php

require __DIR__ . "/vendor/autoload.php";
require 'C:\xampp\htdocs\phpmail\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\phpmail\vendor\phpmailer\phpmailer\src\SMTP.php';

use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$html='<div>
<span><h2>gmail.com</h2></span> <br />

<div>
<table style="width: 100%;">
  <tr>
    <td>
      <div>1. stinevangruud@gmail.com</div>
    </td>
    <td>
      <p style="margin: 0;">
        <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
        <span style="background: green; padding: 8px; color: white; border-radius: 16px;">email validator</span>
      </p>
    </td>
  </tr>
  <br>
 
  <tr>
  <td>
    <div>2. sarah.lindhoj@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: green; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>
  </td>
</tr>
<br>
<tr>
  <td>
    <div>3. katjakania@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: green; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>
  </td>
</tr>
<br>


<tr>
  <td>
    <div>4. leamork5@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: green; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>


<tr>
  <td>
    <div>5. helleksthomsen@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: green; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>6. stinevaangruud@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>7. sarahh.lindhoj@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>8. katjaakania@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>9. leamoork5@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>10. hellleksthomsen@gmail.com</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>
</table>
</div>
</div>
<br />
<br />
<span><h2>live.nl</h2></span> <br />
<div>

<table style="width: 100%;">
<tr>
  <td>
  <div>1. rensieval@live.nl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>2. rensieval@live.nl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>
</table>
</div>
</div>
<br />
<br />

<span><h2>poczta.onet.pl</h2></span> <br />
<div>
<table style="width: 100%;">

<tr>
  <td>
  <div>1. kk_kate@poczta.onet.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: green; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>


<tr>
  <td>
  <div>2. kk_kate@poczta.onet.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>
</table>
</div>
</div>
<br />
<br />
<span><h2>interia.pl</h2></span> <br />
<div>
<table style="width: 100%;">
<tr>
  <td>
  <div>1. wojcik.e@interia.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>2. wojcik.e@interia.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>
</table>
<br />
<br />
<span><h2>wp.pl</h2></span> <br />
<div>

<table style="width: 100%;">

<tr>
  <td>
  <div>1. kasia.trusilo@wp.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>



<tr>
  <td>
  <div>2. ajju@wp.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>



<tr>
  <td>
  <div>3. semeniuk-kacper@wp.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: green; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>



<tr>
  <td>
  <div>4. kaasia.trusilo@wp.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>



<tr>
  <td>
  <div>5. seameniuk-kacper@wp.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>



<tr>
  <td>
  <div>6. ajjau@wp.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>
</table>
</div>
</div>
<br />
<br />
<span><h2>gazeta.pl</h2></span> <br />
<div>

<table style="width: 100%;">

<tr>
  <td>
  <div>1. gosia.grzybowska@gazeta.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: yellow; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>

<tr>
  <td>
  <div>2. gosia.grzybowska@gazeta.pl</div>
  </td>
  <td>
    <p style="margin: 0;">
      <span style="background: red; color: white; padding: 8px; border-radius: 16px;">email verifier</span>
      <span style="background: red; padding: 8px; color: white; border-radius: 16px;">email validator</span>
    </p>      
  </td>
</tr>
<br>
</table>
</div>
</div>';

$dompdf=new Dompdf;
$dompdf->loadhtml($html);
$dompdf->render();
 $pdfContent = $dompdf->output();
//if we have to generate only pdf then
//$dompdf->stream("invoice.pdf",["Attachment"=>0]);




$toEmail = 'tomarshivam987@gmail.com';
$fromEmail = 'shivamtomar5338@gmail.com';
$subject = 'PDF Attachment';
$message = 'Please find the attached PDF file.';


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'shivamtomar5338@gmail.com';
$mail->Password = 'peuewdhkhdvcocii';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;


$mail->setFrom($fromEmail);
    $mail->addAddress($toEmail);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->addStringAttachment($pdfContent, 'invoice.pdf');

   
if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>
