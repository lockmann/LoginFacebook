
<!DOCTYPE html>
<html>
<head>
    <title>Facebook - Login</title>
    <link href="style.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon" />
</head>
<body>
<div class="container-fluid screen p-0">
            <div class="main">
                <div class="side-left">
                    <div class="logo-mobile">
                        <img src="logo.png">
                    </div>
                    <h3>Entre</h3>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail ou telefone" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" value="" />
                        </div>
                        <div class="form-group div-btn">
                            <input type="submit" class="btn" value="Entrar" />
                        </div>

                         <div class="form-group" id="registrar">
                            <a href="#cad" class="reg btn">Registre-se</a>
                        </div>

                        <div class="form-group">
                            <a href="#" class="">Esqueceu a senha?</a>
                        </div>
                </div>
                <div class="side-right" id="cad">
                    <div class="logo">
                        <img src="logo.png">
                    </div>
                    <h3>Registre-se</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail ou telefone" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Senha" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirme a senha" value="" />
                        </div>
                        <div class="form-group div-btn" >
                            <input type="submit" class="btn" value="Criar nova conta" />
                        </div>
            </div>
        </div>
        <div class="footer">Desenvolvido por Henrique Lockmann</div>
</body>
</html>