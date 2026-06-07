<?php

// Finally is much safe than writing the same code after the catch statement [echo cleanup]
// Because you might use return before which will result in that code after catch not being
// executed 
// Without finally - cleanup code NEVER runs if you return
function test1() {
    try {
        throw new Exception('error');
        return "result";  // returns here
    } catch (Exception $e) {
        return "handled";  // returns here - cleanup below is SKIPPED!
    }
    echo "cleanup";  // ❌ This never runs!
}

// With finally - cleanup ALWAYS runs
function test2() {
    try {
        throw new Exception('error');
        return "result";
    } catch (Exception $e) {
        return "handled";
    } finally {
        echo "cleanup";  // ✅ This ALWAYS runs, even with return!
    }
}


test1();
test2();