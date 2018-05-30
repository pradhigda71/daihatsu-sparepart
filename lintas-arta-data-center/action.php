<?php
// Start the session
session_start();
require './lib/phpmailer/PHPMailerAutoload.php';
?>
<html>
<body>

<?php
// Set session variables
$_SESSION['test'] = "yayan";

//print_r($_POST);

//variable

$nama = $_POST['nama'];
$perusahaan = $_POST['perusahaan'];
$jabatan = $_POST['jabatan'];
$nohp = $_POST['no-hp'];
$email = $_POST['email'];
$kebutuhan = $_POST['kebutuhan'];
$date = date("y-m-d h:i:s");

include('conn.php');

$sql = "INSERT INTO datalead (nama, perusahaan, jabatan, no_hp, email, kebutuhan, create_date, type)
VALUES ('$nama', '$perusahaan', '$jabatan', '$nohp', '$email', '$kebutuhan', '$date', 1)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    $mail = new PHPMailer;
    // Konfigurasi SMTP
    $mail->isSMTP();

    $mail->Host = "mail.neodigital.co.id";
    $mail->SMTPDebug = 1;
    //$mail->Port = 25;
    $mail->Port = 587;                                      // Set the SMTP port
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'rayno@neodigital.co.id';
    $mail->Password = 'neodigital123';
    //$mail->SMTPSecure = 'tls';

    $mail->setFrom('mail@lintasarta.com', 'Admin Lintasarta');
    $mail->addReplyTo('mail@lintasarta.com', 'Admin Lintasarta');
    // Menambahkan penerima
    $mail->addAddress('yaniarpradhigda@gmail.com');
    $mail->addAddress('info@lintasarta.co.id');
    // Menambahkan cc atau bcc
    $mail->addCC('emeraldo.aufar@lintasarta.co.id');
    $mail->addCC('desyaalathifaa@gmail.com');
    //$mail->addBCC('bcc@contoh.com');
    // Subjek email
    $mail->Subject = 'LP Form Inquiry';
    // Mengatur format email ke HTML
    $mail->isHTML(true);
    // Konten/isi email
    $mailContent = "
    <h1>Data </h1>
    <table>
      <thead>
        <th>Nama</th>
        <th>Perusahaan</th>
        <th>Jabatan</th>
        <th>No.HP</th>
        <th>Email</th>
        <th>Kebutuhan</th>
      </thead>
      <tbody>
      <tr>
        <td>" . $nama  . "</td>
        <td>" . $perusahaan  . "</td>
        <td>" . $jabatan  . "</td>
        <td>" . $nohp  . "</td>
        <td>" . $email  . "</td>
        <td>" . $kebutuhan  . "</td>
      </tr>
    ";
    $mail->Body = $mailContent;
    // Kirim email
    if(!$mail->send()){
        //echo 'Pesan tidak dapat dikirim.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }else{
        //echo 'Pesan telah terkirim';
        echo "<script>alert('email berhasil');</script>" ;
        echo "<script>window.location.href='http://develop-neodigital.com/lintas-arta-data-center/'</script>" ;
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

</body>
</html>
