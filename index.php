<?php
// CONFIGURAÇÕES - coloque aqui seu Pixel ID e seu Access Token da API Eventos do TikTok
$pixel_id = 'D17FUD3C77U8DLIL918G';       // Seu Pixel ID (ex: D17FUD3C77U8DLIL918G)
$access_token = 'd8b83ec596437d4a1f23a2347099b85318b52dbf';  // Seu Access Token da API Eventos

// Função para enviar evento via API do TikTok
function sendTikTokEventAPI($access_token) {
    $url = "https://business-api.tiktok.com/open_api/v1.2/pixel/track/";

    // Dados do evento
    $data = [
        "pixel_code" => $GLOBALS['pixel_id'],
        "event" => "ClickButton",
        "timestamp" => time(),
        "context" => [
            "page_url" => $_SERVER['HTTP_REFERER'] ?? "unknown",
            "user_agent" => $_SERVER['HTTP_USER_AGENT'] ?? "unknown",
            "ip" => $_SERVER['REMOTE_ADDR'] ?? "unknown"
        ],
        "properties" => [
            "content_type" => "product",
            "content_name" => "Curso IA - Acesso",
            "value" => 1,
            "currency" => "BRL"
        ]
    ];

    $payload = json_encode([
        "pixel_code" => $GLOBALS['pixel_id'],
        "event" => "ClickButton",
        "timestamp" => time(),
        "context" => [
            "page_url" => $_SERVER['HTTP_REFERER'] ?? "unknown",
            "user_agent" => $_SERVER['HTTP_USER_AGENT'] ?? "unknown",
            "ip" => $_SERVER['REMOTE_ADDR'] ?? "unknown"
        ],
        "properties" => [
            "content_type" => "product",
            "content_name" => "Curso IA - Acesso",
            "value" => 1,
            "currency" => "BRL"
        ]
    ]);

    // Cabeçalhos
    $headers = [
        "Content-Type: application/json",
        "Access-Token: $access_token"
    ];

    // Iniciar curl
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);

    $response = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($err) {
        error_log("Erro ao enviar evento TikTok API: $err");
    } else {
        // Log ou tratamento da resposta, se quiser
    }
}

