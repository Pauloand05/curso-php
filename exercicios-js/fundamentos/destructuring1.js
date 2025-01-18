// novo recurso do ES2015

const pessoa = {
    nome: 'Paulo',
    idade: 19,
    endereco: {
        logradouro: 'Rua 12',
        numero: 3
    }
}

const {nome, idade} = pessoa
console.log(nome, idade)

const {nome: n, idade: i} = pessoa
console.log(n, i)

const {endereco: {logradouro, numero}} = pessoa
console.log(logradouro, numero)