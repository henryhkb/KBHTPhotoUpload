<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    
        <style>
            body{
                background-color: transparent;
            }
            

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
    <div  class="text text-center" id="canvas">
        <div class="firstUpload" >
            <img class="img-fluid" src="{{ asset('img/photo.png') }}" alt="" width="309" height="300">
        </div>

        <div class="uploadedImage">
            <img class="img-fluid  rounded-circle" id="preview" src="" alt="Image preview" width="150" height="450" >
        </div>

    </div>

    <div class="text text-center">
        <input type="file" id="uploaded-image" onchange="previewImage()">

        <button class="btn btn-primary" id="canvasDownload">Download</button>
    </div>


    <script src="{{asset('html2canvas.min.js')}}"></script>


    <script >
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


       document.getElementById("canvasDownload").onclick = function(){
            const screenshotTarget = document.getElementById("canvas");

            html2canvas(screenshotTarget).then((canvas)=>{
                const base64image = canvas.toDataURL("image/png");
                var anchor = document.createElement('a');
                anchor.setAttribute("href", base64image);
                anchor.setAttribute("download", "myPhoto.png");
                anchor.click();
                anchor.remove(); 
            });
       }


        


        // window.onload = function(){
        //     document.getElementById("download")
        //     .addEventListener("click",()=>{
        //         const photoDownload = this.document.getElementById("imgPreview");
        //        html2canvas().from(photoDownload).save(); 
        //     })


        // }


        
    </script>
</body>

</html>
