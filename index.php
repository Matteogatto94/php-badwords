<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <form action="censorship.php" method="get">
           <div class="mb-3">
             <label for="sentence" class="form-label">Sentence</label>
             <input type="text" name="sentence" id="sentence" class="form-control" placeholder="Type here a Sentence" aria-describedby="sentenceHelper">
             <small id="wordHelper" class="text-muted">Just type a Sentence here</small>
           </div>

           <div class="mb-3">
             <label for="badword" class="form-label">Badword</label>
             <input type="text" name="badword" id="badword" class="form-control" placeholder="Type here a badword" aria-describedby="badwordHelper">
             <small id="badwordHelper" class="text-muted">Just type a Badword</small>
           </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>