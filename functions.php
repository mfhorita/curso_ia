function enviar_evento_tiktok() {
    $url = 'https://business-api.tiktok.com/open_api/v1.2/pixel/track/';

    $dados = array(
        'pixel_code' => 'SEU_PIXEL_ID_AQUI',
        'event' => 'ClickButton',
        'event_id' => uniqid(),
        'timestamp' => time() * 1000,
        'context' => array(
            'user' => array(
                'ip' => $_SERVER['REMOTE_ADDR'],
                'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            ),
            'page' => array(
                'url' => (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'https://seusite.com')
            )
        ),
        'properties' => array(
            'value' => 0, 
            'currency' => 'BRL'
        )
    );

    $args = array(
        'body' => json_encode($dados),
        'headers' => array(
            'Content-Type' => 'application/json',
            'Access-Token' => 'SEU_ACCESS_TOKEN_AQUI'
        ),
        'timeout' => 60
    );

    $response = wp_remote_post($url, $args);

    if (is_wp_error($response)) {
        error_log('Erro ao enviar evento TikTok: ' . $response->get_error_message());
    } else {
        error_log('Evento TikTok enviado com sucesso: ' . wp_remote_retrieve_body($response));
    }
}
