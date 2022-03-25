<?php

namespace Engine\Core\Template;

class Theme {

    const RULES_NAME_FILE = [
        'header' => 'header-%s.php',
        'footer' => 'footer-%s.php',
        'sidebar' => 'sidebar-%s.php',
    ];

    /**
     * Url current theme
     * @type string
     */
    public $url = '';

    public function header($name = '') {
        
    }

    public function footer($name = '') {
        
    }

    public function sidebar($name = '') {
        
    }

    public function block($name = '', $data = []) {
        
    }

    /**
     * @param $nameFile
     * @param array $data
     * @throws \Exception
     */
    private function loadTemplateFile($nameFile, $data = []) {
        $templateFile = ROOT_DIR . '/content/themes/default/' . $nameFile . '.php';

        if (is_file($templateFile)) {
            extract($data);
            require_once $templateFile;
        } else {
            throw new \Exception(sprintf('View file %s does not exist!', $templateFile));
        }
    }

}
