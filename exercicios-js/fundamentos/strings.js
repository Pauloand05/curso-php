const nome = 'paulo'

console.log(nome.charAt(4))
console.log(nome.charAt(6))
console.log(nome.charCodeAt(3)) //tabela asc
console.log(nome.indexOf("a"))

console.log(nome.substring(1))
console.log(nome.substring(1, 4))

console.log('Nome '.concat(nome).concat("!"))
console.log('Nome ' + nome + "!")
console.log(nome.replace(/\w/g, 'e'))
console.log(nome.replace('o', 'a'))

console.log('Paulo,Lucas,Marcos'.split(','))
