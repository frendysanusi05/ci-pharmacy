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
<body>
    <div class="min-h-screen bg-white mx-auto flex flex-row w-screen">
        <div class="flex h-full w-full flex-col">
            <div class="flex-none">
                <Image alt="logo" src="/logo.svg" width={159} height={152}/>
            </div>
            <div class="flex-1 p-10 font-semibold">
                <h1 class="text-black text-4xl font-['Poppins'] font-semibold pl-40 2mt-10">Hello, Welcome back!</h1>
                <h1 class="text-[#4200FF] text-3xl font-bold font-poppins pl-72 mt-10">Login</h1>
            
                <form action="" class="mt-5">
                    <div>
                        <label for="" class="block bg-white w-auto"></label>
                            <span class="px-52 flex font-semibold mt-10 text-neutral-700 text-sm font-poppins">Username</span>
                            <input type="text" placeholder="Enter your username" class=" ml-52 px-4 flex w-64 text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md font-poppins border-gray-400">
                    </div>
                    <div class="mt-2">
                        <label for="" class=""></label>
                            <span class="px-52 flex font-semibold mt-2 text-neutral-700 text-sm font-poppins">Password</span>
                            <input type="text" placeholder="Enter your password" class=" ml-52 flex w-64 px-4 text-xs justify text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md font-poppins border-gray-400">
                    </div>
                    <div class="mt-10 pl-72">
                        <button class="bg-[#4200FF] hover:bg-[#4004EC] text-white text-md font-medium font-poppins py-1 px-8 rounded-lg ">Login</button>
                    </div>
                </form>
            </div>
        </div>
            <div class="flex h-screen bg-[#4200FF] w-full rounded-l-lg">
                <img src="login/login.svg" alt="login/login.svg">
            </div>
    </div>
</body>
</html>
