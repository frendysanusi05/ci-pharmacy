<div id="deleteConfirmation" class="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none bg-neutral-800/70">
    <div class="bg-white h-72 w-[400px] rounded-2xl shadow-2xl">
        <h1 class="text-[#EB1E11] text-xl font-bold font-poppins text-center mt-5">Delete Medicine</h1>
        <h1 class="text-black mt-3 text-md font-bold font-poppins text-center">Are you sure to delete this medicine?</h1>
        <div class="items-center justify-center m-auto">
            <img src="/popup/warning.png" alt="/popup/warning.png" class="mr-4 h-24 w-24 mt-2 items-center m-36">
        </div>

        <div class="items-center -mt-[136px] m-[128px]">
            <button id="delete" data-id="" class="text-center h-8 w-[128px] bg-[#EB1E11] hover:bg-[#D02015] text-white text-sm font-medium font-poppins rounded-lg py-1 px-8">Yes</button>
            <button id="cancel" class="text-center h-8 w-[128px] bg-[#9A9A9A] hover:bg-gray-500 text-white text-sm font-medium font-poppins rounded-lg py-1 px-8 mt-2">Cancel</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("delete").addEventListener("click", function (event) {
            event.preventDefault();
            var id = document.getElementById("delete").getAttribute("data-id");
            deleteMedicine(id);
        })

        document.getElementById("cancel").addEventListener("click", function (event) {
            event.preventDefault();
            window.location.reload();
        })

        function deleteMedicine(id) {
            fetch("/api/obat/" + id, {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                },
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                setTimeout(function () {
                    window.location.reload();
                }, 500);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
        }
    });
</script>