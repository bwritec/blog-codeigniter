<?php

    /**
     *--------------------------------------------------------------------------
     * ERROR DISPLAY
     *--------------------------------------------------------------------------
     * Durante o desenvolvimento, queremos exibir o maior número
     * possível de erros para garantir que eles não cheguem à
     * produção — e para nos poupar de horas de depuração penosa.
     *
     * Se você definir 'display_errors' como '1', o relatório
     * detalhado de erros do CI4 será exibido.
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
     * alterações em todo o sistema. Ele controla se o Kint é carregado,
     * além de alguns outros itens. Também pode ser utilizado na sua
     * própria aplicação.
     */
    defined('CI_DEBUG') || define('CI_DEBUG', true);
