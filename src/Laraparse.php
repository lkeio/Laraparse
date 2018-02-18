<?php

namespace Lkeio\Laraparse;

use Parsedown;

class Laraparse
{
    /**
     * Parses The text.
     *
     * @param string $text Markdown text syntax
     *
     * @return html Parsed text to Html
     */
    public function text($text)
    {
        $Parsedown = new Parsedown();

        return $Parsedown->text($text);
    }
}
