<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #dfb489; font-family: Arial, sans-serif;">

    <?php include 'logs/header.php';?>

    <main>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form name="login" onsubmit="login(event);" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <div class="mb-3">
                    <label for="usuario" class="form-label" style="font-weight: bold;">USUARIO</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Introduce usuario" required />
                </div>

                <div class="mb-3">
                    <label for="clave" class="form-label" style="font-weight: bold;">CLAVE</label>
                    <input type="password" class="form-control" name="clave" id="clave" placeholder="Introduce contraseña" required />
                </div>

                <div class="d-flex justify-content-center mb-2">
                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">ENTRAR</button>
                    <button type="reset" class="btn btn-danger">BORRAR</button>
                </div>

                <a href="#" class="forgot-password text-center">¿Olvidó su contraseña?</a>
            </form>
        </div>
    </main>

    <?php include 'logs/footer.php';?>

    <script>
        function login(event) {
            event.preventDefault(); // Evita que el formulario se envíe
            let usuario = document.login.usuario.value;
            let clave = document.login.clave.value;

            if (usuario === 'andres' && clave === '1234') {
                window.location('inicio.php')
            } else {
                alert('Credenciales incorrectas');
            }
        }
    </script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQ+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
