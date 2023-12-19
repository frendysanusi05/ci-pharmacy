<?php include('header.php') ?>

<body class="font-poppins bg-[#F5F5F5] h-screen">
    <?php include('navbar.php') ?>
    
    <div class="text-center">
        <h1 class="text-[#4200FF] text-4xl font-bold font-poppins mt-10">Manage Medicine</h1>
    </div>
    <div class="text-right mr-48 mt-12">
        <a href="/medicines/add" class="text-right m-auto mt-2 h-10 w-58 bg-[#4200FF] hover:bg-[#4004EC] text-white text-sm font-medium font-poppins rounded-lg py-1 px-8">Add Medicine</a>
    </div>

    <div class="grid grid-cols-5 gap-4 mt-14 w-fit m-auto">
    <?php
        foreach ($medicines as $medicine):
            $imageName = isset($medicine['nama']) ? $medicine['nama'] : 'cooling';
            $imagePath = '/medicine/' . $imageName . '.png';
            $image = file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath) ? $imagePath : '/medicine/cooling.png';

            echo '
            <div class="my-6 bg-white h-56 w-48 shadow-lg rounded-xl aspect-square justify-center items-center">
                <div class="flex">
                    <button id="deleteButton' . ( isset($medicine["id"]) ? ($medicine["id"])  : null ) . '" data-id="'. ( isset($medicine["id"]) ? ($medicine["id"])  : null ) . '">
                        <img src="/medicine/delete.png" alt="/medicine/delete.png" class="ml-3 h-6 w-6 mt-3">
                    </button>
                    <h1 class="font-poppins font-semibold text-black text-base text-center mt-3 ml-6">' . (isset($medicine['nama']) ? $medicine['nama'] : null) . '</h1>
                </div>
                <div>
                    <img src="' . $image . '" alt="' . $image . '" class="bg-cover bg-center p-9 pt-3 h-40">
                    <div class="bg-[hsl(256,100%,50%)] h-16 w-auto shadow-lg rounded-xl items-center -mt-6 flex">
                        <div class="pl-5 pt-[0.10px] w-20">
                            <h1 class="font-poppins font-semibold text-white text-base text-left pt-2 -mt-1">' . (isset($medicine['harga']) ? $medicine['harga'] : null) . '</h1>
                            <h1 class="font-poppins font-semibold text-white text-xs text-left">Stok ' . (isset($medicine['jumlah_stok']) ? $medicine['jumlah_stok'] : null) . '</h1>
                        </div>
                        <a href="/editMedicine/' . $medicine['id'] . '">
                            <img src="/medicine/icon_edit.png" alt="/medicine/icon_edit.png" class="h-6 w-6 ml-20 mr-2">
                            <h1 class="text-white font-bold font-poppins text-xs text-end mr-2 mt-1">' . (isset($medicine['jenis']) ? $medicine['jenis'] : null) . '</h1>
                        </a>
                    </div>
                </div>
            </div>
            ';
        endforeach;
        
        echo '
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="deleteModal" style="display: none;">
            ';
        
        include('popupdelete.php');
        
        echo '</div>';
        
        include('footer.php');

        echo '
            </body>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var deleteModal = document.getElementById("deleteModal");
            ';

            foreach ($medicines as $medicine):
                $medicineId = isset($medicine["id"]) ? $medicine["id"] : null;
                echo '
                    document.getElementById("deleteButton' . $medicineId . '").addEventListener("click", function (event) {
                        event.preventDefault();
                        deleteModal.removeAttribute("style");

                        document.getElementById("delete").setAttribute("data-id", "' . $medicineId . '");
                    });
                ';
            endforeach;

            echo '
                });
                </script>
            ';
        ?>

