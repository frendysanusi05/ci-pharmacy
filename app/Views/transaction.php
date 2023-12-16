<?php include('header.php') ?>

<body>
    <?php include('navbar.php') ?>

    <div class="p-5 h-screen ml-72 mr-72">
        <h1 class="text-3xl mb-2 text-[#4200FF] font-poppins font-bold text-center mt-8">Transaction Recapitulation</h1>
        <div class="overflow-auto rounded-lg shadow-lg mt-12">
            <table class="w-full rounded-lg table-auto">
                <thead class="bg-[#4200FF] border-b-2 border-gray-400">
                <tr>
                    <th class="p-3 text-lg text-bold tracking-wide text-center font-poppins text-white">Bulan</th> 
                    <th class="p-3 text-lg text-bold tracking-wide text-center font-poppins text-white">Jumlah</th>   
                </tr>
                </thead>

                <tbody>
                    <?php foreach ($transactions as $transaction): ?>
                        <tr class="bg-gray-50">
                            <td class="border-r-2 border-gray-800 p-3 text-sm text-gray-700 font-semibold font-poppins text-center"><?php echo isset($transaction['bulan']) ? ($transaction['bulan']) : null ?></td>
                            <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center"><?php echo isset($transaction['total_biaya']) ? $transaction['total_biaya'] : null; ?></td>
                        </tr>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>