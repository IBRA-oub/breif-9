<?php
 require_once '../aside.php';
 require_once '../../Controllers/ClaimController/DisplayClaimController.php';


?>


<!--===========Content===========-->
<main class="bg-gray-100 flex-grow h-[100vh] relative">
    <!-- ============== header =========== -->

    <!-- ============ Content ============= -->

    <div class="md:p-6 bg-white md:m-5">
        <div class="flex items-center justify-between">
            <div>

            </div>

            <div>


                <button class="bg-[#212529] text-white w-[160px] h-[50px] rounded-md" id="addBank">
                    <a href="addClaim.php">Add Claim</a>
                </button>
            </div>
        </div>

        <!-- ========== table Banks-desktop ======== -->

        <div class="hidden md:block  rounded-lg overflow-hidden mt-10">
            <table class=" 
           w-full   " id="table1">
                <thead class="  sm:w-full">
                    <tr class="bg-[#212529] text-white h-[60px]">
                        <th class="">ID</th>
                        <th class="">Description</th>
                        <th class="">Date</th>
                        <th class="">Actions</th>
                    </tr>
                </thead>
                <tbody class="sm:w-full">

                    <?php 
              foreach($claimData as $claiData) {
              ?>
                    <tr class=" pt-10 sm:pt-0  w-full ">

                        <td class=" sm:text-center text-right">
                            <?php echo  $claiData['Claim_ID'] ?>
                        </td>


                        <td class=" sm:text-center text-right">
                            <?php echo $claiData['Descreption'] ?>
                        </td>
                        <td class=" sm:text-center text-right">
                            <?php echo $claiData['Date'] ?>
                        </td>
                        <td class=" sm:text-center text-right">
                            <button class="bg-[#212529] text-white w-[35px] h-[35px] rounded-md">
                                <a href="updateClaim.php?Claim_ID=<?= $claiData['Claim_ID'];?>">
                                    <i class="fa-solid fa-pen " style="color:#186F65"></i></a>


                            </button>
                            <button class="bg-[#212529] text-white w-[35px] h-[35px] rounded-md">
                                <a
                                    href="../../Controllers/ClaimController/DeleteClaimController.php?Claim_ID=<?= $claiData ['Claim_ID'];?>"><i
                                        class="fa-solid fa-trash " style="color:#186F65"></i></a>

                            </button>


                        </td>

                    </tr>
                    <?php 
              }
              ?>

                </tbody>
            </table>
        </div>
        <!-- ========== table Banks-mobile ======== -->
        <div class="block sm:hidden rounded-lg overflow-hidden mt-10">
            <table class=" block w-full  border-2 sm:border-0  " id="table2">
                <thead class="hidden">
                    <tr>
                        <th></th>
                        <th></th>

                        <th></th>
                        <th></th>


                    </tr>
                </thead>
                <tbody class="block  w-full">
                    <?php 
              foreach($claiData as $claiData) {
              ?>
                    <tr class="block pt-10 sm:pt-0   w-full ">

                        <td data-label="id"
                            class="border-b before:content-['id']  before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block    text-right">
                            <?php echo  $claiData['Claim_ID'] ?>
                        </td>

                        <td data-label="Description" class="border-b before:content-['Description'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                             text-right">
                            <?php echo  $claiData['Descreption'] ?>
                        </td>
                        <td data-label="Date" class="border-b before:content-['Date'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block  sm:before:hidden sm:text-center 
                             text-right">
                            <?php echo $claiData['Date'] ?>
                        </td>

                        <td data-label="ACtion"
                            class="border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2  sm:before:hidden  sm:text-center block    text-right">
                            <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                <a href="updateClaim.php?Claim_ID=<?= $claiData ['Claim_ID'];?>">
                                    <i class="fa-solid fa-pen"></i></a>

                            </button>
                            <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                <a
                                    href="../../Controllers/ClaimController/DeleteClaimController.php?Claim_ID=<?= $claiData ['Claim_ID'] ;?>"><i
                                        class="fa-solid fa-trash"></i></a>

                            </button>


                        </td>

                    </tr>
                    <?php 
              }
              ?>

                </tbody>
            </table>
        </div>



    </div>
    <!-- ============ Content ============= -->


</main>
<!-- ========== overlay ================= -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#table1').DataTable();

});
$(document).ready(function() {
    $('#table2').DataTable();

});
</script>


</script>

</body>

</html>