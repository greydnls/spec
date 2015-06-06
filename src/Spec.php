<?php
/**
 * Created by PhpStorm.
 * User: kayladaniels
 * Date: 6/6/15
 * Time: 11:37 AM
 */

namespace Kayladnls\Spec;


interface Spec {

    public function also(Spec $right);

    public function either(Spec $right);

    public function not(Spec $spec);

    public function isSatisfiedBy($argument);
}