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
                <a href="/logins" class="bg-[#4200FF] hover:bg-[#4004EC] text-white text-md font-semibold font-poppins py-1 px-8 rounded-lg">Login</a>
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

        <div class="flex-row mx-auto">
            <h2 class="text-2xl font-poppins font-semibold text-center text-gray-700 mt-[440px]">Our Medicine Products</h2>
            <h2 class="font-poppins font-normal text-center text-[#B4B4B4] text-sm mt-8 break-words">We are dedicated to serve you
 best medicine product</h2>
        </div>    
        <div class="grid grid-cols-3 gap-4 mt-8 w-fit m-auto">
            <div class="bg-white h-40 shadow-lg rounded-lg aspect-square justify-center items-center">
                <div>
                    <img src="/landing/medicinevit.png" alt="/landing/medicinevit.png" class="bg-cover bg-center p-9 -mt-3">
                    <div class="-mt-8 ml-4">
                        <h1 class="font-poppins font-semibold text-xs text-left">Medicine and Vitamin</h1>
                    </div>
                </div>
            </div>
            <div class="bg-white h-40 shadow-lg rounded-lg aspect-square flex justify-center items-cemter">
                <div>
                    <img src="/landing/bodycare.png" alt="/landing/bodycare.png" class="bg-cover bg-center p-9 ml-3">
                    <div class="-mt-8 ml-10">
                        <h1 class="font-poppins font-semibold text-xs text-left">Personal Care</h1>
                    </div>
                </div>
            </div>
            <div class="bg-white h-40 shadow-lg rounded-lg aspect-square flex justify-center items-cemter mb-40">
                <div>
                    <img src="/landing/fitnessdietary.png" alt="/landing/fitnessdietary.png" class="bg-cover bg-center p-9 -mt-2">                    
                    <div class="-mt-8 ml-7">
                        <h1 class="font-poppins font-semibold text-xs text-left">Fitness and Dietary</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="FOOTER bg-[#4200FF] text-white rounded-t-lg border-12 p-8 pb-0">
            <div class="">
                <h1 class="text-3xl font-bold text-center">We Care About You</h1>
                <h2 class="text-xl text-center p-2">Find Any Medicine You Need!</h2>
                <div class="flex text-sm">
                    <div class="block p-8">
                        <div class="h-8 w-2"><br/></div>
                        <h1 class="font-bold text-md">Contact Us</h1>
                        <p>ITB Ganesa, Labtek V</p>
                        <p>Jl. Ganesa No. 10, Kecamatan Coblong,<br/> Kota Bandung, 40132</p>
                    </div>
                    <div class="p-8 pt-12">
                        <ul class="gap-4">
                            <li class="flex py-1 gap-2">
                                <img alt="ig" src="/landing/instagram.png"/>
                                <p>@tst.hospital</p>
                            </li>
                            <li class="flex py-1 gap-2">
                                <img alt="wa" src="/landing/whatsapp.png"/>
                                <p>+62 111 1111 1111</p>
                            </li>
                            <li class="flex py-1 gap-2">
                                <img alt="email" src="/landing/email.png"/>
                                <p>tst.hospital@gmail.com</p>
                            </li>
                            <li class="flex py-1 gap-2">
                                <img alt="website" src="/landing/website.png"/>
                                <p>tst.hospital.id</p>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full h-48 pt-40 align-bottom">
                        <p class="text-right align-text-bottom">© 2023 TST Hospital. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>