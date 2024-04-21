<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
            
</head>


<body class="bg-white font-sans antialiased">
    <div class="flex h-screen ">
        <!-- Sidebar -->
        <div class="w-16 xl:w-1/4"></div>
        <div class="bg-white text-black xl:w-64 flex-shrink-0 fixed">
            <img src="../src/img/UVT_Logo.png" class="h-8 xl:h-10 w-auto sm:items-center mx-2 xl:ml-12 my-6 ">
            <!-- Small Side Bar-->
            <div class=" bg-white xl:hidden items-center flex justify-center flex-col mt-10 ">
            <img src="../src/img/Home_Icon_Pink.png" alt="Logo" class="h-7 " >
            <img src="../src/img/Explore_Icon.png" alt="Logo" class="h-7 mt-3" >
            <img src="../src/img/MyFriend_Icon.png" alt="Logo" class="h-7 mt-3" >
            <img src="../src/img/Notification_Icon.png" alt="Logo" class="h-7 mt-3" >
            <img src="../src/img/Setting_Icon.png" alt="Logo" class="h-7 mt-3" >
            <img src="../src/img/Profile_Icon.png" alt="Logo" class="h-6 mt-3" >
            <div class="flex  flex-col content-end mt-56">
                <img src="../src/img/Help_Icon.png" alt="Logo" class="h-6 mt-3" >
                <img src="../src/img/Logout1_Icon.png" alt="Logo" class="h-6 mt-3" >
            </div>
            </div>
        </div>
        <!-- Content -->

        <div class=" w-10/12 grid grid-cols-1">
            <div class="border-b-8 border-lightGrey sm:mx-5  font-plusJakarta ">
                <label for="searchInput" class="flex items-center bg-gray-100 rounded-xl mt-4 p-2 cursor-pointer lg:hidden">
                    <img src="../src/img/Search_Icon.png" alt="Search" class="w-5 h-5 mr-2">
                    <input id="searchInput" class="bg-transparent border-none focus:outline-none" type="text" placeholder="Search Friends">
                </label>
                
                <label for="statusInput" class="flex items-center rounded-xl sm:ml-3 mt-4 lg:mt-8 cursor-pointer">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-10 w-10 my-1 mr-4">
                    <input id="statusInput" class="bg-transparent border-none focus:outline-none flex-grow" type="text" placeholder="What's Happening...">
                </label>
                
                <div class="flex flex-row mt-4 ml-20 mb-4">
                    <label>
                        <img src="../src/img/Image_Icon.png" alt="Image" class="h-5 w-5 mr-5" id="addImageButton">
                        <input type="file" name="fileInput" id="fileInput" accept=".png, .jpg, .jpeg" style="display: none; visibility: none;">
                    </label>
                    <label>
                        <img src="../src/img/Gif_Icon.png" alt="Image" class="h-5 w-5 mr-5" id="addImageButton">
                        <input type="file" name="fileInput" id="fileInput" accept=".gif" style="display: none; visibility: none;">
                    </label>
                    
                    <img src="../src/img/Sticker_Icon.png" alt="Sticker" class="h-5 w-5">
                    <button class="bg-pink text-sm font-semibold text-white rounded-3xl py-1 px-4 mt-3 ml-auto mr-7">Tweet</button>
                </div>

                <!-- <script>
                    const addImageButton = document.getElementById('addImageButton');
                    addImageButton.addEventListener('click', function() {
                        // Your code to handle the click event here
                        console.log('Image button clicked');
                        // Add image functionality here
                    });
                </script> -->
            </div>
            <!-- Post 1 -->
            <div class="border-b-8 border-lightGrey sm:mx-5">
                <div>
                    <div class=" flex items-center relative mt-3 mb-2">
                        <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-10 w-10 sm:ml-3" >
                        <h1 class="ml-3 font-plusJakarta font-bold">Hendry</h1>
                        <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5"> 
                        <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                        <p class="font-extrabold text-black text-opacity-50 mx-2">&middot;</p>
                        <p class="text-xs sm:text-sm text-black text-opacity-50 font-plusJakarta">1 Jam yang lalu</p>
                    </div>

                    <div>
                        <p class="font-normal text-sm ml-5 sm:ml-16">趁还有时间，开心吧！</p>
                        <img src="../src/img/User_Post11.png" alt="Post" class="h-52 w-72 sm:w-80 lg:w-7/12 ml-5 sm:ml-16 mt-2">
                        <div class="flex  ml-8 sm:ml-16 w-7/12 mt-3 mb-8 ">
                            <img src="../src/img/Like_Icon.png" alt="Like" class="w-6 h-6 sm:ml-4">
                            <img src="../src/img/Comment_Icon.png" alt="Comment" class="w-6 h-6 mx-24 sm:mx-28">
                            <img src="../src/img/Save_Icon.png" alt="Save" class="w-6 h-6 ">
                        </div>
                    </div>
                </div>  
            
            </div>
            <!-- post 2 -->
            <div class="border-b-8 border-lightGrey sm:mx-5" >
                <div class=" flex items-center relative mt-3 mb-4">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-10 w-10 sm:ml-3" >
                    <h1 class="ml-3 font-plusJakarta font-bold">Hendry</h1>
                    <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                    <p class="font-extrabold text-black text-opacity-50 mx-2">&middot;</p>
                    <p class="text-xs sm:text-sm text-black text-opacity-50 font-plusJakarta">1 Jam yang lalu</p>
                </div>
                
                <div class=" flex items-center relative mt-3 mb-2">
                    <p class="font-normal text-sm ml-5 sm:ml-16">Mantap Jiwa Guys! 🤣🤣</p>
                </div>
            </div>

              <!-- post 3 -->
              <div class="border-b-8 border-lightGrey sm:mx-5">
                <div>
                    <div class=" flex items-center relative mt-3 mb-2">
                        <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-10 w-10 sm:ml-3" >
                        <h1 class="ml-3 font-plusJakarta font-bold">Hendry</h1>
                        <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                        <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                        <p class="font-extrabold text-black text-opacity-50 mx-2">&middot;</p>
                        <p class="text-xs sm:text-sm text-black text-opacity-50 font-plusJakarta">1 Jam yang lalu</p>
                    </div>

                    <div>
                        <p class="font-normal text-sm ml-5 sm:ml-16">趁还有时间，开心吧！</p>
                        <img src="../src/img/User_Post11.png" alt="Post" class="h-52 w-72 sm:w-80 lg:w-7/12 ml-5 sm:ml-16 mt-2">
                        <div class="flex  ml-8 sm:ml-16 w-7/12 mt-3 mb-8 ">
                            <img src="../src/img/Like_Icon.png" alt="Like" class="w-6 h-6 sm:ml-4">
                            <img src="../src/img/Comment_Icon.png" alt="Comment" class="w-6 h-6 mx-24 sm:mx-28">
                            <img src="../src/img/Save_Icon.png" alt="Save" class="w-6 h-6 ">
                        </div>
                    </div>
                </div>  
            
            
            </div>
            
        </div>

    <div class=" w-1/2  mr-12 font-plusJakarta hidden lg:inline">
        <label for="searchInput" class="flex items-center bg-gray-100 rounded-xl mt-10 p-2 cursor-pointer">
            <img src="../src/img/Search_Icon.png" alt="Search" class="w-5 h-5 mr-2">
            <input id="searchInput" class="bg-transparent border-none focus:outline-none" type="text" placeholder="Search Friends">
        </label>
        <h1 class="font-semibold text-6xl mt-10 ml-4">TOP</h1>
        <h1 class="font-semibold text-4xl mt-1 ml-4 text-pink ">Tweet Today</h1>
        
        <div class="mt-10 ml-4">
            <div class="border-b-8 border-lightGrey ml-1 mr-20">
                <div class=" flex items-center relative mt-4 mb-3">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-7 w-7 mx-3" >
                    <h1 class="font-plusJakarta font-bold">Hendry</h1>
                    <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                </div>
            </div>

            <div class="border-b-8 border-lightGrey ml-1 mr-20">
                <div class=" flex items-center relative mt-4 mb-3">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-7 w-7 mx-3" >
                    <h1 class="font-plusJakarta font-bold">Hendry</h1>
                    <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                </div>
            </div>
            <div class="border-b-8 border-lightGrey ml-1 mr-20">
                <div class=" flex items-center relative mt-4 mb-3">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-7 w-7 mx-3" >
                    <h1 class="font-plusJakarta font-bold">Hendry</h1>
                    <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                </div>
            </div>

        </div>
        <div class="mt-10 ml-4">
            <div class="flex">
                <h1 class="font-semibold text-lg ">TOP TWEET </h1>
                <H1 class="font-semibold text-lg  text-pink ml-1">TODAY</H1>
            </div>

            <div class="border-b-8 border-lightGrey ml-1 mr-20">
                <div class=" flex items-center relative mt-4 mb-1">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-7 w-7 mx-3" >
                    <h1 class="font-plusJakarta font-bold">Hendry</h1>
                    <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                    <p class="font-extrabold text-black text-opacity-50 mx-2">&middot;</p>
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta  whitespace-nowrap">1 Jam yang lalu</p>
                </div>
                <div class=" flex items-center relative mb-4">
                    <p class="font-normal text-sm ml-12">Mantap Jiwa Guys! 🤣🤣</p>
                </div>
            </div>

            <div class="border-b-8 border-lightGrey ml-1 mr-20">
                <div class=" flex items-center relative mt-4 mb-1">
                    <img src="../src/img/Profile_Icon.png" alt="Icon" class="h-7 w-7 mx-3" >
                    <h1 class="font-plusJakarta font-bold">Hendry</h1>
                    <img src="../src/img/Verified_Icon.png" alt="Verified" class="h-5 w-5">
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta ml-2">@xchnly</p>
                    <p class="font-extrabold text-black text-opacity-50 mx-2">&middot;</p>
                    <p class="text-sm text-black text-opacity-50 font-plusJakarta whitespace-nowrap">1 Jam yang lalu</p>
                </div>
                <div class=" flex items-center relative mb-4">
                    <p class="font-normal text-sm ml-12">Mantap Jiwa Guys! 🤣🤣</p>
                </div>
            </div>

         
            
       
    </div>

    </div>
</body>

</html>