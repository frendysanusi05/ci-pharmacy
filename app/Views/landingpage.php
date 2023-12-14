<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body class="font-poppins bg-[#F5F5F5] h-screen">
    <header class="bg-[#F5F5F5]">
        <nav class="flex justify-between items-center w-[92%] mx-auto mr-44">
            <div>
                <img src="/logo.svg" alt="/logo.svg">
            </div>
            <div class="h-full flex-col font-poppins font-semibold md:static absolute bg-[#F5F5F5] md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5 ">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-blue-700" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">About</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Contact Us</a>            
                    </li>
                </ul>
            </div>
            <div>
                <button class="bg-[#4200FF] hover:bg-[#4004EC] text-white text-md font-semibold font-poppins py-1 px-8 rounded-lg ">Login</button>
            </div>
        </nav>
    </header>

    <div class="flex flex-row mx-auto min-h-screen">
        <div>
           <h1 class="font-semibold font-poppins text-black text-4xl w-full ml-12 mt-28 mb-3">Find the Doctor</h1>
            <h1 class="font-semibold font-poppins text-[#4200FF] text-4xl ml-12 mb-3 w-full">Recommended Medicines</h1>
            <h1 class="font-semibold font-poppins text-black text-4xl ml-12 mb-3">You Need at</h1>
            <h1 class="font-semibold font-poppins text-[#E27712] text-4xl ml-12">Affordable Prices</h1>
        </div>
        <div class="bg-transparent pl-80 mt-8 w-18 h-14 -mr-2">
            <img alt="/landing/medicine_2.png" src="/landing/medicine_2.png">
        </div>
    </div>
    <div class="flex flex-row mx-auto -my-72">
        <div class="-mt-2 h-2">
            <img alt="/landing/medicine_3.png" src="/landing/medicine_3.png">
        </div>
        <div class="w-1/2 text-right">
            <h1 class="font-semibold font-poppins text-black text-2xl w-full ml-12 mt-28 mb-3">Health is a priceless treasure, and we are committed to being your loyal partner on your journey to well-being. At Apotek Sejahtera, we present a selection of the best health products, as well as information that can help you make wise decisions for yourself and your family.</h1>
        </div>
    </div>
    <div>
        <div class="flex-row mx-auto">
            <h2 class="text-2xl font-poppins font-semibold text-center text-gray-700 my-96">Our Medicine Products</h2>
        </div>    
        <div class="box-content bg-white h-32 w-32 p-4 shadow-lg rounded-lg">
            <div>

            </div>
        </div>
    </div>

</body>
</html>