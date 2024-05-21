index.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Watermark ke dalam gambar</title>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        html, body{
            min-height:100%;
            width:100%;
        }
        .img-holder {
            text-align: center;
            height: 20vw;
            border: 1px solid;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
        }
        .img-holder > img{
            max-height:calc(100%);
            max-width:calc(100%);
            object-fit:scale-down;
            object-position:center center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="./">Menambah Watermark ke dalam sebuah gambar</a>
            <div>
                <a href="https://sourcecodester.com" class="text-light fw-bolder h6 text-decoration-none" target="_blank">Hanif Rahman</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid px-5 my-3">
        <div class="border px-3 py-2 rounded">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                        <div class="mb-3">
                            <label for="upload" class="form-label">Upload File</label>
                            <input class="form-control" type="file" name="upload" accept="image/jpeg, image/png" id="upload">
                        </div>
                        <div class="mb-3 d-grid">
                            <button class="btn btn-primary btn-block rounded-pill">Upload dan tambah Watermark</button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="clearfix my-3"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card round-0">
                    <div class="card-body">
                        <div class="img-holder">
                            <?php if(is_file("upload/original.png")): ?>
                            <img src="upload/original.png?v=<?= time() ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card round-0">
                    <div class="card-body">
                        <div class="img-holder">
                            <?php if(is_file("upload/copy_w_watermark.png")): ?>
                            <img src="upload/copy_w_watermark.png?v=<?= time() ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix my-3"></div>
        <div class="col-lg-4 mx-auto d-grid">
            <a class="btn btn-primary rounded-pill" href="upload/copy_w_watermark.png?v=<?= time() ?>" download="image_w_watermark.png">Download gambar dengan Watermark</a>
        </div>
    </div>
</body>
</html>
