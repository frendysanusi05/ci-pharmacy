<?php include('header.php') ?>

<body class="font-poppins bg-[#F5F5F5] h-screen">
    <?php include('navbar.php') ?>
    
    <div class="text-center">
        <h1 class="text-[#4200FF] text-4xl font-bold font-poppins mt-10">Manage Medicine</h1>
    </div>
    <div class="grid grid-cols-5 gap-4 mt-14 w-fit m-auto">
        <?php foreach ($medicines as $medicine): ?>
            <div class="my-6 bg-white h-56 w-48 shadow-lg rounded-xl aspect-square justify-center items-center">
                <div class="flex">
                    <a href="/deleteMedicineForm/<?php echo $medicine['id'] ?>">
                        <img src="/medicine/delete.png" alt="/medicine/delete.png" class="ml-3 h-6 w-6 mt-3">
                    </a>
                    <h1 class="font-poppins font-semibold text-black text-base text-center mt-3 ml-6"><?php echo isset($medicine['nama']) ? $medicine['nama'] : null; ?></h1>
                </div>
                <div>
                    <img src="/medicine/cooling.png" alt="/medicine/cooling.png" class="bg-cover bg-center p-9 pt-3">
                    <div class="bg-[hsl(256,100%,50%)] h-16 w-auto shadow-lg rounded-xl items-center -mt-6 flex">
                        <div class="pl-5 pt-[0.10px] w-20">
                            <h1 class="font-poppins font-semibold text-white text-base text-left pt-2 -mt-1"><?php echo isset($medicine['harga']) ? $medicine['harga'] : null; ?></h1>
                            <h1 class="font-poppins font-semibold text-white text-xs text-left">Stok <?php echo isset($medicine['jumlah_stok']) ? $medicine['jumlah_stok'] : null; ?></h1>
                        </div>
                        <a href="/editMedicine/<?php echo $medicine['id'] ?>">
                            <img src="/medicine/icon_edit.png" alt="/medicine/icon_edit.png" class="h-6 w-6 ml-20 mr-2">
                            <h1 class="text-white font-bold font-poppins text-xs text-end mr-2 mt-1"><?php echo isset($medicine['jenis']) ? $medicine['jenis'] : null; ?></h1>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include('footer.php') ?>
</body>
