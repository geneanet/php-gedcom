<?php

namespace PhpGedcomTest;

use PhpGedcom\Parser;
use PHPUnit\Framework\TestCase;

/**
 * Class IssueCENSTest
 */
class IssueCENSTest extends TestCase
{
    /**
     * Test handling a malformation of CENS even.
     */
    public function testMalformationCENS(): void
    {
        $sample = realpath(__DIR__ . '/files/issueCENS.ged');

        $parser = new Parser();
        $gedcom = $parser->parse($sample);

        self::assertSame('CENS', $gedcom->getIndi()['I1']->getEven()[0]->getType());
        self::assertSame('CENS', $gedcom->getIndi()['I2']->getEven()[0]->getType());
        self::assertSame('1906', $gedcom->getIndi()['I2']->getEven()[0]->getDate());
    }
}
