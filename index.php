<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cloud Uploader</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <div class="text-center">
            <div style="background: blue;color: white;">
                <h1 style="padding: 30px;">Bienvenue dans le Cloud Uploader</h1>
            </div>
            <p class="mt-4">Qu'allez-vous uploader aujourd'hui ?</p>

            <form method="post" action="upload.php" enctype="multipart/form-data" style="margin-top: 100px;">
                <div class="custom-file col-md-6">
                    <input type="file" class="custom-file-input" name="uploadfile"  id="customFile"/>
                    <label class="custom-file-label" for="customFile">Sélectionner un fichier</label>
                </div>
                <div class="mt-4">
                    <input type="submit" class="btn btn-primary" value="Uploadez-moi !" />
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>