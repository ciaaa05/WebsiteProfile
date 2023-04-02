<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    	
</head>
<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4">
                <h1 class="fa-4"><span class="bg-white text-dark rounded shadow px-2 me-2">CL</span><span class="text-black">Coding</span></h1>
                <button class="btn d-md-none d-blocklose-btn px-1 py-0 text-black"><i class="fal fa-stream"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class = "active"><a href="#" class="text-decoration-none px-3 py-2 d-block">Home</a></li>
                <li class = ""><a href="#" class="text-decoration-none px-3 py-2 d-block">About Me</a></li>
                <li class = ""><a href="#" class="text-decoration-none px-3 py-2 d-block">Education</a></li>
                <li class = ""><a href="#" class="text-decoration-none px-3 py-2 d-block">Personality</a></li>
                <li class = ""><a href="#" class="text-decoration-none px-3 py-2 d-block">Skills</a></li>
                <li class = ""><a href="#" class="text-decoration-none px-3 py-2 d-block">Interest</a></li>
            </ul>
            <hr class="h-color mx-2">
        </div>

        <div class="content">
            
        </div>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".sidebar ul li").on('click', function(){
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });
    </script>

</body>
</html>