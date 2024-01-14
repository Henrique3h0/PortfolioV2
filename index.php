<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Adicionando meta tags responsivas -->
    <meta name="description" content="Portofolio de lima">
    <meta name="keywords" content="Alguma coisa">
    <meta name="author" content="LIMA">

    <!-- Adicionando estilo para animação de transparência, sombras e hover -->
    <style>
        /* Classes para animação de transparência */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Adicionando sombras */
        .shadow-hover:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .shadow-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

         /* Rotação do ícone na Navbar */
         .rotate-icon:hover {
            transform: rotate(360deg);
            transition: transform 0.5s ease-in-out;
        }

        /* Efeito de Parallax no Hero Section */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <title>LIMA - Portfólio</title>
</head>

<body class="bg-gray-900 text-white font-sans">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 fade-in shadow-card">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-semibold hover-scale rotate-icon">LIMA</div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero-section" class="bg-gradient-to-r from-blue-500 to-purple-600 text-center py-20 fade-in shadow-card parallax">
        <div class="container mx-auto">
            <h1 id="typing-text" class="text-4xl font-bold mb-4"></h1>
            <p class="text-lg mb-6">Desenvolvedor BackEnd Experiente, Brincando com FrontEnd</p>
            <a href="#about-me" class="bg-white text-gray-900 py-2 px-4 rounded-full hover:bg-gray-300 transition-all">Sobre min</a>
            <a href="#technologies" class="bg-white text-gray-900 py-2 px-4 rounded-full hover:bg-gray-300 transition-all">Tecnologias favoritas</a>
            <a href="#github-stats" class="bg-white text-gray-900 py-2 px-4 rounded-full hover:bg-gray-300 transition-all">Estatisticas</a>
            <a href="#social-media" class="bg-white text-gray-900 py-2 px-4 rounded-full hover:bg-gray-300 transition-all">Minhas Redes</a>
        </div>
    </header>


    <!-- About Me Section -->
<section id="about-me" class="py-16 fade-in shadow-card">
    <div class="container mx-auto"> <!-- Adição do container -->
        <h2 class="text-4xl font-bold mb-8">Sobre Mim</h2> <!-- Aumento do tamanho da fonte -->
        <div class="flex flex-col md:flex-row items-center md:items-start">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <img src="images/me-draw.png" alt="LIMA" class="rounded-lg shadow-lg hover-scale mx-auto md:mx-0">
            </div>
            <div class="md:w-1/2">
                <p class="mb-4 text-lg"> <!-- Aumento do tamanho da fonte -->
                    Olá! Eu sou <strong>Kauã Lima</strong>, um entusiasta desenvolvedor backend que ocasionalmente se aventura no mundo do frontend por diversão. Minha jornada no desenvolvimento de software é marcada por uma vasta experiência na criação de sistemas eficientes para automatização de tarefas repetitivas, bem como soluções robustas para gestão de vendas e processamento de pagamentos.
                </p>
                <p class="text-lg"> <!-- Aumento do tamanho da fonte -->
                    Minha abordagem é impulsionada pela combinação de habilidades técnicas sólidas e uma paixão pela resolução de problemas. Com um histórico em sistemas de automação e expertise em backend, busco criar soluções web intuitivas e atraentes que unam a eficiência funcional com uma experiência de usuário envolvente.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- Technologies Section with Devicons -->
    <section id="technologies" class="py-16 bg-gradient-to-r from-purple-600 to-blue-500 text-white fade-in shadow-card">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-8">Minhas Favoritas</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex items-center hover-scale shadow-hover">
                    <i class="devicon-python-plain text-4xl mr-2"></i>
                    <span>Python</span>
                </div>
                <div class="flex items-center hover-scale shadow-hover">
                    <i class="devicon-php-plain text-4xl mr-2"></i>
                    <span>PHP</span>
                </div>
                <div class="flex items-center hover-scale shadow-hover">
                    <i class="devicon-javascript-plain text-4xl mr-2"></i>
                    <span>JavaScript</span>
                </div>
                <div class="flex items-center hover-scale shadow-hover">
                    <i class="devicon-lua-plain text-4xl mr-2"></i>
                    <span>Lua</span>
                </div>
            </div>
        </div>
    </section>

<!-- GitHub Stats Section -->
<section id="github-stats" class="py-16 fade-in shadow-card">
    <div class="container mx-auto text-center">
        <a href="https://github.com/Henrique3h0">
            <img class="mb-4 md:w-1/2 lg:w-1/3 xl:w-1/1" src="https://github-readme-stats.vercel.app/api?username=Henrique3h0&show_icons=true&theme=dracula&include_all_commits=true&count_private=true&locale=pt-br" alt="GitHub Stats"/>
            <img class="mb-4 md:w-1/2 lg:w-1/3 xl:w-1/1" src="https://github-readme-stats.vercel.app/api/top-langs/?username=Henrique3h0&layout=compact&langs_count=7&theme=dracula&locale=pt-br" alt="Top Languages"/>
        </a>
    </div>
</section>




    <!-- Social Media Section -->
    <section id="social-media" class="py-16 bg-gradient-to-r from-purple-600 to-blue-500 text-white fade-in shadow-card">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-8">Conecte-se comigo</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <a href="https://github.com/Henrique3h0" class="flex items-center justify-center flex-col hover-scale shadow-hover">
                    <i class="fab fa-github text-4xl mb-2"></i>
                    <span>GitHub</span>
                </a>
                <a href="https://wa.me/+5551999309404" class="flex items-center justify-center flex-col hover-scale shadow-hover">
                    <i class="fab fa-whatsapp text-4xl mb-2"></i>
                    <span>Whatsapp</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white text-center py-4 fade-in shadow-card">
        <p>&copy; 2024 LIMA. Todos os direitos reservados.</p>
    </footer>

    <script>
        // Adicionando script para ativar animação de transparência quando a visão estiver na seção
        document.addEventListener('DOMContentLoaded', function() {
            var sections = document.querySelectorAll('.fade-in');
            var options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.5
            };

            var observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            sections.forEach(function(section) {
                observer.observe(section);
            });
        });

        var typingText = document.getElementById('typing-text');
        var textArray = ["Olá, eu sou Kauã Lima.", "Desenvolvedor Backend.", "Apaixonado por programação."];
        var index = 0;
        var arrayIndex = 0;

        function type() {
            if (index < textArray[arrayIndex].length) {
                typingText.innerHTML += textArray[arrayIndex].charAt(index);
                index++;
                setTimeout(type, 100);
            } else {
                setTimeout(erase, 1500);
            }
        }

        function erase() {
            if (index > 0) {
                typingText.innerHTML = textArray[arrayIndex].substring(0, index - 1);
                index--;
                setTimeout(erase, 50);
            } else {
                arrayIndex = (arrayIndex + 1) % textArray.length;
                setTimeout(type, 500);
            }
        }

        window.onload = function () {
            type();
        };
    </script>

</body>

</html>