<?php

    use CodeIgniter\Boot;
    use Config\Paths;

    /**
     *---------------------------------------------------------------
     * VERIFICAR VERSÃO DO PHP
     *---------------------------------------------------------------
     */

    /**
     * Se você atualizar isso, não se esqueça de atualizar
     * o `spark`.
     */
    $minPhpVersion = '8.2';

    if (version_compare(PHP_VERSION, $minPhpVersion, '<'))
    {
        $message = sprintf(
            'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
            $minPhpVersion,
            PHP_VERSION,
        );

        header('HTTP/1.1 503 Service Unavailable.', true, 503);
        echo $message;

        exit(1);
    }

    /**
     * Caminho do .env (ajuste se necessário)
     */
    $envPath = dirname(__DIR__) . '/.env';

    /**
     * Se não existir .env, redireciona para install.php
     */
    if (!file_exists($envPath))
    {
        header('Location: install.php');
        exit;
    }

    /**
     *---------------------------------------------------------------
     * DEFINIR O DIRETÓRIO ATUAL
     *---------------------------------------------------------------
     */

    /**
     * Caminho para o front controller (este arquivo)
     */
    define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

    /**
     * Certifique-se de que o diretório atual aponte
     * para o diretório do controller frontal.
     */
    if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH)
    {
        chdir(FCPATH);
    }

    /**
     *---------------------------------------------------------------
     * BOOTSTRAP A APLICAÇÃO
     *---------------------------------------------------------------
     * Este processo define as constantes de caminho, carrega e
     * registra nosso autoloader — juntamente com o do Composer —,
     * carrega nossas constantes e inicia o processo de
     * inicialização (*bootstrapping*) específico para o ambiente.
     */

    /**
     * Carregar nosso arquivo de configuração de caminhos
     * Esta é a linha que talvez precise ser alterada,
     * dependendo da estrutura de pastas.
     */
    require FCPATH . '../app/Config/Paths.php';
    // ^^^ Altere esta linha se você mover a pasta da sua aplicação.

    $paths = new Paths();

    /**
     * Carregue o arquivo de inicialização (bootstrap)
     * do framework.
     */
    require $paths->systemDirectory . '/Boot.php';

    exit(Boot::bootWeb($paths));
