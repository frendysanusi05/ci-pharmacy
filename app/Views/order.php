<?php include('header.php') ?>

<body class="font-poppins bg-[#F5F5F5] h-screen">
    <?php include('navbar.php') ?>
    
    <div class="text-center">
        <h1 class="text-[#4200FF] text-4xl font-bold font-poppins mt-10">Manage Orders</h1>
    </div>

    <div class="grid grid-cols-3 gap-3 mt-14 w-fit m-auto">
        <?php $numOrders = count($orders);

            for ($i = 0; $i < $numOrders; $i++) {
                $currentOrder = $orders[$i];
            
                echo '
                <div>

                <div class="ml-4 my-6 bg-white h-56 w-[340px] shadow-lg rounded-xl aspect-square justify-center items-center">
                    <div class="flex">
                        <div class="bg-[#FD7401] h-14 w-86 pl-1 shadow-lg rounded-t-xl items-center -mt-6 mx-0 flex">
                            <h1 class="font-poppins font-semibold text-white text-[11px] text-center ml-4 w-28">Order ID: ' . ( isset($currentOrder["id_pesanan"]) ? ($currentOrder["id_pesanan"]) : null) . '</h1>
                            <div class="bg-[#FFD7CA] h-6 w-44 shadow-lg rounded-xl flex ml-6 mr-2">
                            <h1 class="font-poppins font-semibold text-[#EB1E11] text-[11px] text-center ml-4 py-1">' . ( isset($currentOrder["status_bayar"]) ? (($currentOrder["status_bayar"]) ? "" : "Payment Unsuccessful") : null ) . '</h1>
                            <h1 class="font-poppins font-semibold text-[#519120] text-[11px] text-center ml-4 py-1">' . ( isset($currentOrder["status_bayar"]) ? (($currentOrder["status_bayar"]) ? "Payment Successful" : "") : null ) . '</h1>
                            </div>
                        </div>

                    </div>
                    <div>
                        <h1 class="flex font-semibold text-black text-base text-center mt-3 m-auto ml-[72px]">' . ( isset($currentOrder["nama_pasien"]) ? ($currentOrder["nama_pasien"]) : null ) . '</h1>
                        <table class="w-72 m-auto mt-3 ml-10 h-16">
                            <tbody> 
                                <tr>
                                        <td class="font-semibold text-black text-sm"> '
                                            . ( isset($currentOrder["id_obat"]) ? ($currentOrder["id_obat"]) : null ) . '
                                        </td>
                                        <td class="font-semibold text-black text-sm">1 pcs</td>
                                    </tr>' ;
                                 while ($i < $numOrders - 1) {
                                    if ( $orders[$i + 1]["id_pesanan"] == $currentOrder["id_pesanan"]){
                                    $currentOrder = $orders[$i + 1];
                                    $i = $i + 1;
                                    echo '<tr>
                                    <td class="font-semibold text-black text-sm"> '
                                        . ( isset($currentOrder["id_obat"]) ? ($currentOrder["id_obat"]) : null ) . '
                                    </td>
                                    <td class="font-semibold text-black text-sm">1 pcs</td>
                                </tr>';} else {break;}
                                } ; 
                                
                                echo '
                                    
                            </tbody>
                        </table>
                        <form method=" ' . ( isset($currentOrder["status_ambil"]) ? (($currentOrder["status_ambil"]) ? null : "post") : null ) . ' ">
                            <div class="text-center">
                                <button type="submit" class=" text-center m-auto mt-2 h-11 w-72  text-white text-md font-medium font-poppins rounded-lg py-1 px-8 ' . ( isset($currentOrder["status_ambil"]) ? (($currentOrder["status_ambil"]) ? "bg-[#9A9A9A] hover:bg-gray-500" : "bg-[#4200FF] hover:bg-[#4004EC]") : null ) . '">Done</button>
                                <!-- <button class="text-center m-auto mt-2 h-11 w-72 bg-[#9A9A9A] hover:bg-gray-500 text-white text-md font-medium font-poppins rounded-lg py-1 px-8">Done</button> -->
                            </div>   
                        </form>
                    </div>
                </div>
            
            </div>'
            ;
            
            
            }

        ?>
        
        <?php foreach ($orders as $order): ?>
            
        <?php endforeach; ?>
        <!-- ?php include('footer.php') ?> -->

        
        </div>

