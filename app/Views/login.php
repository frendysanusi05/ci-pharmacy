<?php include('header.php') ?>

<body>
    <div class="min-h-screen bg-white mx-auto flex flex-row w-screen">
        <div class="flex h-full w-full flex-col">
            <div class="flex-none">
                <Image alt="logo" src="/logo.svg" width={159} height={152}/>
            </div>
            <div class="flex-1 p-10 font-semibold">
                <h1 class="text-black text-4xl font-['Poppins'] font-semibold pl-40 2mt-10">Hello, Welcome back!</h1>
                <h1 class="text-[#4200FF] text-3xl font-bold font-poppins pl-72 mt-10">Login</h1>
            
                <form action="" method="post" class="mt-5">
                    <div>
                        <label for="" class="block bg-white w-auto"></label>
                            <span class="px-52 flex font-semibold mt-10 text-neutral-700 text-sm font-poppins">Username</span>
                            <input type="text" name="username" placeholder="Enter your username" class=" ml-52 px-4 flex w-64 text-xs text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md font-poppins border-gray-400" required>
                    </div>
                    <div class="mt-2">
                        <label for="" class=""></label>
                            <span class="px-52 flex font-semibold mt-2 text-neutral-700 text-sm font-poppins">Password</span>
                            <input type="text" name="password" placeholder="Enter your password" class=" ml-52 flex w-64 px-4 text-xs justify text-start placeholder-gray-500 my-2 bg-neutral-100 py-2 rounded-md font-poppins border-gray-400" required>
                    </div>
                    <div class="mt-10 pl-72">
                        <button type="submit" class="bg-[#4200FF] hover:bg-[#4004EC] text-white text-md font-medium font-poppins py-1 px-8 rounded-lg ">Login</button>
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
