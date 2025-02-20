# PHP Type Juggling Bug

This example demonstrates a common error in PHP: unexpected behavior due to type juggling when performing arithmetic operations.

The `calculateSum` function aims to add up numbers in an array.  However, because the input array contains a string ('4'), PHP's loose typing system implicitly converts the string to a number, but the result might not be what's expected depending on the context.  This leads to unexpected output.  The solution demonstrates how to avoid this using strict type checking.