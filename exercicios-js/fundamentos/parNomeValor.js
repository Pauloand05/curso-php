// par nome/valor
const saudacao = 'olá' // contexto léxico 1

function exec() {
    const saudacao = 'Eai' //contexto léxico 2
    return saudacao
}

// Ojetos são frupos aninhados de pares nome/valor
const cliente = {
    nome: 'João',
    idade: 32,
    peso: 90,
    endereco: {
        logradouro: 'Rua A ',
        numero: 123
    }
}

console.log(saudacao)
console.log(exec())
console.log(cliente)