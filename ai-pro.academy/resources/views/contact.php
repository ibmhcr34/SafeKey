<?php require_once('layout/header.php') ?>

<main class="py-4">
    <div class="mx-auto max-w-screen-lg px-4 sm:px-6 lg:px-8">

        <div class="container">
            <div class="relative"><img alt="background" fetchpriority="high" width="1572" height="795" decoding="async"
                                       data-nimg="1" class="absolute -top-32 -z-10" style="color:transparent"
                                       src="https://codewithmosh.com/_next/static/media/bg-grid-lighter.4c1e8196.svg">
                <div class="container text-center flex flex-col items-center mb-6 md:my-6 lg:my-10"><h1
                            class="lg:text-5xl mb-8 text-white font-bold">Contact Us</h1>
                    <p class="text-lg lg:text-2xl max-w-prose text-white">We're here for you: Connect with us for any
                        questions or
                        concerns.</p></div>
            </div>
            <div class="flex justify-center">
                <div class="max-w-3xl border-gray-300    border rounded-lg p-5 lg:p-10 text-white">
                    <p class=" text-white">For course suggestions and career advice, check out our<!-- --> <a
                                href="/learning-paths">learning
                            paths</a>.</p>
                    <form class="mt-10 max-w-prose" action="" method="POST">
                        <div>
                            <label for="email" class="block text-sm text-gray-400   ">Email Address</label>

                            <input type="email" placeholder="john@example.com"
                                   class="mt-2 block w-full placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40            "/>

                            <p class="mt-3 text-xs text-gray-400   "></p>
                        </div>
                        <div>
                            <label for="Description" class="block text-sm text-gray-400   ">Message</label>

                            <textarea placeholder="lorem..."
                                      class="block  mt-2 w-full placeholder-gray-400/70    rounded-lg border border-gray-200 bg-white px-4 h-32 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40            "></textarea>

                            <p class="mt-3 text-xs text-gray-400   "></p>
                        </div>

                        <button class="group inline-block px-6 py-3 text-sm no-underline uppercase text-center text-white tracking-wider font-medium md:font-semibold rounded-full bg-violet-500 hover:bg-violet-400 transition-all duration-200 ease-out hover:text-white hover:no-underline undefined"
                                type="submit">Send
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div id="footer"></div>

</main>
<?php require_once('layout/footer.php') ?>
