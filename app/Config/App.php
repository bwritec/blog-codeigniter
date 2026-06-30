<?php

    namespace Config;

    use CodeIgniter\Config\BaseConfig;


    /**
     *
     */
    class App extends BaseConfig
    {
        /**
         * --------------------------------------------------------------------------
         * Base Site URL
         * --------------------------------------------------------------------------
         *
         * URL para a raiz do seu CodeIgniter. Normalmente, esta
         * será a sua URL base, COM uma barra ao final:
         *
         * E.g., http://example.com/
         */
        public string $baseURL = 'http://localhost:8080/';

        /**
         * Nomes de host permitidos na URL do site, além do nome
         * de host definido em `baseURL`. Configure esta opção se
         * desejar aceitar múltiplos nomes de host.
         *
         * E.g.,
         * Quando a URL do seu site é ($baseURL) 'http://example.com/', e o seu site
         * também aceita 'http://media.example.com/' e 'http://accounts.example.com/':
         *     ['media.example.com', 'accounts.example.com']
         *
         * @var list<string>
         */
        public array $allowedHostnames = [];

        /**
         * --------------------------------------------------------------------------
         * Index File
         * --------------------------------------------------------------------------
         *
         * Normalmente, este será o seu arquivo `index.php`, a menos que
         * você o tenha renomeado. Se você configurou seu servidor web para
         * remover esse arquivo das URIs do seu site, defina essa variável
         * como uma string vazia.
         */
        public string $indexPage = 'index.php';

        /**
         * --------------------------------------------------------------------------
         * URI PROTOCOL
         * --------------------------------------------------------------------------
         *
         * Este item determina qual variável global do servidor deve ser
         * usada para obter a string da URI. A configuração padrão 'REQUEST_URI'
         * funciona para a maioria dos servidores. Se os seus links não parecerem
         * funcionar, experimente uma das outras opções disponíveis:
         *
         *  'REQUEST_URI': Uses $_SERVER['REQUEST_URI']
         * 'QUERY_STRING': Uses $_SERVER['QUERY_STRING']
         *    'PATH_INFO': Uses $_SERVER['PATH_INFO']
         *
         * WARNING: Se você definir isso como 'PATH_INFO', as
         *          URIs sempre terão a codificação URL decodificada!
         */
        public string $uriProtocol = 'REQUEST_URI';

        /**
         *--------------------------------------------------------------------------
         * Allowed URL Characters
         *--------------------------------------------------------------------------
         *
         * Isso permite especificar quais caracteres são permitidos
         * nas suas URLs. Quando alguém tentar enviar uma URL com
         * caracteres não permitidos, receberá uma mensagem de aviso.
         *
         * Como medida de segurança, recomenda-se fortemente limitar
         * as URLs ao menor número possível de caracteres.
         *
         * Por padrão, apenas estes são permitidos: `a-z 0-9~%.:_-`
         *
         * Defina uma string vazia para permitir todos os
         * caracteres — mas apenas se você for louco.
         *
         * O valor configurado é, na verdade, um grupo de caracteres de
         * expressão regular e será usado como: '/\A[<permittedURIChars>]+\z/iu'
         *
         * NÃO ALTERE ISSO A MENOS QUE COMPREENDA TOTALMENTE AS REPERCUSSÕES!!
         *
         */
        public string $permittedURIChars = 'a-z 0-9~%.:_\-';

        /**
         * --------------------------------------------------------------------------
         * Default Locale
         * --------------------------------------------------------------------------
         *
         * A localidade (Locale) representa, de modo geral, o idioma
         * e a localização a partir dos quais o visitante está acessando
         * o site. Ela determina os textos de idioma e outros elementos (como
         * formatos de moeda, números, etc.) que o seu programa deve utilizar
         * para essa solicitação.
         */
        public string $defaultLocale = 'en';

        /**
         * --------------------------------------------------------------------------
         * Negotiate Locale
         * --------------------------------------------------------------------------
         *
         * Se definido como true, o objeto Request atual determinará
         * automaticamente o idioma a ser utilizado com base no valor
         * do cabeçalho Accept-Language.
         *
         * Se for false, nenhuma detecção automática será realizada.
         */
        public bool $negotiateLocale = false;

        /**
         * --------------------------------------------------------------------------
         * Supported Locales
         * --------------------------------------------------------------------------
         *
         * Se $negotiateLocale for true, este array lista as
         * localidades suportadas pela aplicação em ordem
         * decrescente de prioridade. Se nenhuma correspondência
         * for encontrada, a primeira localidade será utilizada.
         *
         * IncomingRequest::setLocale() também usa esta lista.
         *
         * @var list<string>
         */
        public array $supportedLocales = ['en'];

        /**
         * --------------------------------------------------------------------------
         * Application Timezone
         * --------------------------------------------------------------------------
         *
         * O fuso horário padrão que será utilizado em sua aplicação
         * para exibir datas com o *helper* de datas, e que pode ser
         * obtido por meio de `app_timezone()`.
         *
         * @see https://www.php.net/manual/en/timezones.php para a lista
         *     de fusos horários suportados pelo PHP.
         */
        public string $appTimezone = 'UTC';

        /**
         * --------------------------------------------------------------------------
         * Default Character Set
         * --------------------------------------------------------------------------
         *
         * Isso determina qual conjunto de caracteres é usado por
         * padrão em vários métodos que exigem o fornecimento de
         * um conjunto de caracteres.
         *
         * @see http://php.net/htmlspecialchars para uma lista de
         *     conjuntos de caracteres suportados.
         */
        public string $charset = 'UTF-8';

        /**
         * --------------------------------------------------------------------------
         * Force Global Secure Requests
         * --------------------------------------------------------------------------
         *
         * Se definido como true, isso forçará que todas as solicitações
         * feitas a esta aplicação ocorram por meio de uma conexão segura (HTTPS).
         * Caso a solicitação recebida não seja segura, o usuário será
         * redirecionado para uma versão segura da página e o cabeçalho
         * HTTP Strict Transport Security (HSTS) será definido.
         */
        public bool $forceGlobalSecureRequests = false;

        /**
         * --------------------------------------------------------------------------
         * Reverse Proxy IPs
         * --------------------------------------------------------------------------
         *
         * If your server is behind a reverse proxy, you must whitelist the proxy
         * IP addresses from which CodeIgniter should trust headers such as
         * X-Forwarded-For or Client-IP in order to properly identify
         * the visitor's IP address.
         *
         * You need to set a proxy IP address or IP address with subnets and
         * the HTTP header for the client IP address.
         *
         * Here are some examples:
         *     [
         *         '10.0.1.200'     => 'X-Forwarded-For',
         *         '192.168.5.0/24' => 'X-Real-IP',
         *     ]
         *
         * @var array<string, string>
         */
        public array $proxyIPs = [];

        /**
         * --------------------------------------------------------------------------
         * Content Security Policy
         * --------------------------------------------------------------------------
         *
         * Enables the Response's Content Secure Policy to restrict the sources that
         * can be used for images, scripts, CSS files, audio, video, etc. If enabled,
         * the Response object will populate default values for the policy from the
         * `ContentSecurityPolicy.php` file. Controllers can always add to those
         * restrictions at run time.
         *
         * For a better understanding of CSP, see these documents:
         *
         * @see http://www.html5rocks.com/en/tutorials/security/content-security-policy/
         * @see http://www.w3.org/TR/CSP/
         */
        public bool $CSPEnabled = false;
    }
