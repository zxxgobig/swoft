<?php

namespace Swoft\Di\Parser;

use Swoft\Di\Annotation\Bean;

/**
 *
 *
 * @uses      BeanParser
 * @version   2017年09月03日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class BeanParser extends AbstractParser
{
    /**
     * @param string $className
     * @param Bean   $objectAnnotation
     * @param string $propertyName
     * @param string $methodName
     *
     * @return array
     */
    public function parser(string $className, $objectAnnotation = null, string $propertyName = "", string $methodName = "", $propertyValue = null)
    {
        $name = $objectAnnotation->getName();
        $scope = $objectAnnotation->getScope();
        $beanName = empty($name) ? $className : $name;
        return [$beanName, $scope];
    }
}