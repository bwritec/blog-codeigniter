<?php

    /**
     *--------------------------------------------------------------------------
     * ERROR DISPLAY
     *--------------------------------------------------------------------------
     * Não exiba nada disso em ambientes de produção. Em vez disso,
     * deixe o sistema capturar a ocorrência e exibir uma mensagem
     * de erro genérica.
     *
     * Se você definir 'display_errors' como '1', o relatório
     * detalhado de erros do CI4 será exibido.
     */
    error_reporting(E_ALL & ~E_DEPRECATED);

    /**
     * Se você quiser suprimir mais tipos de erros.
     * error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
     */
    ini_set('display_errors', '0');

    /**
     *--------------------------------------------------------------------------
     * DEBUG MODE
     *--------------------------------------------------------------------------
     * O modo de depuração é uma flag experimental que pode permitir
     * alterações em todo o sistema. Ele não é amplamente utilizado
     * atualmente e pode não ser mantido no lançamento do framework.
     */
    defined('CI_DEBUG') || define('CI_DEBUG', false);
