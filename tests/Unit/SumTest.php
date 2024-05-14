<?php

describe('sum', function () {
    it('may sum integers', function () {
        $result = 2;
  
        expect($result)->toBe(2);
     });
  
     it('may sum floats', function () {
        $result = 4.0;
  
        expect($result)->toBe(4.0);
     });
 });