<?php require_once('layout/header.php') ?>

<main class="py-4">
    <div class="mx-auto max-w-screen-lg px-4 sm:px-6 lg:px-8">
        <link rel="shortcut icon" href="resources/images/web_icon2.png" />


        <div class="container">
            <div class="relative"><img alt="background" fetchpriority="high" width="1572" height="795" decoding="async"
                                       data-nimg="1" class="absolute -top-32 -z-10"
                                       src="https://codewithmosh.com/_next/static/media/bg-grid-lighter.4c1e8196.svg" style="color: transparent;">
                <div class="container text-center flex flex-col items-center mb-6 md:my-6 lg:my-10"><h1
                        class="lg:text-5xl mb-8 text-white font-bold">Learning Paths</h1>
                    <p class="text-lg lg:text-2xl max-w-prose text-white">Discover your optimal learning path to reach your full
                        potential.</p></div>
            </div>
            <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-8 undefined">
                <div class="border border-gray-700     hover:    transition-colors duration-200 ease-in-out overflow-hidden rounded-lg     relative ">
                    <div class="h-[196px] relative"><a class="relative w-full h-full inline-block"
                                                       href="/learning/fundamentals"><img alt="Fundamentals"
                                                                                   fetchpriority="high" decoding="async"
                                                                                   data-nimg="fill" class="object-cover"
                                                                                   src="http://res.cloudinary.com/codewithmosh/image/upload/v1685118742/images/fundamentals.svg"
                                                                                   style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></a>
                    </div>
                    <div class="p-6"><a class="font-semibold no-underline hover:underline" href="/learning/fundamentals"><h2
                            class="text-xl mb-0 text-white">Fundamentals</h2></a>
                        <p class=" text-white">Essential courses that anyone pursuing a career as a professional software engineer should
                            take. Data structures, algorithms, design patterns, and more!</p></div>
                </div>
                <div class="border border-gray-700     hover:    transition-colors duration-200 ease-in-out overflow-hidden rounded-lg     relative ">
                    <div class="h-[196px] relative"><a class="relative w-full h-full inline-block"
                                                       href="/learning/front-end"><img alt="Front-end Development"
                                                                                fetchpriority="high" decoding="async"
                                                                                data-nimg="fill" class="object-cover"
                                                                                src="http://res.cloudinary.com/codewithmosh/image/upload/v1685118742/images/front-end.svg"
                                                                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></a>
                    </div>
                    <div class="p-6"><a class="font-semibold no-underline hover:underline" href="/learning/front-end"><h2
                            class="text-xl mb-0 text-white">Front-end Development</h2></a>
                        <p class=" text-white">All the courses you need to build beautiful websites. HTML, CSS, JavaScript, React, and
                            more!</p></div>
                </div>
                <div class="border border-gray-700     hover:    transition-colors duration-200 ease-in-out overflow-hidden rounded-lg     relative ">
                    <div class="h-[196px] relative"><a class="relative w-full h-full inline-block"
                                                       href="/learning/back-end"><img alt="Back-end Development"
                                                                               fetchpriority="high" decoding="async"
                                                                               data-nimg="fill" class="object-cover"
                                                                               src="http://res.cloudinary.com/codewithmosh/image/upload/v1685118742/images/back-end.svg"
                                                                               style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></a>
                    </div>
                    <div class="p-6"><a class="font-semibold no-underline hover:underline" href="/learning/back-end"><h2
                            class="text-xl mb-0 text-white">Back-end Development</h2></a>
                        <p class=" text-white">All the courses you need to build powerful APIs for web and mobile apps. Node, Django,
                            ASP.NET MVC, MySQL, and more!</p></div>
                </div>
                <div class="border border-gray-700     hover:    transition-colors duration-200 ease-in-out overflow-hidden rounded-lg     relative ">
                    <div class="h-[196px] relative"><a class="relative w-full h-full inline-block"
                                                       href="/learning/mobile-development"><img alt="Mobile Development"
                                                                                         fetchpriority="high"
                                                                                         decoding="async"
                                                                                         data-nimg="fill"
                                                                                         class="object-cover"
                                                                                         src="http://res.cloudinary.com/codewithmosh/image/upload/v1685118742/images/mobile.svg"
                                                                                         style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></a>
                    </div>
                    <div class="p-6"><a class="font-semibold no-underline hover:underline" href="/learning/mobile-development">
                        <h2 class="text-xl mb-0 text-white">Mobile Development</h2></a>
                        <p class=" text-white">All the courses you need to build professional, cross-platform mobile apps using React
                            Native.</p></div>
                </div>
                <div class="border border-gray-700     hover:    transition-colors duration-200 ease-in-out overflow-hidden rounded-lg     relative ">
                    <div class="h-[196px] relative"><a class="relative w-full h-full inline-block"
                                                       href="/learning/game-development"><img alt="Game Development"
                                                                                       fetchpriority="high"
                                                                                       decoding="async" data-nimg="fill"
                                                                                       class="object-cover"
                                                                                       src="http://res.cloudinary.com/codewithmosh/image/upload/v1685118742/images/game.svg"
                                                                                       style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></a>
                    </div>
                    <div class="p-6"><a class="font-semibold no-underline hover:underline" href="/learning/game-development">
                        <h2 class="text-xl mb-0 text-white">Game Development</h2></a>
                        <p class=" text-white">The fundamental courses you need to build games.</p></div>
                </div>
            </div>
        </div>

    </div>
    <div id="footer"></div>

</main>
<?php require_once('layout/footer.php') ?>
