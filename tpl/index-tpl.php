<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Images Uploader (Drag &amp; browse) </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
<link rel="stylesheet" href="./assets/css/style.css">


</head>
<body>
<!-- partial:index.partial.html -->
<!-- Upload Area -->
<div id="uploadArea" class="upload-area">
  <!-- Header -->
  <div class="upload-area__header">
    <h1 class="upload-area__title">Upload your file</h1>
    <p class="upload-area__paragraph">
      
      <strong class="upload-area__tooltip">
        
        <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
      </strong>
    </p>
  </div>
  <!-- End Header -->

  <!-- Drop Zoon -->
  <form action="" method="post" enctype="multipart/form-data">

  <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
    <span class="drop-zoon__icon">
      <i class='bx bxs-file-image'></i>
    </span>
    <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
    <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
    <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
    <input name="file" type="file" id="fileInput" class="drop-zoon__file-input" accept="">
    
    
  </div><input name="userid" type="number" placeholder="شماره تلفن را وارد کنید" required ><br><button type="submit">upload</button>
</form>
  <!-- End Drop Zoon -->

  <!-- File Details -->
  <div id="fileDetails" class="upload-area__file-details file-details">
    <h3 class="file-details__title">Uploaded File</h3>

    <div id="uploadedFile" class="uploaded-file">
      <div class="uploaded-file__icon-container">
        <i class='bx bxs-file-blank uploaded-file__icon'></i>
        <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
      </div>

      <div id="uploadedFileInfo" class="uploaded-file__info">
        <span class="uploaded-file__name">Proejct 1</span>
        <span class="uploaded-file__counter">0%</span>
      </div>
    </div>
  </div><?php if (isset($targett_path)){echo "<a>فایل آپلود اولدو</a><br>";echo "<a href=$targett_path>$targett_path</a>";}?>
  
  <!-- End File Details -->
</div>

<!-- End Upload Area -->
<!-- partial -->
  <script  src="./assets/js/script.js"></script>

</body>
</html>
