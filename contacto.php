<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <?php include('templates/links.php')?>
</head>

<?php include('templates/header.php')?>
<body>
    <section>
        <div class="d-flex justify-content-center align-items-center" style="background-image: url('img/contacto/background-encabezado.jpg'); height: 706px; background-size: cover; background-position: center center;">
            <div class="container ">
                <h1 class="text-center text-white">CONTÁCTANOS</h1>
                <div class="w-100 d-flex justify-content-center"><div class="bg-white" style="height: 3px; width: 17%;"></div></div>
                <h6 class="text-center my-4 text-white">ESTAMOS PARA SERVIRTE 12/365 HRS</h6>
                <form class="mx-5" action="" style="padding: 0px 20% !important;">
                    <div class="row">
                        <div class="col-md-6 text-center mt-4">
                            <label class="form-label text-center text-white">Nombre (s)</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                        </div>
                        <div class="col-md-6 text-center mt-4">
                            <label class="form-label text-center text-white">Número Móvil</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+52 9999999999">
                        </div>
                        <div class="col-md-12 text-center mt-4">
                            <label class="form-label text-center text-white">Mensaje</label>
                            <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="w-100 text-center"><button type="submit" class="btn btn-vere mt-5">Enviar</button></div>
                    
                </form>
            </div>
        </div>
        <div class="container">
            <div style="background: #0d2ad5; background: #0d2ad5; height: 10px; margin-top: -5px;"></div>
        </div>

        
        
    </section>

    <section>
        <div class="row p-0 m-0">
            <div class="col-md-7 p-5">
                <h2 class="mb-4 text-center">¡ÚNETE A NUESTRA RED DE AFILIADOS!</h2>
                <p>
                    Si ya eres nuestro miembro, estás cordialmente invitado a unirte a nuestra gran
                    comunidad de agencias de turismo, tour operadores y ejecutivos del sector con
                    quienes podrás compartir conocimiento, ideas e incluso alianzas comerciales para
                    hacer de tu negocio, de los mejores del sector. <br><br>
                    Lo único que deberás hacer antes de ingresar, es comprobarnos que ya eres miembro;
                    los requisitos se otorgan durante tu admisión a nuestra red.

                </p>
                <div class="w-100 text-center"><button type="submit" class="btn btn-vere mt-5">INGRESA AQUÍ</button></div>
            </div>
            <div class="col-md-5" style="background-image: url('img/contacto/imagen-contacto.jpg'); background-size: cover; background-position: center;">
                
            </div>
        </div>
    </section>


    





</body>
<?php include('templates/footer.php')?>

</html>

<style>
    .btn-amarillo{
        background-color: #ffd500;
        color: white;
        border-radius: 33px;
        font-size: 17px;
        padding: 10px 40px;
    }
    .btn-amarillo:hover{
        background-color: white;
        color: black;
        
    }
    .btn-vere{
        background-color: #83b51e;
        color: white;
        border-radius: 33px;
        font-size: 17px;
        padding: 10px 40px;
    }
    .btn-vere:hover{
        background-color: white;
        color: black;
        
    }
    .check {
        width: 53px;
    }
    .cont{
        padding: 100px 0px;
    }
    .bg-gris{
        background-color: #f5f5f5;
    }

    .sombra{
        box-shadow: 1px 1px 6px 1px #0000006b;
    }
    .bg-azul{
        background-color: #008ee3;
    }
</style>