<?php include('header.php') ?>

<body>
    <div class="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none bg-neutral-800/70">
            <div class="bg-white h-72 w-[400px] rounded-2xl shadow-2xl">
                <h1 class="text-[#EB1E11] text-xl font-bold font-poppins text-center mt-5">Delete Medicine</h1>
                <h1 class="text-black mt-3 text-md font-bold font-poppins text-center">Are you sure to delete this medicine?</h1>
                <div class="items-center justify-center m-auto">
                    <img src="/popup/warning.png" alt="/popup/warning.png" class="mr-4 h-24 w-24 mt-2 items-center m-36">
                </div>

                <div class="items-center -mt-[136px] m-[128px]">
                    <button class="text-center h-8 w-[128px] bg-[#EB1E11] hover:bg-[#D02015] text-white text-sm font-medium font-poppins rounded-lg py-1 px-8">Yes</button>
                    <button onclick="view('/medicines')" class="text-center h-8 w-[128px] bg-[#9A9A9A] hover:bg-gray-500 text-white text-sm font-medium font-poppins rounded-lg py-1 px-8 mt-2">Cancel</button>
                </div>
            </div>
            
    </div>        

</body>

</html>