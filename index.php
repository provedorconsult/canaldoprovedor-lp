<?php
// Set security headers
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");

// Define services data
$services = [
    [
        'id' => 'consultoria',
        'title' => 'Consultoria Técnica para Provedores',
        'description' => 'Soluções e otimizações para a sua rede',
        'icon' => 'fas fa-network-wired',
        'message' => 'Consultoria Técnica para Provedores'
    ],
    [
        'id' => 'atendente',
        'title' => 'Atendente Home Office ao Cliente',
        'description' => 'Equipe treinada para atender seu cliente',
        'icon' => 'fas fa-headset',
        'message' => 'Atendente Home Office ao Cliente'
    ],
    [
        'id' => 'automacao',
        'title' => 'Automação de Atendimento com IA',
        'description' => 'Modernize seu suporte e reduza custos',
        'icon' => 'fas fa-robot',
        'message' => 'Automação de Atendimento com IA'
    ],
    [
        'id' => 'servidores',
        'title' => 'Implantação de Servidores',
        'description' => 'Zabbix, Grafana, Logs, DNS e mais',
        'icon' => 'fas fa-server',
        'message' => 'Implantação de Servidores'
    ],
    [
        'id' => 'sva',
        'title' => 'Implantação e Desenvolvimento de SVA',
        'description' => 'Crie novas fontes de receita',
        'icon' => 'fas fa-chart-line',
        'message' => 'Implantação e Desenvolvimento de SVA'
    ],
    [
        'id' => 'treinamento',
        'title' => 'Treinamento Presencial e Remoto',
        'description' => 'Capacite sua equipe com nossos especialistas',
        'icon' => 'fas fa-graduation-cap',
        'message' => 'Treinamento Presencial e Remoto'
    ],
    [
        'id' => 'valuation',
        'title' => 'Valuation',
        'description' => 'Saiba o valor real da sua empresa no mercado',
        'icon' => 'fas fa-calculator',
        'message' => 'Valuation'
    ]
];

$whatsapp_number = '556196188786';
$contact_email = 'contato@canaldoprovedor.net.br';

function generateWhatsAppLink($service_message, $whatsapp_number) {
    $message = "Olá! Tenho interesse no serviço de " . $service_message . " que vi no site canaldoprovedor.net.br e gostaria de mais informações.";
    return "https://wa.me/" . $whatsapp_number . "?text=" . urlencode($message);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Canal do Provedor - Consultoria especializada para Provedores de Internet. Automação, treinamentos, valuation e soluções técnicas para ISPs.">
    <meta name="keywords" content="consultoria para provedores de internet, automação de atendimento para ISP, valuation provedor, treinamento técnico, zabbix, grafana">
    <meta name="author" content="Canal do Provedor">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Canal do Provedor - Especialistas em Soluções para ISPs">
    <meta property="og:description" content="Consultoria técnica, automação de atendimento, treinamentos e valuation para Provedores de Internet">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://canaldoprovedor.net.br">
    
    <title>Canal do Provedor - Especialistas em Soluções para ISPs</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="assets/images/logo-canal-provedor.svg" alt="Canal do Provedor" height="40" class="me-2">
                <span class="fw-bold">Canal do Provedor</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Nossa Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.canaldoprovedor.net.br" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://btc.canaldoprovedor.net.br" target="_blank">Cripto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Especialistas em <span class="text-accent">Soluções</span> para Provedores de Internet
                    </h1>
                    <p class="lead text-white-75 mb-4">
                        Transforme seu provedor com nossas soluções especializadas: consultoria técnica, automação de atendimento, treinamentos e valuation. Mais de uma década de experiência no mercado de telecomunicações.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="#services" class="btn btn-accent btn-lg px-4 py-3">
                            <i class="fas fa-rocket me-2"></i>Conheça Nossos Serviços
                        </a>
                        <a href="<?php echo generateWhatsAppLink('informações gerais', $whatsapp_number); ?>" class="btn btn-outline-light btn-lg px-4 py-3" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>Fale Conosco
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="hero-image">
                        <i class="fas fa-broadcast-tower hero-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold text-primary mb-3">Nossos Serviços</h2>
                    <p class="lead text-muted">Soluções completas e especializadas para o crescimento do seu provedor</p>
                </div>
            </div>
            
            <div class="row g-4">
                <?php foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </div>
                        <h5 class="service-title"><?php echo htmlspecialchars($service['title']); ?></h5>
                        <p class="service-description"><?php echo htmlspecialchars($service['description']); ?></p>
                        <a href="<?php echo generateWhatsAppLink($service['message'], $whatsapp_number); ?>" 
                           class="btn btn-primary w-100" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>Fale Conosco
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold text-primary mb-3">Nossa Equipe</h2>
                    <p class="lead text-muted mb-4">
                        Nossa força reside em nossa equipe. Contamos com especialistas com vasta experiência de mercado 
                        e certificações nos principais fabricantes do mundo, garantindo a entrega de soluções robustas e eficientes.
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h4 class="text-center text-primary mb-4">Certificações e Parcerias</h4>
                    <div class="partners-grid">
                        <div class="partner-logo">
                            <img src="assets/images/partners/mikrotik.svg" alt="Mikrotik" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/cisco.svg" alt="Cisco" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/huawei.svg" alt="Huawei" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/nokia.svg" alt="Nokia" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/zte.svg" alt="ZTE" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/intelbras.svg" alt="Intelbras" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/datacom.svg" alt="Datacom" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="assets/images/partners/fiberhome.svg" alt="Fiberhome" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Entre em Contato</h2>
                    <p class="lead mb-4">Pronto para transformar seu provedor? Fale conosco agora!</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="contact-info mb-4">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <i class="fab fa-whatsapp fa-2x mb-3 text-accent"></i>
                                    <h5>WhatsApp</h5>
                                    <a href="<?php echo generateWhatsAppLink('informações gerais', $whatsapp_number); ?>" 
                                       class="text-white text-decoration-none" target="_blank">
                                        +55 (61) 9618-8786
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-item">
                                    <i class="fas fa-envelope fa-2x mb-3 text-accent"></i>
                                    <h5>E-mail</h5>
                                    <a href="mailto:<?php echo $contact_email; ?>" class="text-white text-decoration-none">
                                        <?php echo $contact_email; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo generateWhatsAppLink('informações gerais', $whatsapp_number); ?>" 
                       class="btn btn-accent btn-lg px-5 py-3" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Fale Conosco Agora
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Canal do Provedor. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="<?php echo generateWhatsAppLink('informações gerais', $whatsapp_number); ?>" 
                       class="text-white me-3" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="mailto:<?php echo $contact_email; ?>" class="text-white">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
