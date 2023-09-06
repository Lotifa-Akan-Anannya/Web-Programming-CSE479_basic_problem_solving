function calculate(num1,num2,operator){
    switch (operator){
        case '+':
            return num1 + num2;
        case '-':
            return num1 - num2;
        case '*':
            return num1 * num2;
        case '/':
            if(num2 !== 0){
                return num1 / num2;
            } else{
                return "cannot devide by zero.";
            }
        default: 
            return "Invalid operator.";
        
        
    }
}

console.log(calculate(5,3,'+'));
console.log(calculate(10,4,'-'));
console.log(calculate(6,2,'*'));
console.log(calculate(15,3,'/'));
console.log(calculate(5,3,'%'));
