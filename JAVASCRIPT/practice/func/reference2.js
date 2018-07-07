var value = [1, 2, 4, 8, 16];

function deleteElement(value){
  value.pop();
  value.push(19);
  return value;
}

console.log(deleteElement(value));
console.log(value);
