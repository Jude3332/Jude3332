<?php include("./header.php") ?>
    <main class="py-6  h-[120vh] w-full bg-gradient-to-t  from-blue-500 to-slate-800">
        <div class=" ml-20 py-6 pr-30 items-center h-full">
            <div class="flex w-[800px] items-center justify-center text-center space-x-3 ml-20 ">
                <button class="h-10 p-2 w-1/2 bg-blue-400 hover:bg-purple-400">Sign up as a Vendor</button> 
                <button class="h-10 p-2 w-1/2 bg-purple-400 hover:bg-purple-400">Sign up as an Investor</button>
            </div>
            <div class="flex flex-row flex-nowrap items-center p-10 pt-40 mr-20 w-full h-[90vh]">
                <div class="rounded w-full h-[100vh] bg-gray-200">
                    <h1 class="text-2xl ">Agrovestors</h1>
                    <p></p>
                </div>
                <div class="rounded w-full h-[100vh] text-white bg-slate-900">
                    <div class="flex justify-between p-5">
                        <button class="text-2xl h-10 w-[150px] bg-blue-500 rounded-md ">
                            <ion-icon name="log-in-outline"></ion-icon>
                            Sign Up
                        </button>
                        <p class="text-sm text-end">Join over 10,000 vendors to <br> sell and buy your goods</p>
                    </div>
                    <br>
                    <hr class="w-[500px] absolute ml-10">
                    <div class="flex justify-between p-5">
                        <p class="text-gray-200 ">Payment method:</p>
                        <p class="text-gray-200 ">online</p>
                    </div>
                    <hr class="text-green-600 ">
                    <div class="p-10 py-5 w-1/3">
                        <form action="" method="post" >
                        <input type="text" placeholder="Full Name" name="Fname" required class="h-10 w-[500px]">
                        <br><br>
                        <input type="email" placeholder="Email" name="email" required class="h-10 w-[500px]">
                        <br><br>
                        <input type="email" placeholder="Email" name="email" required class="h-10 w-[500px]">
                        <br><br>
                        <input type="password" placeholder="Password" name="password" required class="h-10 w-[500px]">
                        <br><br>
                        <input type="checkbox">
                        <label for="">Agree to our <a href="" class="">Privacy policy</a> </label>
                        <br><br>
                        <div class="px-44 py-6">
                            <button name="submit" class=" w-[150px] border-2 border-solid border-gray-300">Submit</button>
                        </div>
                        
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>


<?php include("./footer.php") ?>