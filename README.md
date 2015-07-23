#Spec
A Simple Specification library for PHP

[![Build Status](https://travis-ci.org/kayladnls/spec.svg?branch=master)](https://travis-ci.org/kayladnls/spec)

### Installation

```
composer require kayladnls/spec
```

### What is it?
> "the specification pattern is a particular software design pattern, 
whereby business rules can be recombined by chaining the business 
rules together using boolean logic. The pattern is frequently used in 
the context of domain-driven design." -- [wikipedia](https://en.wikipedia.org/wiki/Specification_pattern)

### How do I use it?

#### Use the builder
```php
$all_spec = Kayladnls/Spec/Builder::all(new MustHaveFourLegs(), new MustHaveStripesSpec());

$all_spec->isSatisfiedBy($elephpant) //False 
$all_spec->isSatisfiedBy($zebra)     // True

$any_spec = Kayladnls/Spec/Builder::any($all_spec, new IsLizardSpec());
$any_spec->isSatisfiedBy($iguana) // True
```

Or, you can use functions if that's what tickles your fancy. 

#### Function Based

```php
$all_spec = Kayladnls/Spec/all([new MustHaveFourLegs(), new MustHaveStripesSpec()]);

Kayladnls/Spec/satisfies($elephpant, $all_spec) //False 
Kayladnls/Spec/satisfies($zebra, $all_spec) //True 

$any_spec = Kayladnls/Spec/any([$all_spec, new IsLizardSpec()]);
Kayladnls/Spec/satisfies($iguana, $any_spec) // True

$none_spec = Kayladnls/Spec/none([new MustHaveFourLegs(), new MustHaveSpotsSpec()]);
Kayladnls/Spec/satisfies($kangaroo, $none_spec) // true
Kayladnls/Spec/satisfies($cheetah, $none_spec) // false
```

### Example
```php
if ($all_spec->isSatisfiedBy($zebra)){
	// Do Some cool Zebra Stuff here. 
}

// Function Based
if (satisfies($iguana, $any_spec)){
	// do some cool lizard-based stuff here. 
}
```
