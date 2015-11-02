# CDTI
Common Data Type Interface

todo: add more description.

This library provides object-oriented interface for primitive and compound data types.
This describes strings, chars (single symbol), numbers (both real and integer), booleans, datetimes, arrays objects with a number of classes.
Classes for reflections, formats and exception described for data exchange.

## Implemented naming agreements:
Variables and properties use underscore naming in lower case, constants use underscore naming in upper case;
All namespaces parts (except for abbreviations) finishes with "s" suffix.
All classes, abstract classes, interfaces and traits have appropriate prefix, foolowing capital letter name thus forming camelStyle naming.

Interfaces may have eather "i" or "h" prefix. "i" prefix represent full description of resulting object, while "h" prefix says about partial functionality.
Abstract classes have "a" prefix.
Classes have "c" prefix.
Traits have "t" prefix.

Methods use camel case for naming, and may have prefixes: set, get, do, is, has, as.
