 <!DOCTYPE html>
<html>
<head>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
.rc {
    border-radius:20px;
}

.rc1 {
    border-radius:10px;
}

.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {

  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 1000px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
</head>
<body>

 <form class="col-sm" action="" enctype="multipart/form-data" method="POST">


<section class="bg-white dark:bg-gray-800">
        <nav class="container p-6 mx-auto lg:flex lg:justify-between lg:items-center">
            <div class="flex items-center justify-between">
                <div>
                    <img class="rc1" src="https://i.imgur.com/3HewRiE.png" width="250px"/>
                </div>
    
                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
    
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="flex flex-col mt-4 space-y-2 lg:-mx-6 lg:mt-0 lg:flex-row lg:space-y-0">
               
            <a class="block h-10 px-5 py-2 mt-4 text-sm text-center text-gray-700 capitalize transition-colors duration-200 transform border rounded-md dark:hover:bg-gray-700 dark:text-white lg:mt-0 hover:bg-gray-100 lg:w-auto"
                href="#">
                Home
            </a>
               
            </div>
    
           
        </nav>
    
        <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                  
                    <h1 class="text-3xl font-bold tracking-wide text-gray-800 dark:text-white lg:text-5xl">
                        Unlimited Image Uploader
                    </h1>
                    
                    <div class="mt-8 space-y-5">
                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Direct Link Generator / Supports All Formats</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Truly Unlimited, No size restrictions!</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Easy to Use</span>
                            <hr/>  <button onsubmit="return false;"  type="submit" name="submit" value="Upload"  class="bg-purple-500 py-4 px-16 text-white font-bold   rounded hover:bg-gray-200 hover:text-gray-800">Start Upload</button><br/><br/>
                        </p>
                    </div>
                </div>
 
                
            </div>
    
            <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                
             
              
 
                
                <div class="upload-btn-wrapper">
  <button class="btn"> <img class="object-cover w-full h-full mx-auto rounded-md rc lg:max-w-2xl" src="https://i.imgur.com/H4e6D7r.png" ></button>
  <input accept="image/*" type="file" name="img"  id="filePhoto" />
</div>
               
                
                
                
                
            </div>
        </div>
    </section>

    

        

<div  onclick="$('#filePhoto').click()">
 




    <!--<input accept="image/*" type="file" name="img"  id="filePhoto" /> -->

</div>


        

<?php
if(isset($_POST['submit'])){ 
 $img=$_FILES['img']; 
 if($img['name']==''){  
  echo "<div class='bg-indigo-50 text-center py-4 lg:px-4'>
  <div class='p-2  items-center text-indigo-800 leading-none lg:rounded-full flex lg:inline-flex'>
    <span class='flex rounded-full uppercase px-2 py-1 text-xs font-bold mr-3'> <i class='fa fa-warning' style='font-size:15px;color:red'></i></span>
    <span class='font-semibold mr-2 text-left flex-auto'>Select an image to upload </span>
  
  </div>
</div>";
 }
 else {
  $filename = $img['tmp_name'];
  $client_id='67fd839d20ce847';		// Replace this with your client_id, if you want images to be uploaded under your imgur account
  $handle = fopen($filename, 'r');
  $data = fread($handle, filesize($filename));
  $pvars = array('image' => base64_encode($data));
  $timeout = 30;
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
  curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);

  $out = curl_exec($curl);
  curl_close ($curl);
  $pms = json_decode($out,true);
  $url=$pms['data']['link'];
  if($url!=''){
   echo "<div class='bg-indigo-50 text-center py-4 lg:px-4'>
  <div class='p-2  items-center text-indigo-800 leading-none lg:rounded-full flex lg:inline-flex'>
    <span class='flex rounded-full uppercase px-2 py-1 text-xs font-bold mr-3'> <i class='fa fa-check' style='font-size:15px;color:red'></i></span>
    <span class='font-semibold mr-2 text-left flex-auto'>Upload Successfully Completed </span>
  
  </div>
</div><br/>";
   
   
   echo "<div class='px-4 flex'><input class='rounded-l-lg  px-4 p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white' type='text' id='image-link' value='".substr($url,8)."'/><button type='button' class='px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4  border-yellow-500 border-t border-b border-r'>Image Generated..</button><br/></div>";

  }
  
  else{
   echo "<h4 class='bg-danger'>There’s a Problem</h4>";
   echo "<div>".$pms['data']['error']."</div>";  
  } 
 }
}
?>
</form>
        
  
</body>
</html>
 
 
 
 
 
 
 
  
   
  



    




