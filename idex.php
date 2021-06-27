function range(start, end, increment) {
    var array = [];
    var current = start;

    increment = increment || 1;
    if (increment > 0) {
        while (current <= end) {
            array.push(current);
            current += increment;
        }
    } else {
        while (current >= end) {
            array.push(current);
            current += increment;
        }
    }
    return array;
}

console.log(range(1, 3, 0));    
console.log(range(2, 5));
console.log(range(1, 9, 1));
console.log(range(5, 2, -1))



function range( start, end, increment ) {
  
  // create the result array
  var result = [];
  
  // test to see if we have an increment, otherwise set it to 1
  if ( increment == undefined )
    increment = 1;
  
  // calculate the number of times to loop (this is because you might be going 
  // up or down with your increment)
  numLoops = Math.abs( (end - start)/ increment ) + 1 ;
  
  // loop that many times
  for ( var i = 0; i < numLoops; i ++ ) {
  
    // add (push) the value of start to the array
	result.push( start );
     
    // increment the value of start
    start += increment;
  }
  
  // return the array with all the things in it
  return result;
}

function sum( numArray ) {
  // set a variable to hold the sum
  var arrayTotal = 0;
  
  // see how many numbers are in the array
  numLoops = numArray.length;
  
  // loop that many times
  for ( var i = 0; i < numLoops; i ++ ) {
    // add the number at that index to the sum
    arrayTotal += numArray[i];
  }
  // return the sum
  return arrayTotal;
}

console.log(range(1, 10));
// → [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
console.log(range(5, 2, -1));
// → [5, 4, 3, 2]
console.log(sum(range(1, 10)));
// → 55




