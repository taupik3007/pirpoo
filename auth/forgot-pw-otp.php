<?php 
$id = $_GET['id'];
if(!isset($id)){
    header('location: forgot-pw.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Ulang Password</title>
    <link rel="icon" type="image/png" href="../public/assets/img/Logo pirpo.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/login.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="fullscreen-bg">
        <section class="vh-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="container">
                        <div class="h1 fw-bold mb-2 text-uppercase text-center" style="color: #00FF94;">
                            Reset Password
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light" style="border-radius: 80px 15px;">
                            <div class="card-body p-5">
                                <div class="mb-md-5 mt-md-3">
                                    <div class="text-center">
                                        <p class="text-black-50 mb-4">Masukan Kode OTP
                                        </p>
                                    </div>
                                    <form action="proses_otp.php" method="POST">
                                        
                                        <div class="form-outline mb-5">
                                            <input type="hidden" name="id" value = "<?php echo $id;?>">
                                            <input type="text" name="otp" id="otp" class="form-control form-control-lg"
                                                required pattern="[0-9]+" />
                                            <label class="form-label" name="otp" for="otp" style="color: #3b11a4;">Kode OTP</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" onclick="lanjut()">Lanjutkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
    function lanjut() {
        var otp = document.getElementById("otp").value;
        if (otp === "") {
            showNotification("Kamu belum mengisi hati ini", "error");
        }
    }

    function showNotification(message, type) {
        if (!("Notification" in window)) {
            alert(message);
            return;
        }

        if (Notification.permission === "granted") {
            var notification = new Notification(message);
        } else if (Notification.permission !== "denied") {
            Notification.requestPermission().then(function(permission) {
                if (permission === "granted") {
                    var notification = new Notification(message);
                } else {
                    alert(message);
                }
            });

        } else {
            alert(message);
        }
    }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js">
    </script>
</body>

</html>