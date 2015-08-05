<?php

use DrewM\Morse\Morse;

class ConstantsTest extends PHPUnit_Framework_TestCase
{
    private $morseClass = 'DrewM\Morse\Morse';

    /**
     * Check if all feature test methods are provided with a constant on the Morse class for IDE autocompletion
     */
    public function testMorseClassHasFeatureConstants()
    {
        $reflectionClass = new ReflectionClass($this->morseClass);
        $constants = $reflectionClass->getConstants();
        $excludedMethods = array('testfake_negative', 'testfake_positive');

        $featureClasses = glob(dirname(__FILE__) . '/../src/Feature/*.php');
        foreach($featureClasses as $featureClass){
            $methodClassName = strtolower(pathinfo($featureClass, PATHINFO_FILENAME));
            $methodClassId = strtolower($methodClassName);

            $feature = new ReflectionClass(sprintf('DrewM\Morse\Feature\\%s', $methodClassName));
            foreach($feature->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED) as $reflectionMethod){
                $funcName = strtolower($reflectionMethod->getName());
                if(!in_array($funcName, $excludedMethods) && substr($funcName, 0, 4) == 'test'){
                    $methodId = $methodClassId . '/' . substr($funcName, 4);
                    $constantName = sprintf('FEATURE_%s', strtoupper(str_replace('/', '_', $methodId)));

                    $this->assertArrayHasKey($constantName, $constants);
                    $this->assertEquals(str_replace('_','-',$methodId), str_replace('_','-',$constants[$constantName]));
                }
            }
        }
    }
}
