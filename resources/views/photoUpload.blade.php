<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <style>

            

            .uploadedImage{
               
                position: relative;
                bottom: 220px;
                
            }
        </style>
</head>

<body>
    {{-- 
        <div class="container-fluid" style="margin-bottom: 220px;" >
            <img class="rounded mx-auto d-block rounded-circle"  id="preview" src="" alt="Image preview" width="309" height="300" >
        </div>
        <br/>
       
        <div class="text text-center" >
            <input  id="uploaded-image" type="file" name=""  onchange="previewImage()">

            <button class="btn btn-primary" id="download">Download</button>
</div> --}}
    <div id="imgPreview" class="text text-center">
        <div class="firstUpload">
            <img class="img-fluid" src="{{ asset('img/photo.jpeg') }}" alt="" width="309" height="300">
        </div>

        <div class="uploadedImage">
            <img class="img-fluid  rounded-circle" id="preview" src="" alt="Image preview" width="150" height="450" >
        </div>

    </div>

    <div class="text text-center">
        <input type="file" id="uploaded-image" onchange="previewImage()">

        <button class="btn btn-primary" id="download">Download</button>
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


        window.onload = function(){
            document.getElementById("download")
            .addEventListener("click",()=>{
                const photoDownload = this.document.getElementById("imgPreview");
               html2pdf().from(photoDownload).save(); 
            })


        }
             
    </script>
</body>

</html>
