<?php

namespace TDE\TwigWebpackManifestExtension\TokenParser;

class EntryTokenParserJs extends AbstractWebpackTokenParser
{
    /**
     * @return string
     */
    public function getTag()
    {
        return 'webpack_js';
    }

    /**
     * @param string $path
     * @return string
     */
    protected function render($path)
    {
        return '<script type="text/javascript" src="' . $path . '"></script>';
    }
}
