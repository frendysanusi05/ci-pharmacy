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
    <div class="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none bg-neutral-800/70">
        <div class="bg-white h-96 w-[450px] rounded-2xl shadow-2xl">
            <div class="flex justify-end">
                <img src="/popup/close.png" alt="/popup/close.png" class="mr-4 h-6 w-6 mt-3">
            </div>
            <h1 class="text-[#4200FF] text-base font-bold font-poppins text-center">Manage Medicine</h1>

            <div class="flex">
                <div>
                    <div class="items-center bg-white border-2 border-gray-600 h-52 w-36 rounded-2xl shadow-2xl ml-6 mt-6">
                        <img src="/medicine/cooling.png" alt="/medicine/cooling.png" class="my-10 w-52 items-center">
                    </div>
                </div>
                <div>
                    <div class="">
                        <label for="name" class=""></label>
                            <input type="text" placeholder="Name Medicine" class="mt-6 ml-4 border-2 border-gray-400 flex w-60 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins">
                    </div>

                    <div class="flex">
                        <label for="price" class=""></label>
                            <input type="text" placeholder="Price" class="-mt-1 ml-4 border-2 border-gray-400 flex w-28 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins">
                        <label for="stok" class=""></label>
                            <input type="text" placeholder="Stok" class="-mt-1 ml-4 border-2 border-gray-400 flex w-28 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins">
                    </div>

                    <div class="">
                        <label for="description" class=""></label>
                            <input type="text" placeholder="Description" class="-mt-1 ml-4 border-2 border-gray-400 flex w-60 h-[114px] px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="text-center m-auto mt-2 h-10 w-58 bg-[#4200FF] hover:bg-[#4004EC] text-white text-sm font-medium font-poppins rounded-lg py-1 px-8">Save Changes</button>
            </div>
        </div>
    </div>
</body>
</html>