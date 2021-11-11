<!DOCTYPE html> <!-- menandakan dokumen adalah html5 -->
<html lang="en">
 <head><title>CV</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     <style type="text/css">
		.konten{
			height: 80px;
		}
        .konten2{
			height: 900px;
		}
        .page1{
        width: 860px;
        padding: 13% 0 0;
        margin: auto;
        }
        .form {
        position: relative;
        z-index: 1;
        background: #294131;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    h5{
        color:#294131;
        color:white;
        font-size:17px;
    }
	</style>
 </head>
 <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        
    <nav class="container-fluid navbar navbar-expand-lg navbar-dark "  style="background-color:#294131;">
            <a class="navbar-brand" href="dashboard.php"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portofolio.html">Portofolio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kontak.php">Contact</a>
                </li>
                </ul>
            </div>
            </nav>
        <div class="container-fluid">
        <div class="row">
		    <div class="col-md-12 konten2" style="background-color:#386135;">
            <div class="container" style="color:white">
            <div class="row">
                <div class="col-sm-12"><br>
                    <h4 class="text-center">Contact via email
                    </h4>
                    <hr>
                </div>
            </div>
            <?php 

                $statusMsg = '';
                $msgClass = '';
                if(isset($_POST['submit'])){
                    // Get the submitted form data
                    $email = $_POST['email'];
                    $name = $_POST['name'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    
                    // Cek apakah ada data yang belum diisi
                    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
                        
                        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                            $statusMsg = 'Please enter your valid email.';
                            $msgClassk = 'errordiv';
                        }else{
                            // Pengaturan penerima email dan subjek email
                            $toEmail = 'koliliknur@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
                            $emailSubject = 'Pesan website dari '.$name;
                            $htmlContent = '<h2> via Form Kontak Website</h2>
                                <h4>Name</h4><p>'.$name.'</p>
                                <h4>Email</h4><p>'.$email.'</p>
                                <h4>Subject</h4><p>'.$subject.'</p>
                                <h4>Message</h4><p>'.$message.'</p>';
                            
                            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            
                            // Header tambahan
                            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
                            
                            // Send email
                            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                                $msgClass = 'succdiv';
                            }else{
                                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                                $msgClass = 'errordiv';
                            }
                        }
                    }else{
                        $statusMsg = 'Harap mengisi semua field data';
                        $msgClass = 'errordiv';
                    }
                }
                ?>
            
                </head>
                <body>
                <center>
                    <div class="form-floating mb-3 form">
                        <?php if(!empty($statusMsg)){ ?>
                            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                        <?php } ?>
                        <form action="" method="post">
                            <h5>Name</h5>
                            <input type="text" name="name" placeholder="Your Name" required="">
                            <h5>Email </h5>
                            <input type="email" name="email" placeholder="email@example.com" required="">
                            <h5>Subject</h5>
                            <input type="text" name="subject" placeholder="Subject" required="">
                            <h5>Message</h5>
                            <textarea class="" name="message" placeholder="test" required=""> </textarea>
                            <center><input Type="submit" class="btn btn-danger" name="submit" value="Submit"></center>
                            <div class="clear"> </div>
                        </form>
                    </div>
                        </center>  

            </div>
            </div>
	    </div>

    </div>
 </body>
</html>
