function ispalindrome(str){
    const clearStr = str.replace(/[^a-zA-Z0-9]/g, '').toLowerCase();
    return clearStr === clearStr.split('').reverse().join('');
}
console.log(ispalindrome("A man, a plan, a canal, panama"));
console.log(ispalindrome("racecar"));
console.log(ispalindrome("hello"));