// Se este script receber uma requisição POST para enviar o evento da API, dispare o evento
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'send_event_api') {
    sendTikTokEventAPI($access_token);
    echo json_encode(['status' => 'ok']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Transforme Sua Carreira com IA - Acesso Exclusivo</title>
<meta name="description" content="Descubra como a Inteligência Artificial pode revolucionar sua carreira. Método comprovado por milhares de alunos." />
<meta name="keywords" content="inteligência artificial, IA, curso, carreira, tecnologia, programação" />

<!-- Open Graph -->
<meta property="og:title" content="Transforme Sua Carreira com IA - Acesso Exclusivo" />
<meta property="og:description" content="Descubra como a Inteligência Artificial pode revolucionar sua carreira." />
<meta property="og:type" content="website" />

<!-- TikTok Pixel Code Start -->
<script>
!function (w, d, t) {
    w.TiktokAnalyticsObject = t;
    var ttq = w[t] = w[t] || [];
    ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"];
    ttq.setAndDefer = function (t, e) { t[e] = function () { t.push([e].concat(Array.prototype.slice.call(arguments, 0))) } };
    for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
    ttq.instance = function (t) {
        for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
        return e
    };
    ttq.load = function (e, n) {
        var r = "https://analytics.tiktok.com/i18n/pixel/events.js", o = n && n.partner;
        ttq._i = ttq._i || {};
        ttq._i[e] = [];
        ttq._i[e]._u = r;
        ttq._t = ttq._t || {};
        ttq._t[e] = +new Date;
        ttq._o = ttq._o || {};
        ttq._o[e] = n || {};
        n = document.createElement("script");
        n.type = "text/javascript";
        n.async = !0;
        n.src = r + "?sdkid=" + e + "&lib=" + t;
        e = document.getElementsByTagName("script")[0];
        e.parentNode.insertBefore(n, e)
    };

    ttq.load('<?= $pixel_id ?>');
    ttq.page();
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End -->

<style>
    /* Copiei seu CSS aqui... */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 50%, #4338ca 100%);
        padding: 2rem 0;
    }

    .header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        background: #fbbf24;
        color: #000;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    .badge-icon {
        width: 1rem;
        height: 1rem;
        margin-right: 0.5rem;
    }

    .main-title {
        font-size: clamp(2rem, 5vw, 4rem);
        font-weight: 500;
        color: white;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .gradient-text {
        background: linear-gradient(to right, #fbbf24, #f97316);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .subtitle {
        font-size: 1.25rem;
        color: #d1d5db;
        margin-bottom: 2rem;
        max-width: 48rem;
        margin-left: auto;
        margin-right: auto;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    .benefit-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 0.5rem;
        padding: 1.5rem;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .benefit-card:hover {
        transform: translateY(-5px);
    }

    .benefit-icon {
        width: 3rem;
        height: 3rem;
        margin: 0 auto 1rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }

    .icon-yellow { background: #fbbf24; }
    .icon-green { background: #10b981; }
    .icon-blue { background: #3b82f6; }

    .benefit-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: white;
        margin-bottom: 0.5rem;
    }

    .benefit-description {
        color: #d1d5db;
    }

    .cta-section {
        max-width: 42rem;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 0.5rem;
        padding: 2rem;
        text-align: center;
    }

    .cta-title {
        font-size: 1.875rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1rem;
    }

    .cta-description {
        color: #4b5563;
        font-size: 1.125rem;
        margin-bottom: 1.5rem;
    }

    .cta-button {
        width: 100%;
        height: 3.5rem;
        font-size: 1.125rem;
        font-weight: 600;
        background: linear-gradient(to right, #10b981, #059669);
        color: white;
        border: none;
        border-radius: 0.375rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .cta-button:hover {
        background: linear-gradient(to right, #059669, #047857);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
    }

    .arrow-icon {
        width: 1.25rem;
        height: 1.25rem;
    }

    .security-text {
        margin-top: 1.5rem;
        font-size: 0.875rem;
        color: #6b7280;
    }

    .social-proof {
        text-align: center;
        margin-top: 3rem;
    }

    .social-proof-text {
        color: #d1d5db;
        margin-bottom: 1rem;
    }

    .rating-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .star {
        width: 2rem;
        height: 2rem;
        background: #fbbf24;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .rating-text {
        color: white;
        font-weight: 600;
        margin-left: 0.5rem;
    }

    .urgency {
        text-align: center;
        margin-top: 2rem;
    }

    .urgency-badge {
        display: inline-block;
        background: #dc2626;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .benefits-grid {
            grid-template-columns: 1fr;
        }

        .cta-section {
            margin: 0 1rem;
            padding: 1.5rem;
        }

        .rating-container {
            justify-content: center;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeInUp 0.6s ease-out;
    }

    .pixel-container {
        display: none;
    }
</style>
</head>
<body>

<div id="pixel-container" class="pixel-container"></div>

<div class="hero-section">
    <div class="container">
        <div class="header animate-fade-in">
            <div class="badge">
                <svg class="badge-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                </svg>
                OPORTUNIDADE LIMITADA
            </div>

            <h1 class="main-title">
                Descubra Como a
                <span class="gradient-text">Inteligência Artificial</span>
                Pode Transformar Sua Carreira
            </h1>

            <p class="subtitle">
                Aprenda as habilidades mais demandadas do mercado e se torne um profissional disputado na era da IA
            </p>
        </div>

        <div class="cta-section animate-fade-in">
            <h2 class="cta-title">Acesse Agora o Curso Completo</h2>

            <button class="cta-button" onclick="handleCTAClick()">
                QUERO ACESSAR O CURSO AGORA
                <svg class="arrow-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </button>

            <p class="security-text">🔒 Acesso 100% seguro e garantido</p>
        </div>
        <br><br>

        <div class="benefits-grid">
            <div class="benefit-card animate-fade-in">
                <div class="benefit-icon icon-yellow">🎯</div>
                <h3 class="benefit-title">Método Comprovado</h3>
                <p class="benefit-description">Sistema passo a passo testado por milhares de alunos</p>
            </div>

            <div class="benefit-card animate-fade-in">
                <div class="benefit-icon icon-green">📈</div>
                <h3 class="benefit-title">Resultados Rápidos</h3>
                <p class="benefit-description">Veja mudanças na sua carreira em poucas semanas</p>
            </div>

            <div class="benefit-card animate-fade-in">
                <div class="benefit-icon icon-blue">⚡</div>
                <h3 class="benefit-title">Suporte Total</h3>
                <p class="benefit-description">Acompanhamento completo durante toda sua jornada</p>
            </div>
        </div>

        <div class="social-proof animate-fade-in">
            <p class="social-proof-text">Mais de 50.000 alunos já transformaram suas carreiras</p>
            <div class="rating-container">
                <div class="star">⭐</div>
                <div class="star">⭐</div>
                <div class="star">⭐</div>
                <div class="star">⭐</div>
                <div class="star">⭐</div>
                <span class="rating-text">4.9/5 (12.847 avaliações)</span>
            </div>
        </div>

        <div class="urgency animate-fade-in">
            <div class="urgency-badge">
                ⏰ Oferta por tempo limitado - Não perca!
            </div>
        </div>
    </div>
</div>

<script>
function handleCTAClick() {
    // Evento TikTok Pixel (JS)
    if (typeof window !== "undefined" && window.ttq) {
        window.ttq.track("ClickButton", {
            content_type: "product",
            content_name: "Curso IA - Acesso",
            value: 1,
            currency: "BRL",
        });
    }

    // Evento TikTok API (via AJAX POST para este mesmo script PHP)
    fetch("", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "action=send_event_api"
    }).then(response => response.json())
      .then(data => {
          // console.log("Evento API TikTok enviado", data);
      }).catch(err => {
          // console.error("Erro ao enviar evento API TikTok", err);
      });

    // Redirecionar para página do curso
    window.location.href = "https://curso-ia.programacaoweb.com.br/?ref=O99938718Y";
}

function addScrollAnimations() {
    const elements = document.querySelectorAll('.animate-fade-in');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(el => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', addScrollAnimations);
</script>

</body>
</html>
