<?php

    /**
     * O ambiente de testes é reservado para testes com o
     * PHPUnit. O framework conta com condições especiais
     * integradas em diversos pontos para dar suporte a isso.
     * Você não pode utilizá-lo para o desenvolvimento.
     */

    /**
     *--------------------------------------------------------------------------
     * ERROR DISPLAY
     *--------------------------------------------------------------------------
     * Durante o desenvolvimento, queremos exibir o maior número
     * possível de erros para garantir que eles não cheguem à
     * produção — e para nos poupar de horas de depuração penosa.
     */
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    /**
     *--------------------------------------------------------------------------
     * DEBUG BACKTRACES
     *--------------------------------------------------------------------------
     * Se definida como true, essa constante fará com que as telas
     * de erro exibam rastreamentos de depuração (*debug backtraces*)
     * juntamente com as demais informações de erro. Caso prefira não
     * visualizar isso, defina esse valor como false.
     */
    defined('SHOW_DEBUG_BACKTRACE') || define('SHOW_DEBUG_BACKTRACE', true);

    /**
     *--------------------------------------------------------------------------
     * DEBUG MODE
     *--------------------------------------------------------------------------
     * O modo de depuração é uma flag experimental que pode permitir
     * alterações em todo o sistema. Ele não é amplamente utilizado
     * atualmente e pode não ser mantido no lançamento do framework.
     */
    defined('CI_DEBUG') || define('CI_DEBUG', true);
