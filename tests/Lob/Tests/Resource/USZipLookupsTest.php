<?php

use Lob\Lob;
use PHPUnit\Framework\TestCase;
use BadMethodCallException;

class USZipLookupsTest extends TestCase
{
    protected function setUp(): void
    {
        $this->lob = new Lob(getenv('LOB_API_KEY'));
        $this->usZip = array(
            'zip_code' => '94107'
        );
    }

    public function testLookup()
    {
        $zipLookup = $this->lob->usZipLookups()->lookup($this->usZip);

        $this->assertTrue(is_array($zipLookup));
        $this->assertTrue(array_key_exists('id', $zipLookup));
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testGet()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usZipLookups()->get('id');
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testAll()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usZipLookups()->all();
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testCreate()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usZipLookups()->create($this->usZip);
    }

    /**
    * @expectedException BadMethodCallException
    */
    public function testDelete()
    {
        $this->expectException(BadMethodCallException::class);
        $this->lob->usZipLookups()->delete('id');
    }

}
