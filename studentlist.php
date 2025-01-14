<?php
	ini_set('max_execution_time',0);
	ini_set('memory_limit','256M');


    require_once('dbconn.php');

	require_once 'dompdf/autoload.inc.php'; //we've assumed that the dompdf directory is in the same directory as your PHP file. If not, adjust your autoload.inc.php i.e. first line of code accordingly.

	
	
	// reference the Dompdf namespace

	use Dompdf\Dompdf;
	use Dompdf\Options;

	// instantiate and use the dompdf class
	//$dompdf = new Dompdf();
	$options = new Options();
	$options->set('isPhpEnabled', true);
	$options->set('defaultFont', 'Courier');
	$dompdf = new Dompdf($options);	

	// $dompdf->setOptions(['isImageCacheEnabled' => false]);
	// $dompdf->setOptions(['isRemoteEnabled' => true]);

	
	$html = "
	<html>
	<body>
		<h1 style='color:blue;'>Hello Dompdf</h1>
		<table border='1'>
		
			<tr>
				<td>#</td>
				<td>Reg. Number</td>
				<td>Student Name</td>
				<td>Sex</td>
				<td>Subjects</td>
				<td>Sex</td>
			</tr>
			<tr>
				<td>#</td>
				<td>csc/22/2666</td>
				<td>Oladunni Abimbola</td>
				<td>Male</td>
				<td>English</td>
				<td><a href='https://www.nairaland.com' target='_blank'>download</a></td>
			</tr>";

			// $personalEmail = $_GET['email'];
			// $personalEmail = 'abimbolaoladunni8429@gmail.com';
			// $sql = "SELECT * FROM member_info WHERE personal_email = '$personalEmail' || work_email  = '$personalEmail'";
			// $result = mysqli_query($conn, $sql) or die(mysql_error());	
			
			
			
			// $str = "SELECT * FROM exam_candidates1 ORDER BY fullname ASC LIMIT 100";
			// $qry = mysqli_query($con,$str);
			// if (mysqli_num_rows($qry)>0){
			// 	$sn = 0;
			// 	while($row=mysqli_fetch_assoc($qry)){
			// 		$sn++;
			// 		$examno 	=	$row['referenceno'];
			// 		$fullname 	=	$row['fullname'];
			// 		$sex 		=	$row['sex'];
			// 		$examday	=	$row['examday'];
			// 		$venue		=	$row['venue'];
			// 		$nextrow = "
			// 		<tr>
			// 			<td>$sn.</td>
			// 			<td>$examno</td>
			// 			<td>$fullname</td>
			// 			<td>$sex</td>
			// 			<td>$examday</td>
			// 			<td>$venue</td>
			// 		</tr>";
			// 		$html .= $nextrow;
			// 	}
			// }	

		$html .= "</table>
	</body>
	</html>";

// $html = '<html><body><img src="acuret-logo.png" alt=""></body></html>';


	
	$dompdf->load_html($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portriat');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	// $dompdf->stream();
	$dompdf->stream("abimbola.pdf", array("Attachment" => false));


?>