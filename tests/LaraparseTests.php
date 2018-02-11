<?php

namespace Tests;


class LaraparseTests extends TestCase
{
    public function test_if_text_given_is_equals_text_parsed()
    {
        $textParsed = $this->getInstance()->text($this->textGiven);
        $this->assertEquals($textParsed, $this->textExpected);
    }

    public function test_if_blade_directive_is_compiled_correctly()
    {
        $bladeCompiler = $this->getCompiler();

        $BladeDirective = '@laraparse("' . $this->textGiven . '")';
        $compiledBladeDirective = $bladeCompiler->compileString($BladeDirective);

        $compiledExpected = '<?php echo Laraparse::text("' . $this->textGiven . '"); ?>';

        $this->assertEquals($compiledBladeDirective, $compiledExpected);


    }
}
