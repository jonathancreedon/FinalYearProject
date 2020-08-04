<?php
function comparatorsat($object1, $object2) { 
    return $object1->satisfaction > $object2->satisfaction; 
} 

function comparatoruse($object1, $object2) { 
    return $object1->usefulness > $object2->usefulness; 
} 

function comparatorscore($object1, $object2) { 
    return $object1->score < $object2->score; 
} 

function comparatorsal($object1, $object2) { 
    return $object1->avsal > $object2->avsal; 
}

function comparatoropp($object1, $object2) { 
    return $object1->opportunity > $object2->opportunity; 
} 
?>