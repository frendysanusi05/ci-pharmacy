<?php include('header.php') ?>

<body class="font-poppins bg-[#F5F5F5] h-screen">
    <?php include('navbar.php') ?>
    
    <div class="text-center">
        <h1 class="text-[#4200FF] text-4xl font-bold font-poppins mt-10">Manage Orders</h1>
    </div>

    <div class="grid grid-cols-3 gap-3 mt-14 w-fit m-auto">
        <?php foreach ($orders as $order): ?>
            <div>
                <div class="ml-4 my-6 bg-white h-56 w-[340px] shadow-lg rounded-xl aspect-square justify-center items-center">
                    <div class="flex">
                        <div class="bg-[#FD7401] h-14 w-86 pl-1 shadow-lg rounded-t-xl items-center -mt-6 mx-0 flex">
                            <h1 class="font-poppins font-semibold text-white text-[11px] text-center ml-4 w-28">Order ID: <?php echo isset($order['id_pesanan']) ? ($order['id_pesanan']) : null ?></h1>
                            <div class="bg-[#FFD7CA] h-6 w-44 shadow-lg rounded-xl flex ml-6 mr-2">
                            <h1 class="font-poppins font-semibold text-[#EB1E11] text-[11px] text-center ml-4 py-1"><?php echo isset($order['status_bayar']) ? (($order['status_bayar']) ? "" : "Payment Unsuccessful") : null ?></h1>
                            <h1 class="font-poppins font-semibold text-[#519120] text-[11px] text-center ml-4 py-1"><?php echo isset($order['status_bayar']) ? (($order['status_bayar']) ? "Payment Successful" : "") : null ?></h1>
                            </div>
                        </div>

                    </div>
                    <div>
                        <h1 class="flex font-semibold text-black text-base text-center mt-3 m-auto ml-[72px]"><?php echo isset($order['nama_pasien']) ? ($order['nama_pasien']) : null ?></h1>
                        <table class="w-72 m-auto mt-3 ml-10 h-16">
                            <tbody>
                                <tr>
                                    <td class="font-semibold text-black text-sm"><?php echo isset($order['id_obat']) ? ($order['id_obat']) : null ?></td>
                                    <td class="font-semibold text-black text-sm">1 pcs</td>
                                </tr>
                            </tbody>
                        </table>
                        <form method="<?php echo isset($order['status_ambil']) ? (($order['status_ambil']) ? null : "post") : null ?>">
                            <div class="text-center">
                                <button type="submit" class=" text-center m-auto mt-2 h-11 w-72  text-white text-md font-medium font-poppins rounded-lg py-1 px-8 <?php echo isset($order['status_ambil']) ? (($order['status_ambil']) ? "bg-[#9A9A9A] hover:bg-gray-500" : "bg-[#4200FF] hover:bg-[#4004EC]") : null ?>">Done</button>
                                <!-- <button class="text-center m-auto mt-2 h-11 w-72 bg-[#9A9A9A] hover:bg-gray-500 text-white text-md font-medium font-poppins rounded-lg py-1 px-8">Done</button> -->
                            </div>   
                        </form>
                    </div>
                </div>
            
            </div>
        <?php endforeach; ?>
        <!-- ?php include('footer.php') ?> -->

        
        </div>

