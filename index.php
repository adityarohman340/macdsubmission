<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registeration Form</title>
</head>
<body>
    <div class="user">
        <h3>Form Registerasi User</h3>
        <form class="form">
            <div class="form__group">
                <input type="text" placeholder="Nama" class="form__input" name="nama" id="nama"/>
            </div>
                    
            <div class="form__group">
                <input type="email" placeholder="Email" class="form__input" name="email" id="email"/>
            </div>
                    
            <div class="form__group">
                <input type="text" placeholder="Bahasa Favorit" class="form__input" name="favlang" id="favlang"/>
            </div>

            <div class="form__group">
                <input type="text" placeholder="Pekerjaan" class="form__input" name="job" id="job"/>
            </div>
            <!-- the button -->
            <input type="submit" class="btn" name="submit" id="submit" value="Register">
            <input type="submit" class="btn" name="load_data" id="load_data" value="Tampilkan Data">
        </form>
    </div>  
</body>
</html>