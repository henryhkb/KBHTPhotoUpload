<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    

        
        

        <div class="container-fluid" style="margin-bottom: 270px;">
            <img class="rounded mx-auto d-block rounded-circle" id="preview" src="" alt="Image preview" width="309" height="300" >
           
        </div>
        <br/>
       
        <div class="text text-center">
            <input  id="uploaded-image" type="file" name=""  onchange="previewImage()">

            <a class="btn btn-primary" href="" download>Download</a>
        </div>
        
            
        
   

<script type="text/javascript">

function previewImage() {
    var input = document.getElementById('uploaded-image');
    var preview = document.getElementById('preview');

    var reader = new FileReader();
    reader.onload = function() {
        preview.src = reader.result;
    }

    if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
    }
}

    </script>
</body>
</html>