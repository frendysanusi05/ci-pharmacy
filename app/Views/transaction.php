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
                        <a class="hover:text-blue-700" href="#">Medicine</a>
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Order</a>            
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Transaction</a>            
                    </li>
                    <li>
                        <a class="hover:text-blue-700" href="#">Profile</a>            
                    </li>
                </ul>
            </div>
        </nav>
    </header>


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
                    <tr class="bg-gray-100">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Januari 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 7.800.000</td>
                    </tr>

                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Februari 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 5.877.000</td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Maret 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 9.898.000</td>
                    </tr>

                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">April 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 6.800.000</td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Mei 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 3.543.000</td>
                    </tr>

                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Juni 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 5.890.000</td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Juli 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 2.890.000</td>
                    </tr>

                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Agustus 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 9.890.000</td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">September 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 4.890.000</td>
                    </tr>

                    <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Oktober 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 1.890.000</td>
                    </tr>

                    <tr class="bg-gray-100">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">November 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 2.890.000</td>
                    </tr>

                    <tr class="bg-gray-50 mb-16">
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Desember 2023</td>
                        <td class="p-3 text-sm text-gray-700 font-semibold font-poppins text-center">Rp 3.890.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>