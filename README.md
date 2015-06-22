#Spec
A Simple Specification library for PHP


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
```
$and_spec = Kayladnls/Spec/Builder::both(new MustHaveFourLegs(), new MustHaveStripesSpec());

$and_spec->isSatisfiedBy($elephpant) //False 
$and_spec->isSatisfiedBy($zebra)     // True

$or_spec = Kayladnls/Spec/Builder::either($and_spec, new IsLizardSpec());

$or_spec->isSatisfiedBy($iguana) // True
```

Or, you can use functions if that's what tickles your fancy. 

#### Function Based

```
$and_spec = Kayladnls/Spec/both(new MustHaveFourLegs(), new MustHaveStripesSpec());

satisfies($elephpant, $and_spec) //False 
satisfies($zebra, $and_spec) //True 

$or_spec = Kayladnls/Spec/either($and_spec, new IsLizardSpec());

satisfies($iguana, $or_spec) // True
```

### Example
```
if ($and_spec($zebra)){
	// Do Some cool Zebra Stuff here. 
}

// Function Based
if (satisfies($iguana, $orspec)){
	// do some cool lizard-based stuff here. 
}
```