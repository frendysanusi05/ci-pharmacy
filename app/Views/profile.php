<?php include('header.php') ?>

<body class="font-poppins bg-[#F5F5F5] h-screen">
    <?php include('navbar.php') ?>

    <div>
        <h1 class="text-3xl p-12 font-bold text-center text-[#4200FF]">Profile</h1>
        <div class="w-[50%] m-auto mb-12 flex text-xl">
            <div class="pt-12 ">
                <img class="w-36 h-36" alt="profile" src="/Profile/profile.png" />
            </div>
            <div class="h-60 w-2 bg-[#4200FF] mx-16"><br/></div>
            <div class="items-center flex">
                <div>
                    <h1 class="font-bold p-4 text-[#4200FF]">Admin</h1>
                    <p class="p-4 font-semibold">Nama: Vania Salsabilla</p>
                    <p class="p-4 font-semibold">ID: 312</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <button class="flex m-auto items-center bg-[#EB1E11] py-2 px-12 rounded-lg font-bold text-white text-center w-fit">Log Out</button>
        </div>
    </div>

    <div class="FOOTER bg-[#4200FF] text-white rounded-t-lg border-12 p-8 pb-0 mt-24">
            <div class="">
                <h1 class="text-3xl font-bold text-center">We Care About You</h1>
                <h2 class="text-xl text-center p-2">Find Any Medicine You Need!</h2>
                <div class="flex text-sm">
                    <div class="block p-8">
                        <div class="h-8 w-2"><br/></div>
                        <h1 class="font-bold text-md">Contact Us</h1>
                        <p>ITB Ganesa, Labtek V</p>
                        <p>Jl. Ganesa No. 10, Kecamatan Coblong,<br/> Kota Bandung, 40132</p>
                    </div>
                    <div class="p-8 pt-12">
                        <ul class="gap-4">
                            <li class="flex py-1 gap-2">
                                <img alt="ig" src="/landing/instagram.png"/>
                                <p>@tst.hospital</p>
                            </li>
                            <li class="flex py-1 gap-2">
                                <img alt="wa" src="/landing/whatsapp.png"/>
                                <p>+62 111 1111 1111</p>
                            </li>
                            <li class="flex py-1 gap-2">
                                <img alt="email" src="/landing/email.png"/>
                                <p>tst.hospital@gmail.com</p>
                            </li>
                            <li class="flex py-1 gap-2">
                                <img alt="website" src="/landing/website.png"/>
                                <p>tst.hospital.id</p>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full h-48 pt-40 align-bottom">
                        <p class="text-right align-text-bottom">© 2023 TST Hospital. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>