<html>
<header>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>


<?php
session_start();
include('conn.php');


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../email/prcd/email/Exception.php';
    require '../../email/prcd/email/PHPMailer.php';
    require '../../email/prcd/email/SMTP.php';

    $id = $_SESSION['id'];
    $email = $_SESSION['correo'];
    $nombre = $_SESSION['nombre'];

    $query_email="SELECT * FROM email WHERE id_ext='$id'";
    $resultado_email= $conn->query($query_email);
    // $row_email=$resultado_email->fetch_assoc();
    $row_email = $resultado_email->num_rows;
    if ($row_email == 0){
    // if (!$resultado_email){
        // echo "<script type=\"text/javascript\">Swal.fire('Usuario ya registrado').then(function(){window.location='index.html';});</script>";
        
        // $row=$validar->fetch_assoc();
        
        // $usuario=$row['usuario'];
        // $pwd=md5($row['pwd']);
        // $nombre=$row['nombre'];
        // $email=$row['correo'];
    
    
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'premioestatalinjuventud2021';                     // SMTP username
        $mail->Password   = 'premiozac2203';                               // SMTP password
        $mail->SMTPSecure = 'SSL';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom('premioestatalinjuventud2021@gmail.com', 'PEJ21 - INJUVENTUD');
        $mail->addAddress($email, $nombre);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('tecnologias.injuventud@gmail.com');
        // $mail->addBCC('bcc@example.com');
    
        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';                                  // Set email format to HTML
        $mail->Subject = 'Proceso finalizado';
        $mail->Body    = '¡Felicidades! Terminaste de subir tu expediente para participar en el <b>Premio Estatal de la Juventud 2021</b>.<br><br> Nos mantendremos en contacto por medio de tus datos personales.<br><br><b>INJUVENTUD</b>';
        $mail->AltBody = 'Mensaje expediente completo';
    
        $mail->send();
        // echo 'Message has been sent';
        $validacion = 1;
        $query_agregar_mail="INSERT INTO email(id_ext,validacion) VALUES('$id','$validacion')";
        $resultado_agregar_correo= $conn->query($query_agregar_mail);
        // echo "<script type=\"text/javascript\">location.href='../dashboard.php'</script>";
        echo "<script type=\"text/javascript\">Swal.fire(
            'Proceso terminado',
            'Has terminado de cargar tu expediente al sistema.',
            'success'
          ).then(function(){window.location='../dashboard.php';});</script>";

        
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    

    
    }   // fin validación correo

    else{

        echo "<script type=\"text/javascript\">Swal.fire(
            'Proceso terminado',
            'Has terminado de cargar tu expediente al sistema.',
            'warning'
          ).then(function(){window.location='../dashboard.php';});</script>";
    }

    ?>

</html>
