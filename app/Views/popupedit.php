<?php include('header.php') ?>

<body>
    <div class="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none bg-neutral-800/70">
        <div class="bg-white h-[430px] w-[450px] rounded-2xl shadow-2xl">
            <div class="flex justify-end">
                <button onclick="history.back()">
                    <img src="/popup/close.png" alt="/popup/close.png" class="mr-4 h-6 w-6 mt-3">
                </button>
            </div>
            <h1 class="text-[#4200FF] text-base font-bold font-poppins text-center">Manage Medicine</h1>

            <form action="" method="post">
                <div class="flex">
                    <div>
                        <div class="items-center bg-white border-2 border-gray-600 h-52 w-36 rounded-2xl shadow-2xl ml-6 mt-6">
                            <img src="/medicine/cooling.png" alt="/medicine/cooling.png" class="my-10 w-52 items-center">
                        </div>
                    </div>
                    <div>
                        <div class="">
                            <label for="nama" class=""></label>
                                <input type="text" name="nama" placeholder="Name Medicine" class="mt-6 ml-4 border-2 border-gray-400 flex w-60 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins" value=<?php echo isset($medicine['nama']) ? $medicine['nama'] : null; ?>>
                        </div>
                        <div class="">
                            <label for="jenis" class=""></label>
                                <input type="text" name="jenis" placeholder="Jenis" class="-mt-1 ml-4 border-2 border-gray-400 flex w-60 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins" value=<?php echo isset($medicine['nama']) ? $medicine['nama'] : null; ?>>
                        </div>
                        <div class="flex">
                            <label for="harga" class=""></label>
                                <input type="text" name="harga" placeholder="Price" class="-mt-1 ml-4 border-2 border-gray-400 flex w-28 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins" value=<?php echo isset($medicine['harga']) ? $medicine['harga'] : null; ?>>
                            <label for="jumlah_stok" class=""></label>
                                <input type="text" name="jumlah_stok" placeholder="Stok" class="-mt-1 ml-4 border-2 border-gray-400 flex w-28 px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins" value=<?php echo isset($medicine['jumlah_stok']) ? $medicine['jumlah_stok'] : null; ?>>
                        </div>

                        <div class="">
                            <label for="deskripsi" class=""></label>
                                <input type="text" name="deskripsi" placeholder="Description" class="-mt-1 ml-4 border-2 border-gray-400 flex w-60 h-[114px] px-4 text-xs justify text-start placeholder-gray-500 my-4 bg-neutral-100 py-2 rounded-xl font-poppins" value=<?php echo isset($medicine['deskripsi']) ? $medicine['deskripsi'] : null; ?>>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="text-center m-auto mt-2 h-10 w-58 bg-[#4200FF] hover:bg-[#4004EC] text-white text-sm font-medium font-poppins rounded-lg py-1 px-8">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
