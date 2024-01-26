<!-- Footer Section -->
<footer class="text-white mt-8">
    <div class="bg-gray-800 flex flex-wrap justify-center items-center">
        <!-- Contact Section -->
        <div class="mx-auto p-8">
            <h1 class="text-2xl font-semibold font-serif leading-8 mb-2">If you have any question, Let us help you!</h1>
            <p class="text-sm font-normal leading-6 mb-6">is a friendly invitation from us to provide assistance in answering questions or providing the information you need.</p>
            <div class="flex gap-4">
                <input class="rounded-md p-2 border border-gray-600" type="text" placeholder="Input your email here">
                <button class="px-4 py-2 bg-yellow-500 rounded-md"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>

        <!-- About ReservaStay Section -->
        <div class="p-8 mx-auto">
            <h1 class="text-yellow-400 text-lg font-normal font-sans uppercase mb-2">ReservaStay</h1>
            <p class="text-base font-normal leading-6 mb-6">Hotel reservation websites that simplify finding, selecting, and securing your dream accommodation quickly and efficiently.</p>
            
            <!-- Navigation Links -->
            <div class="flex flex-wrap justify-between">
                <div class="mb-6">
                    <h3 class="text-white font-medium mb-1">Home</h3>
                    <ul class="text-sm">
                        <li>Room & Suites</li>
                        <li>Packages</li>
                        <li>Voucher</li>
                        <li>Promo</li>
                    </ul>
                </div>
                <div class="px-8 mb-6">
                    <h3 class="text-white font-medium mb-1">About Us</h3>
                    <ul class="text-sm">
                        <li>Restaurant & Bar</li>
                        <li>Events</li>
                        <li>Gallery</li>
                    </ul>
                </div>
                <div class="px-8 mb-6">
                    <h3 class="text-white font-medium mb-1">Our Team</h3>
                    <ul class="text-sm">
                        <li>Blog</li>
                        <li>Contact Us</li>
                        <li>Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }   
    </script>
</body>
</html>