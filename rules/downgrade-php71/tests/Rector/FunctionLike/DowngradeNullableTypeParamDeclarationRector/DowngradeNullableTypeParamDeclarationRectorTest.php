<?php

declare(strict_types=1);

namespace Rector\DowngradePhp71\Tests\Rector\FunctionLike\DowngradeNullableTypeParamDeclarationRector;

use Iterator;
use Rector\DowngradePhp71\Rector\FunctionLike\DowngradeNullableTypeParamDeclarationRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class DowngradeNullableTypeParamDeclarationRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return DowngradeNullableTypeParamDeclarationRector::class;
    }
}
