<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Chatbot</title>
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./src/custom.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="font-inter">
    <section class="bg-hero-bg h-screen bg-center bg-cover bg-no-repeat relative">
        <div class="py-10">
            <h2 class="text-2xl text-center md:text-3xl">WELCOME TO ANIMALS ADOPTION AND DONATION SERVICE
                CHAT BOT</h2>
        </div>
        <div class="absolute top-[45%] left-16 space-y-8">
            <h1 class="text-3xl font-[700] mb-3 md:text-4xl lg:text-6xl">WITH ChatBot, <br>
                AUTOMATING <br>
                CUSTOMER SERVICE</h1>
            <p>Platform to build and launch conversational chatbots</p>
            <div>
                <a href="logout.php"
                    class="bg-primary px-8 py-4 text-center uppercase border-[2px]  text-white rounded-md hover:bg-transparent hover:border-primary hover:border-[2px] hover:text-primary">
                    Log out
                </a>
            </div>
        </div>
        <div class="fixed bottom-6 right-6">
            <button id="openChat">
                <img src=" ./assets/images/chatbot-icon.png" alt="chatbot icon img" class="w-20">
            </button>
        </div>
        <div id="chatbox"
            class="hidden fixed overflow-auto h-[500px] max-w-[1280px] bottom-24 right-16  bg-white p-5 rounded-lg shadow-lg">
            <div class="flex justify-end items-end pb-5">
                <button id="closeChat">
                    <i class="fa-solid fa-xmark  text-2xl"></i>
                </button>
            </div>
            <div class="flex justify-center items-center rounded-2xl p-2 bg-primary text-white">
                <h1 class="text-xl font-semibold">
                    SERVICE CHAT BOT
                </h1>
            </div>
            <div class="grid pt-10 w-full">
                <div id="chatMessages" class="space-y-2 w-full"></div>
                <div class="pt-5 flex items-end justify-end">
                    <button id="showAllQuestions">
                        <i class="fa-solid fa-bars text-primary text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- tool tip -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <script>
    // With the above scripts loaded, you can call `tippy()` with a CSS
    // selector and a `content` prop:
    tippy('#showAllQuestions', {
        content: 'Show all questions',
        placement: 'left',
    });
    </script>

    <!-- chatbot  -->
    <script src="./src/script.js"></script>

</body>

</html>